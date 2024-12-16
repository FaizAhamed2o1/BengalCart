<!-- Navbar Start -->
<header class="header-container bg-black p-2 flex flex-wrap items-center justify-between">

    <div class="flex items-center space-x-2">
        <a href="{{route('dashboard')}}">
            <img class="w-[90px] h-[50px]" src="{{asset('asset/images/e-commerce_logo.png')}}" alt="">
            {{-- <span class="material-icons">dashboard</span> --}}
        </a>
        {{-- <div class="text-lg font-bold">Admin Dashboard</div> --}}
    </div>

    <button class="lg:hidden block p-2 text-gray-400 hover:text-white focus:outline-none" id="menu-toggle">
        <span class="material-icons">menu</span>
    </button>

    <div id="menu"
        class="w-full lg:w-auto lg:flex hidden flex-col lg:flex-row lg:items-center space-y-4 lg:space-y-0 lg:space-x-4">

        <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4">
            <button class="px-4 py-2 bg-white rounded-lg text-black font-semibold transition-all delay-50 hover:bg-blue-600 hover:text-white">Logout</button>
            <button class="px-4 py-2 bg-white rounded-lg text-black font-semibold delay-50 hover:bg-blue-600 hover:text-white">Profile</button>
        </div>
    </div>
</header>
<!-- Navbar End -->
