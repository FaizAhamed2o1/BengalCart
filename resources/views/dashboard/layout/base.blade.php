<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</head>

<body>
    <div class="flex flex-col h-screen">


        @include('dashboard.layout.header')


        <div class="flex flex-1 overflow-hidden">

            {{-- sidebar --}}
            @include('dashboard.layout.sidebar')
        </div>

        @yield('content')

        {{--  --}}

    </div>
</body>
