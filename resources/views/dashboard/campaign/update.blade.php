@extends('dashboard.layout.base')

@section('content')
    <!-- Main Content -->
    <main class="flex-1 p-6 overflow-auto">
        <!-- Page Header -->
        <h1 class="text-2xl font-semibold mb-4 text-left">Edit Campaign</h1>

        <div class="bg-white shadow-md rounded-lg p-6 sm:p-8 mx-2 sm:mx-6 lg:mx-10">
            <!-- Breadcrumb -->
            <nav class="mb-4 text-sm text-gray-500">
                <a href="{{ route('dashboard') }}" class="hover:text-blue-600">Dashboard</a> >
                <a href="{{ route('campaigns.index') }}" class="hover:text-blue-600">Campaigns</a> >
                <span>Edit</span>
            </nav>

            <!-- Form -->
            <form action="{{ route('campaigns.update', $campaign->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Campaign Name -->
                <div class="mb-4">
                    <label for="campaign_name" class="block text-sm font-medium text-gray-700">
                        Campaign Name
                    </label>
                    <input type="text" name="campaign_name" id="campaign_name"
                        value="{{ old('campaign_name', $campaign->campaign_name) }}"
                        class="block w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                        required>
                </div>

                <!-- Description -->
                {{-- <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">
                        Description
                    </label>
                    <textarea name="description" id="description" rows="4"
                        class="block w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">{{ old('description', $campaign->description) }}</textarea>
                </div> --}}

                <!-- Start Date -->
                <div class="mb-4">
                    <label for="start_date" class="block text-sm font-medium text-gray-700">
                        Start Date
                    </label>
                    <input type="datetime" name="start_date" id="start_date"
                        value="{{ $campaign->start_date }}"
                        class="block w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                        required>
                </div>

                <!-- End Date -->
                <div class="mb-4">
                    <label for="end_date" class="block text-sm font-medium text-gray-700">
                        End Date
                    </label>
                    <input type="datetime" name="end_date" id="end_date"
                        value="{{ old('end_date', $campaign->end_date) }}"
                        class="block w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>

                <!-- Current Thumbnail -->
                @if ($campaign->thumbnail)
                    <div class="mb-4">
                        <p class="text-sm font-medium text-gray-700">Current Thumbnail:</p>
                        <img src="{{ asset('storage/' . $campaign->thumbnail) }}" alt="Thumbnail" class="w-32 h-32 object-cover rounded-lg mt-2">
                    </div>
                @endif

                <!-- Thumbnail -->
                <div class="mb-4">
                    <label for="thumbnail" class="block text-sm font-medium text-gray-700">
                        Change Thumbnail (Optional)
                    </label>
                    <input type="file" name="thumbnail" id="thumbnail"
                        class="block w-full mt-1 text-gray-500 file:bg-gray-100 file:border-gray-300 file:text-gray-700 file:px-4 file:py-2 file:rounded-lg file:shadow-sm">
                </div>

                <!-- Buttons -->
                <div class="flex justify-end">
                    <a href="{{ route('campaigns.index') }}"
                        class="px-4 py-2 mr-2 text-gray-700 bg-gray-200 hover:bg-gray-300 rounded-lg">
                        Cancel
                    </a>
                    <button type="submit"
                        class="px-4 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-lg shadow-md">
                        Update Campaign
                    </button>
                </div>
            </form>
        </div>
    </main>
@endsection
