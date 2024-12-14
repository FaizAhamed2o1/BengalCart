@extends('dashboard.layout.base')

{{-- @section('title', 'Dashboard Overview') --}}

@section('content')
    <!-- Main Content -->
    <main class="flex-1 p-4 sm:p-6 overflow-auto">
        <h1 class="text-xl sm:text-2xl font-semibold mb-4 text-center">Edit Slider</h1>
        <div class="bg-white shadow-md rounded-lg p-4 sm:p-6 lg:p-8 mx-2 sm:mx-4 lg:mx-6 xl:mx-10">
            <!-- Responsive Form -->
            <form class="max-w-md lg:max-w-lg mx-auto">
                <!-- Slider Name -->
                <div class="mb-5">
                    <label for="slider-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Slider Name
                    </label>
                    <input type="text" id="slider-name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter Slider Name" required />
                </div>

                <!-- Slider -->
                <div class="mb-5">
                    <label for="slider" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Slider
                    </label>
                    <input type="text" id="slider"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter Slider" required />
                </div>

                <!-- Another Slider -->
                <div class="mb-5">
                    <label for="another-slider" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Another Slider
                    </label>
                    <input type="text" id="another-slider"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter Another Slider" required />
                </div>

                <!-- Price -->
                <div class="mb-5">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Price
                    </label>
                    <input type="number" id="price"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter Price" required />
                </div>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row sm:justify-center gap-3">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Save
                    </button>
                    <a href="{{ route('slider') }}"
                        class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-6 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        Back
                    </a>
                </div>
            </form>
        </div>
    </main>
@endsection
