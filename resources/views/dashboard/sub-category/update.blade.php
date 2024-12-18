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
                        Sub Category Name
                    </label>
                    <input required type="text" id="sub-category-name" name="name"
                           class="w-full shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                           placeholder="Enter Category Name" required />
                </div>

                <!-- Category Thumbnail -->
                <div class="mb-5">
                    <label for="thumbnail" class="block mb-2 text-sm font-medium text-gray-900">
                        Category
                    </label>
                    @if( $categories )
                        <select name="category_id" id="category-id" class="w-full shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3">
                            <option disabled selected>Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    @else
                        <p>No Categories avaialble</p>
                    @endif
                </div>

                <div class="text-red-500 text-sm" id="errorContainer">*</div>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row sm:justify-center gap-3">
                    <button type="button" id="saveSubCategory"
                            data-store-route="{{ route('subcategories.store') }}"
                            data-category-route="{{ route('sub-categories.index') }}"
                            class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-2.5 text-center">
                        <svg id="loadingSpinner" class="hidden animate-spin h-5 w-5 mr-3 text-white"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
                        </svg>
                        Save
                    </button>
                    <a href="{{ route('sub-categories.index') }}"
                       class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-6 py-2.5 text-center">
                        Back
                    </a>
                </div>

            </form>

        </div>
    </main>

    <script src="{{ asset('asset/js/dashboard/sub-category.js') }}"></script>

@endsection
