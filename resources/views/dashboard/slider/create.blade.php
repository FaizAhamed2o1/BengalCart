@extends('dashboard.layout.base')

@section('content')
    <!-- Main Content -->
    <main class="flex-1 p-4 sm:p-6 overflow-auto">
        <div class="flex items-center justify-between my-3">
            @include('dashboard.layout.breadcrumb', ['breadcrumbs' => $breadcrumbs])
            <h1 class="text-xl sm:text-2xl font-semibold mb-4 text-center">Create Category</h1>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4 sm:p-6 lg:p-8 mx-2 sm:mx-4 lg:mx-6 xl:mx-10">
            <!-- Form -->
            <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data" class="">
                @csrf
                <!-- Slider Name -->
                <div class="mb-5 w-full">
                    <label for="slider-name" class="block mb-2 text-sm font-medium text-gray-900">
                        Slider Name
                    </label>
                    <input type="text" id="slider-name" name="title"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                        placeholder="Enter Slider Name" required />
                </div>

                <!-- Slider Image -->
                <div class="mb-5">
                    <label for="slider-image" class="block mb-2 text-sm font-medium text-gray-900 ">
                        Slider Image
                    </label>
                    <input type="file" id="slider-image" name="image"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 "
                        required />
                </div>

                <!-- Index -->
                <div class="mb-5">
                    <label for="index" class="block mb-2 text-sm font-medium text-gray-900 ">
                        Index
                    </label>
                    <input type="text" id="index" name="index"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 "
                        placeholder="Enter Index" required />
                </div>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row sm:justify-center gap-3">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Save
                    </button>
                    <a href="{{ route('sliders.index') }}"
                        class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-6 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        Back
                    </a>
                </div>
            </form>
        </div>
    </main>
@endsection
