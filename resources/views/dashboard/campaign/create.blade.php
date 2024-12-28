@extends('dashboard.layout.base')

@section('content')
    <!-- Main Content -->
    <main class="flex-1 p-6 overflow-auto">
        <h1 class="text-2xl font-semibold mb-4 text-left">Create Campaign</h1>

        <div class="bg-white shadow-md rounded-lg p-6 sm:p-8 mx-2 sm:mx-6 lg:mx-10">
            <nav class="mb-4 text-sm text-gray-500">
                <a href="{{ route('dashboard') }}" class="hover:text-blue-600">Dashboard</a> >
                <a href="{{ route('campaigns.index') }}" class="hover:text-blue-600">Campaigns</a> >
                <span>Create</span>
            </nav>

            <!-- Form -->
            <form action="{{ route('campaigns.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Error Messages -->
                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-100 text-red-700 border border-red-300 rounded">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Campaign Name -->
                <div class="mb-4">
                    <label for="campaign_name" class="block text-sm font-medium text-gray-700">
                        Campaign Name
                    </label>
                    <input type="text" name="campaign_name" id="campaign_name"
                        value="{{ old('campaign_name') }}"
                        class="block w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                        placeholder="Enter campaign name" required>
                </div>

                <!-- Description -->
                {{-- <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">
                        Description
                    </label>
                    <textarea name="description" id="description" rows="4"
                        class="block w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                        placeholder="Enter campaign description">{{ old('description') }}</textarea>
                </div> --}}

                <!-- Start Date -->
                <div class="mb-4">
                    <label for="start_date" class="block text-sm font-medium text-gray-700">
                        Start Date
                    </label>
                    <input type="date" name="start_date" id="start_date"
                        value="{{ old('start_date') }}"
                        class="block w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                </div>

                <!-- End Date -->
                <div class="mb-4">
                    <label for="end_date" class="block text-sm font-medium text-gray-700">
                        End Date
                    </label>
                    <input type="date" name="end_date" id="end_date"
                        value="{{ old('end_date') }}"
                        class="block w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>

                <!-- Thumbnail -->
                <div class="mb-4">
                    <label for="thumbnail" class="block text-sm font-medium text-gray-700">
                        Thumbnail (Optional)
                    </label>
                    <input type="file" name="campaign_image" id="thumbnail"
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
                        Create Campaign
                    </button>
                </div>
            </form>
        </div>
    </main>
@endsection
