@extends('dashboard.layout.base')

@section('content')
    <!-- Main Content -->
    <main class="flex-1 p-6 overflow-auto">
        <h1 class="text-2xl font-semibold mb-4 text-center">Hello Brand</h1>
        <div class="bg-white shadow-md rounded-lg p-4 sm:p-6 lg:p-8 mx-2 sm:mx-6 lg:mx-10">
            <!-- Add brands Button -->
            <div class="flex items-center justify-between">
                @include('dashboard.layout.breadcrumb', ['breadcrumbs' => $breadcrumbs])

                <a href="{{ route('brands.create') }}"
                   class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 sm:px-5 sm:py-2.5 mb-4 inline-block dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Add Brand
                </a>
            </div>

            <!-- Table Wrapper -->
            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-xs sm:text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead
                        class="text-xs sm:text-sm text-gray-700 uppercase bg-gray-300">
                        <tr>
                            <th scope="col" class="px-2 py-2 sm:px-4 sm:py-3">SL.</th>
                            <th scope="col" class="px-2 py-2 sm:px-4 sm:py-3">Brand Name</th>
                            <th scope="col" class="px-2 py-2 sm:px-4 sm:py-3">Brand Logo</th>
                            <th scope="col" class="px-2 py-2 sm:px-4 sm:py-3">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    @if( $data )
                        @foreach($data as $dt)
                            <tr class="bg-white border-b">
                                <th scope="row"
                                    class="px-2 py-2 font-medium text-gray-900 whitespace-nowrap sm:px-4 sm:py-3">
                                    {{ $loop->iteration }}
                                </th>
                                <td class="px-2 py-2 sm:px-4 sm:py-3">{{ $dt->brand_name }}</td>
                                <td class="px-2 py-2 sm:px-4 sm:py-3">
                                    @if($dt->brand_logo)
                                        <img height="80px" width="50px"
                                            src="{{ asset('storage/' . $dt->brand_logo) }}" alt="">
                                    @else
                                        <img height="80px" width="50px"
                                             src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNNLEL-qmmLeFR1nxJuepFOgPYfnwHR56vcw&s"
                                             alt="">
                                    @endif
                                </td>
                                <td class="px-2 py-2 sm:px-4 sm:py-3">
                                        <a href="{{ route('brands.edit', $dt->id) }}"
                                            class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-xs sm:text-sm px-3 py-1 sm:px-4 sm:py-2 mb-2 inline-block dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                                            Edit
                                        </a>
                                    <button type="button" data-id="{{ $dt->id }}"
                                            class="delete-brand-btn focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xs sm:text-sm px-3 py-1 sm:px-4 sm:py-2 mb-2 inline-block dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach

                    @else
                        <tr colspan="3">
                            <td class="text-center w-full">No Data Found</td>
                        </tr>
                    @endif

                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script>
        $(document).on('click', '.delete-brand-btn', function() {
            const button = $(this);
            const brandId = button.data('id');
            if(!brandId) {
                return;
            }
            if (!confirm('Are you sure you want to delete this category?')) {
                return;
            }
            button.text('Deleting...').prop('disabled', true);
            const deleteUrl = `{{ route("brands.delete", ":id") }}`.replace(':id', brandId);

            axios.delete(deleteUrl)
                .then(response => {
                    // console.log(response.status)
                    if (response.status === 200) {
                        button.closest('tr').remove();
                        toastr.success(response.message || 'Category deleted successfully.');
                    } else {
                        toastr.error(response.message || 'Failed to delete the category.');
                    }
                })
                .catch(error => {
                    toastr.error('An error occurred. Please try again.');
                })
                .finally(() => {
                    button.text('Delete').prop('disabled', false);
                })
        });
    </script>
@endsection
