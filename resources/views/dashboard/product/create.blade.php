@extends('dashboard.layout.base')

@section('content')
    <!-- Main Content -->
    <main class="flex-1 p-4 sm:p-6 overflow-auto">
        <div class="flex items-center justify-between my-3">
            @include('dashboard.layout.breadcrumb', ['breadcrumbs' => $breadcrumbs])
            <h1 class="text-xl sm:text-2xl font-semibold mb-4 text-center">Create Product</h1>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4 sm:p-6 lg:p-8 mx-2 sm:mx-4 lg:mx-6 xl:mx-10">
            <!-- Form -->
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="">
                @csrf

                <!-- Name -->
                <div class="mb-5 w-full">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">
                        Product Name
                    </label>
                    <input type="text" id="name" name="name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                        placeholder="Enter Product Name" required />
                </div>

                <!-- Description -->
                <div class="mb-5 w-full">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">
                        Description
                    </label>
                    <textarea id="description" name="description"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                        placeholder="Enter Description"></textarea>
                </div>

                <!-- Features -->
                <div class="mb-5 w-full">
                    <label for="features" class="block mb-2 text-sm font-medium text-gray-900">
                        Features
                    </label>
                    <textarea id="features" name="features"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                        placeholder="Enter Features"></textarea>
                </div>

                <!-- Specification -->
                <div class="mb-5 w-full">
                    <label for="specification" class="block mb-2 text-sm font-medium text-gray-900">
                        Specification
                    </label>
                    <textarea id="specification" name="specification"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                        placeholder="Enter Specification"></textarea>
                </div>

                <!-- Buying Price -->
                <div class="mb-5 w-full">
                    <label for="buying_price" class="block mb-2 text-sm font-medium text-gray-900">
                        Buying Price
                    </label>
                    <input type="number" id="buying_price" name="buying_price"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                        placeholder="Enter Buying Price" required />
                </div>

                <!-- Selling Price -->
                <div class="mb-5 w-full">
                    <label for="selling_price" class="block mb-2 text-sm font-medium text-gray-900">
                        Selling Price
                    </label>
                    <input type="number" id="selling_price" name="selling_price"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                        placeholder="Enter Selling Price" required />
                </div>

                <!-- Discount -->
                <div class="mb-5 w-full">
                    <label for="discount" class="block mb-2 text-sm font-medium text-gray-900">
                        Discount (%)
                    </label>
                    <input type="number" id="discount" name="discount" min="0" max="100"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                        placeholder="Enter Discount" />
                </div>

                <!-- Main Image -->
                <div class="mb-5">
                    <label for="main_image" class="block mb-2 text-sm font-medium text-gray-900">
                        Main Image
                    </label>
                    <input type="file" id="main_image" name="main_image"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" />
                </div>

                <!-- Multiple Images -->
                <div class="mb-5">
                    <label for="multi_images" class="block mb-2 text-sm font-medium text-gray-900">
                        Additional Images
                    </label>
                    <input type="file" id="multi_images" name="multi_images[]" multiple
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" />
                </div>

                <div id="image-previews" class="flex space-x-4 mt-4">
                    {{-- preview --}}
                </div>


                <!-- Video URL -->
                <div class="mb-5 w-full">
                    <label for="video_url" class="block mb-2 text-sm font-medium text-gray-900">
                        Video URL
                    </label>
                    <input type="url" id="video_url" name="video_url"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                        placeholder="Enter Video URL" />
                </div>

                <!-- Stock Amount -->
                <div class="mb-5 w-full">
                    <label for="stock_amount" class="block mb-2 text-sm font-medium text-gray-900">
                        Stock Amount
                    </label>
                    <input type="number" id="stock_amount" name="stock_amount" min="0"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                        placeholder="Enter Stock Amount" required />
                </div>

                <!-- Is Out of Stock -->
                <div class="mb-5 w-full">
                    <label for="is_out_of_stock" class="block mb-2 text-sm font-medium text-gray-900">
                        Is Out of Stock
                    </label>
                    <select id="is_out_of_stock" name="is_out_of_stock"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3">
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                </div>

                <!-- Brand -->
                <div class="mb-5 w-full">
                    <label for="brand_id" class="block mb-2 text-sm font-medium text-gray-900">
                        Brand
                    </label>

                    <select id="brand_id" name="brand_id"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3">
                        <option value="" selected disabled>Select Brand</option>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Category -->
                <div class="mb-5 w-full">
                    <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900">
                        Category
                    </label>
                    <select id="category_id" name="category_id"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3">
                        <option value="" selected disabled>Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Sub-Category -->
                <div class="mb-5 w-full">
                    <label for="sub_category_id" class="block mb-2 text-sm font-medium text-gray-900">
                        Sub-Category
                    </label>
                    <select id="sub_category_id" name="sub_category_id"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3">
                        <option value="" selected disabled>Select Sub Category</option>
                        @foreach ($subCategories as $subCategory)
                            <option value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
                        @endforeachßß
                    </select>
                </div>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row sm:justify-center gap-3">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-2.5 text-center">
                        Save
                    </button>
                    <a href="{{ route('products.index') }}"
                        class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-6 py-2.5 text-center">
                        Back
                    </a>
                </div>
            </form>
        </div>
    </main>

    <script>
        $(document).ready(function() {
            // Handle file input change (multiple images selected)
            $('#multi_images').on('change', function(e) {
                const files = e.target.files;
                const previewContainer = $('#image-previews');

                previewContainer.empty(); // Clear previous previews
                previewContainer.append(
                '<div id="loader" class="w-full text-center">Uploading...</div>'); // Show loader

                // Loop through the selected files
                Array.from(files).forEach(function(file) {
                    const reader = new FileReader();

                    reader.onload = function(event) {
                        // Create the image preview
                        const imagePreview = $('<div class="relative w-24 h-24">');
                        imagePreview.append('<img src="' + event.target.result +
                            '" alt="Image" class="w-full h-full object-cover rounded-md" />'
                            );

                        // Create the remove button for each preview
                        const removeButton = $(
                            '<button type="button" class="absolute top-0 right-0 bg-red-500 text-white rounded-full w-5 h-5 flex items-center justify-center">X</button>'
                            );
                        removeButton.on('click', function() {
                            imagePreview.remove();
                        });

                        imagePreview.append(
                        removeButton); // Add the remove button to the preview
                        previewContainer.append(
                        imagePreview); // Add the preview to the container
                    };

                    reader.readAsDataURL(file); // Read the file as a data URL
                });

                // Simulate the removal of the loader after images are processed (can replace with actual AJAX upload logic)
                setTimeout(function() {
                    $('#loader').remove(); // Hide loader
                }, 2000); // Simulate a 2-second upload time
            });
        });
    </script>
@endsection
