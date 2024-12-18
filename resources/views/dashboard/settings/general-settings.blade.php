@extends('dashboard.layout.base')

@section('content')
    <main class="flex-1 p-6 overflow-auto">
        <div class="flex items-center justify-between my-3">
            @include('dashboard.layout.breadcrumb', ['breadcrumbs' => $breadcrumbs])
            <h1 class="text-xl sm:text-2xl font-semibold mb-4 text-center font-sans">General Settings</h1>
        </div>


        <div class="w-full bg-white shadow-md rounded-lg p-4 sm:p-6 lg:p-8">
            <!-- Responsive Form -->

            <form id="categoryForm" class="w-full" enctype="multipart/form-data">
                <!-- Category Name -->
                <div class="mb-5">
                    <label for="app_name" class="block mb-2 text-sm font-medium text-gray-900">
                        App Name
                    </label>
                    <input type="text" id="app_name" name="app_name"
                        class="w-full shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                        placeholder="Enter Category Name" required />
                </div>

                <!-- Category Thumbnail -->
                <div class="mb-5">
                    <label for="logo" class="block mb-2 text-sm font-medium text-gray-900">
                        App Logo
                    </label>
                    <input type="file" id="logo" name="logo"
                        class="w-full shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                        required />
                    <div id="imagePreview" class="mt-3">
                        <img id="previewImg" src="" alt="Thumbnail Preview"
                            class="hidden w-32 h-32 object-cover rounded-lg">
                    </div>
                </div>

                <div class="mb-5">
                    <label for="logo" class="block mb-2 text-sm font-medium text-gray-900">
                        App Favicon
                    </label>
                    <input type="file" id="logo" name="logo"
                        class="w-full shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                        required />
                    <div id="imagePreview" class="mt-3">
                        <img id="previewImg" src="" alt="Thumbnail Preview"
                            class="hidden w-32 h-32 object-cover rounded-lg">
                    </div>
                </div>

                <div class="mb-5 flex items-center gap-5">
                    <label class="inline-flex items-center me-5 cursor-pointer gap-5">
                        <span class="ms-3 text-sm font-medium text-gray-900">Maintenance Mode</span>
                        <input type="checkbox" value="" class="sr-only peer" checked>
                        <div
                            class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-red-300 dark:peer-focus:ring-red-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-red-600">
                        </div>

                    </label>
                </div>


                <div class="border-2 w-full my-5"></div>


                <div class="w-full">
                    <p class="text-xl font-semibold">Email Settings</p>

                    <div class="mb-5 my-4">
                        <label for="app_name" class="block mb-2 text-sm font-medium text-gray-900">
                            Domain Name
                        </label>
                        <input type="text" id="app_name" name="app_name"
                            class="w-full shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                            placeholder="Enter Category Name" required />
                    </div>

                    <div class="mb-5">
                        <label for="app_name" class="block mb-2 text-sm font-medium text-gray-900">
                            SMTP port
                        </label>
                        <input type="text" id="app_name" name="app_name"
                            class="w-full shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                            placeholder="Enter Category Name" required />
                    </div>

                    <div class="mb-5">
                        <label for="app_name" class="block mb-2 text-sm font-medium text-gray-900">
                            Username
                        </label>
                        <input type="text" id="app_name" name="app_name"
                            class="w-full shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                            placeholder="Enter Category Name" required />
                    </div>

                    <div class="mb-5">
                        <label for="app_name" class="block mb-2 text-sm font-medium text-gray-900">
                           Password
                        </label>
                        <input type="password" id="app_name" name="app_name"
                            class="w-full shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                            placeholder="Enter Category Name" required />
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
@endsection
