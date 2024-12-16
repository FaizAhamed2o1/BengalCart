@extends('dashboard.layout.base')

{{-- @section('title', 'Dashboard Overview') --}}

@section('content')
    <!-- Main Content -->
    <main class="flex-1 p-4 sm:p-6 overflow-auto">
        <div class="flex items-center justify-between my-3">
            @include('dashboard.layout.breadcrumb', ['breadcrumbs' => $breadcrumbs])
            <h1 class="text-xl sm:text-2xl font-semibold mb-4 text-center">Create Category</h1>
        </div>

        <div class="w-full bg-white shadow-md rounded-lg p-4 sm:p-6 lg:p-8 mx-2 sm:mx-4 lg:mx-6 xl:mx-10">
            <!-- Responsive Form -->

            <form id="categoryForm" class="w-full" enctype="multipart/form-data">
                <!-- Category Name -->
                <div class="mb-5">
                    <label for="category_name" class="block mb-2 text-sm font-medium text-gray-900">
                        Category Name <span class="text-red-500 text-md">*</span>
                    </label>
                    <input type="text" id="category_name" name="name" value="{{ $category->name }}"
                           class="w-full shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                           placeholder="Enter Category Name" required />

                </div>

                <!-- Category Thumbnail -->
                <div class="mb-5">
                    <label for="thumbnail" class="block mb-2 text-sm font-medium text-gray-900">
                        Category Thumbnail
                    </label>
                    <input type="file" id="thumbnail" name="thumbnail"
                           class="w-full shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" />



                    <div id="imagePreview" class="mt-3">
                        @if (!empty($category->thumbnail))
                            <img id="previewImg" src="{{ asset('storage/' . $category->thumbnail) }}"
                                 alt="Thumbnail Preview" class="w-32 h-32 object-cover rounded-lg">
                        @else
                            <img id="previewImg" src="" alt="Thumbnail Preview"
                                 class="hidden w-32 h-32 object-cover rounded-lg">
                        @endif
                    </div>
                </div>
                <div class="text-red-500 text-sm" id="errorContainer">*</div>
                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row sm:justify-center gap-3">
                    <button type="button" id="saveCategory"
                            class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-2.5 text-center">
                        <svg id="loadingSpinner" class="hidden animate-spin h-5 w-5 mr-3 text-white"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
                        </svg>
                        Save
                    </button>
                    <a href="{{ route('category') }}"
                       class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-6 py-2.5 text-center">
                        Back
                    </a>
                </div>
            </form>

        </div>
    </main>

    <script>
        $(document).ready(function() {
            const errorContainer = $('#errorContainer');
            errorContainer.hide();
            const saveButton = $('#saveCategory');
            const loadingSpinner = $('#loadingSpinner');

            // console.log("container ase",errorContainer);
            // Preview the uploaded image or replace the existing one
            $('#thumbnail').on('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $('#previewImg').attr('src', e.target.result).removeClass('hidden');
                    };
                    reader.readAsDataURL(file);
                }
            });

            // Save the category using Axios
            $('#saveCategory').on('click', function() {
                loadingSpinner.removeClass('hidden');
                saveButton.prop('disabled', true);
                const formData = new FormData();
                formData.append('name', $('#category_name').val());

                const thumbnail = $('#thumbnail')[0].files[0];
                if (thumbnail) {
                    formData.append('thumbnail', thumbnail);
                }

                axios.post('{{ route('categories.update', $category->id) }}', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                    .then(response => {
                        $('#category_name').prop('disabled', true);
                        $('#thumbnail').prop('disabled', true);

                        toastr.success("Category saved successfully!");
                        setTimeout(() => {
                            window.location.href = '{{ route('category') }}';
                        }, 2000);
                    })
                    .catch(error => {
                        let errors = error.response.data.errors;
                        errorContainer.show();
                        errorContainer.text("*" + Object.values(errors).join('\n'));
                    })
                    .finally(() => {
                        // Hide spinner and re-enable button
                        loadingSpinner.addClass('hidden');
                        saveButton.prop('disabled', false);
                    });
            });
        });
    </script>
@endsection
