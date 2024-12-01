@extends('dashboard.layout.base')

{{-- @section('title', 'Dashboard Overview') --}}

@section('content')
    <!-- Main Content -->
    <main class="flex-1 p-6 overflow-auto">
        <h1 class="text-2xl font-semibold mb-4">Dashboard Overview</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="font-bold text-lg">Card 1</h2>
                <p>Content here...</p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="font-bold text-lg">Card 2</h2>
                <p>Content here...</p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="font-bold text-lg">Card 3</h2>
                <p>Content here...</p>
            </div>

            <div>
                <h1>hello Dashboard</h1>
            </div>
        </div>
    </main>
@endsection
