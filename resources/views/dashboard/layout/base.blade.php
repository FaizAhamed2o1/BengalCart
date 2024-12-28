<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</head>

<body class="bg-gray-100 text-gray-900 font-sans">
    <!-- Main Wrapper -->
    <div class="flex flex-col h-screen">
        <!-- Header -->

        <div class="flex flex-1 overflow-hidden">

            <!-- Sidebar -->
            @include('dashboard.layout.sidebar')

            <!-- Main Content -->
            @yield('content')

        </div>

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
