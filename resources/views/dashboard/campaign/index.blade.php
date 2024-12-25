@extends('dashboard.layout.base')

@section('content')
    <!-- Main Content -->
    <main class="flex-1 p-6 overflow-auto">
        <!-- Page Header -->
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-semibold text-gray-800">Manage Campaign</h1>
            <a href="{{ route('campaigns.create') }}"
                class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">
                Add Campaign
            </a>
        </div>

        <!-- Breadcrumb -->
        <nav class="mb-4 text-sm text-gray-500">
            <a href="{{ route('dashboard') }}" class="hover:text-blue-600">Dashboard</a> >
            <span>Campaigns</span>
        </nav>

        <!-- Table -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs uppercase bg-gray-100 text-gray-700">
                        <tr>
                            <th scope="col" class="px-4 py-3">Campaign Name</th>
                            <th scope="col" class="px-4 py-3 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($campaigns->count() > 0)
                            @foreach ($campaigns as $campaign)
                                <tr class="bg-white border-b">
                                    <td class="px-4 py-3 font-medium text-gray-900">{{ $campaign->campaign_name }}</td>
                                    <td class="px-4 py-3 text-center">
                                        <a href="{{ route('campaigns.edit', $campaign->id) }}"
                                            class="text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-3 py-1">
                                            Edit
                                        </a>

                                        <!-- Form for Deleting Campaign -->
                                        <form action="{{ route('campaigns.destroy', $campaign->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="2" class="px-4 py-3 text-center font-medium text-gray-600">No data found</td>
                            </tr>
                        @endif
                    </tbody>

                </table>
            </div>

            <!-- Pagination -->
            <div class="mt-4">
                {{ $campaigns->links('pagination::tailwind') }}
            </div>
        </div>
    </main>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const deleteButtons = document.querySelectorAll('.delete-campaign-btn');
            const deleteModal = document.getElementById('deleteModal');
            const confirmDelete = document.getElementById('confirmDelete');
            const cancelDelete = document.getElementById('cancelDelete');
            let selectedCampaignId = null;

            deleteButtons.forEach(button => {
                button.addEventListener('click', () => {
                    selectedCampaignId = button.getAttribute('data-id');
                    deleteModal.classList.remove('hidden');
                });
            });

            cancelDelete.addEventListener('click', () => {
                deleteModal.classList.add('hidden');
                selectedCampaignId = null;
            });

            confirmDelete.addEventListener('click', () => {
                if (selectedCampaignId) {
                    axios.delete(`/campaigns/${selectedCampaignId}`)
                        .then(response => {
                            location.reload();
                        })
                        .catch(error => {
                            alert('Failed to delete the campaign. Please try again.');
                        })
                        .finally(() => {
                            deleteModal.classList.add('hidden');
                            selectedCampaignId = null;
                        });
                }
            });
        });
    </script>
@endsection
