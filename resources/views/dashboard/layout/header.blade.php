<!-- Navbar Start -->
<header class="bg-black text-white p-4 flex flex-wrap items-center justify-between">

    <div class="flex items-center space-x-2">
        <a href="{{route('dashboard')}}">
            <img class="w-20 mx-0 lg:mx-14" src="{{asset('asset/images/e-commerce_logo.png')}}" alt="">
            {{-- <span class="material-icons">dashboard</span> --}}
        </a>
        {{-- <div class="text-lg font-bold">Admin Dashboard</div> --}}
    </div>

    <button class="lg:hidden block p-2 text-gray-400 hover:text-white focus:outline-none" id="menu-toggle">
        <span class="material-icons">menu</span>
    </button>

    <div id="menu"
        class="w-full lg:w-auto lg:flex hidden flex-col lg:flex-row lg:items-center space-y-4 lg:space-y-0 lg:space-x-4">

        <div class="relative w-full lg:w-auto">
            <input type="text"
                class="w-full p-2 pl-10 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-600"
                placeholder="Search...">
            <span class="absolute left-3 top-2.5 text-gray-400 material-icons">search</span>
        </div>

        <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4">
            <button class="px-4 py-2 bg-white rounded-lg text-black font-bold hover:bg-blue-300">Logout</button>
            <button class="px-4 py-2 bg-white rounded-lg text-black font-bold hover:bg-blue-300">Profile</button>
        </div>
    </div>
</header>
<!-- Navbar End -->
