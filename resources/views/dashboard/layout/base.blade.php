<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-900">
    <!-- Main Wrapper -->
    <div class="flex flex-col h-screen">
        <!-- Header -->
        @include('dashboard.layout.header')

        <div class="flex flex-1 overflow-hidden">

            <!-- Sidebar -->
            @include('dashboard.layout.sidebar')

            <!-- Main Content -->
            @yield('content') <!-- This is where the page content will be injected -->

        </div>
        <!-- Footer -->
        <footer class="bg-gray-800 text-white p-4 text-center">
            &copy; 2024 Admin Dashboard.
        </footer>

        <!-- Include JavaScript files -->
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
        <script>
            // Toggle sidebar visibility on mobile
            document.getElementById('menu-toggle').addEventListener('click', () => {
                const sidebar = document.getElementById('sidebar');
                sidebar.classList.toggle('hidden'); // Toggle the sidebar visibility

                // Close all dropdowns when the sidebar is toggled on mobile
                const allDropdowns = document.querySelectorAll('[x-data="{ open: true }"]');
                allDropdowns.forEach(dropdown => {
                    dropdown.__x.$data.open = false; // Close the dropdown
                });
            });
        </script>
</body>

</html>
