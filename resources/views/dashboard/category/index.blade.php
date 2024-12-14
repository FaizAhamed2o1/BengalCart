@extends('dashboard.layout.base')

@section('content')
    <!-- Main Content -->
    <main class="flex-1 p-6 overflow-auto">
        <h1 class="text-2xl font-semibold mb-4 text-left">Manage Category</h1>
        <div class="bg-white shadow-md rounded-lg p-4 sm:p-6 lg:p-8 mx-2 sm:mx-6 lg:mx-10">
            <!-- Add Category Button -->
            <div class="flex items-center justify-between">
                @include('dashboard.layout.breadcrumb', ['breadcrumbs' => $breadcrumbs])

                <a href="{{route('create.category')}}"
                   class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 sm:px-5 sm:py-2.5 mb-4 inline-block dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Add Category
                </a>

            </div>


            <!-- Table Wrapper -->
            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-xs sm:text-sm text-left rtl:text-right text-gray-500">
                    <thead
                        class="text-xs sm:text-sm text-gray-700 uppercase bg-gray-300">
                        <tr>
                            <th scope="col" class="px-2 py-2 sm:px-4 sm:py-3">Category Thumbnail</th>
                            <th scope="col" class="px-2 py-2 sm:px-4 sm:py-3">Category Name</th>
                            <th scope="col" class="px-2 py-2 sm:px-4 sm:py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if( $categories->count() > 0 )
                        @foreach($categories as $category)
                            <tr class="bg-white border-b">
                                <th scope="row"
                                    class="px-2 py-2 font-medium text-gray-900 whitespace-nowrap sm:px-4 sm:py-3">
                                    @if($category->thumbnail)
                                        <img height="80" width="80" src="{{ asset('storage/' . $category->thumbnail) }}" alt="">
                                    @else
                                        <img height="80px" width="50px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNNLEL-qmmLeFR1nxJuepFOgPYfnwHR56vcw&s" alt="">
                                    @endif

                                </th>
                                <td class="px-2 py-2 sm:px-4 sm:py-3">{{ $category->name }}</td>
                                <td class="px-2 py-2 sm:px-4 sm:py-3">
                                    <a href="{{ route('edit.category') }}"
                                       class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-xs sm:text-sm px-3 py-1 sm:px-4 sm:py-2 mb-2 inline-block dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                                        Edit
                                    </a>
                                    <button type="button"
                                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xs sm:text-sm px-3 py-1 sm:px-4 sm:py-2 mb-2 inline-block dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach

                    @else
                        <tr colspan="3">
                            <td class="text-center text-md font-semibold">No date found</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $categories->links('pagination::tailwind') }}
            </div>
        </div>

    </main>
@endsection
