<!-- Sidebar -->
<aside id="sidebar" class="w-64 bg-green-100 text-gray-800 flex flex-col lg:block fixed inset-0 lg:relative lg:flex-nowrap lg:w-64 transition-all duration-300 transform lg:translate-x-0 hidden lg:flex shadow-lg border-r">
    <nav class="flex-1">
        <a href="{{ route('dashboard') }}" class="block px-4 py-3 transition-all duration-200 hover:bg-gray-100 flex items-center">
            <img class="w-[90px] h-[50px]" src="{{asset('asset/images/e-commerce_logo.png')}}" alt="">
        </a>
        <!-- Dashboard Link -->
        <a href="{{ route('dashboard') }}" class="block px-4 py-3 transition-all duration-200 hover:bg-gray-100 flex items-center">
            <span class="material-icons text-lg">dashboard</span>
            <span class="ml-3 font-semibold">Admin Dashboard</span>
        </a>

        <!-- Users Section with Dropdown -->
        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="block w-full px-4 py-3 transition-all duration-200 hover:bg-gray-100 flex items-center">
                <span class="material-icons text-lg">person</span>
                <span class="ml-3 font-semibold">Users</span>
                <span class="material-icons ml-auto text-lg transform transition-transform" :class="open ? 'rotate-180' : ''">expand_more</span>
            </button>
            <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-95" class="bg-gray-50 rounded-md overflow-hidden border">
                <a href="{{ route('user') }}" class="block px-6 py-2 hover:bg-gray-100">All Users</a>
                <a href="{{ route('user') }}" class="block px-6 py-2 hover:bg-gray-100">Add User</a>
                <a href="{{ route('user') }}" class="block px-6 py-2 hover:bg-gray-100">User Settings</a>
            </div>
        </div>

        <!-- Category Section with Dropdown -->
        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="block w-full px-4 py-3 transition-all duration-200 hover:bg-gray-100 flex items-center">
                <span class="material-icons text-lg">category</span>
                <span class="ml-3 font-semibold">Category</span>
                <span class="material-icons ml-auto text-lg transform transition-transform" :class="open ? 'rotate-180' : ''">expand_more</span>
            </button>
            <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-95" class="bg-gray-50 rounded-md overflow-hidden border">
                <a href="{{ route('category') }}" class="block px-6 py-2 hover:bg-gray-100">Manage Category</a>
                <a href="{{ route('sub-categories.index') }}" class="block px-6 py-2 hover:bg-gray-100">Sub Category</a>
            </div>
        </div>

        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="block w-full px-4 py-3 transition-all duration-200 hover:bg-gray-100 flex items-center">
                <span class="material-icons">branding_watermark</span>
                <span class="ml-3 font-semibold">Brands</span>
                <span class="material-icons ml-auto text-lg transform transition-transform" :class="open ? 'rotate-180' : ''">expand_more</span>
            </button>
            <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-95" class="bg-gray-50 rounded-md overflow-hidden border">
                {{--                <a href="{{ route('category') }}" class="block px-6 py-2 hover:bg-gray-100">Manage Inventory</a>--}}
                <a href="{{ route('brands.index') }}" class="block px-6 py-2 hover:bg-gray-100">Manage Brands</a>
                {{--                <a href="#" class="block px-6 py-2 hover:bg-gray-100"></a>--}}
            </div>
        </div>

        <!-- Add other sections similarly with animations -->

        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="block w-full px-4 py-3 transition-all duration-200 hover:bg-gray-100 flex items-center">
                <span class="material-icons">shopping_basket</span>
                <span class="ml-3 font-semibold">Products</span>
                <span class="material-icons ml-auto text-lg transform transition-transform" :class="open ? 'rotate-180' : ''">expand_more</span>
            </button>
            <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-95" class="bg-gray-50 rounded-md overflow-hidden border">
{{--                <a href="{{ route('category') }}" class="block px-6 py-2 hover:bg-gray-100">Manage Inventory</a>--}}
                <a href="{{ route('category') }}" class="block px-6 py-2 hover:bg-gray-100">Manage Products</a>
{{--                <a href="#" class="block px-6 py-2 hover:bg-gray-100"></a>--}}
            </div>
        </div>

        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="block w-full px-4 py-3 transition-all duration-200 hover:bg-gray-100 flex items-center">
                <span class="material-icons">inventory_2</span>
                <span class="ml-3 font-semibold">Inventory</span>
                <span class="material-icons ml-auto text-lg transform transition-transform" :class="open ? 'rotate-180' : ''">expand_more</span>
            </button>
            <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-95" class="bg-gray-50 rounded-md overflow-hidden border">
                <a href="{{ route('category') }}" class="block px-6 py-2 hover:bg-gray-100">Manage Inventory</a>
{{--                <a href="#" class="block px-6 py-2 hover:bg-gray-100">Sub Category</a>--}}
            </div>
        </div>

        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="block w-full px-4 py-3 transition-all duration-200 hover:bg-gray-100 flex items-center">
                <span class="material-icons text-lg">campaign</span>
                <span class="ml-3 font-semibold">Campaign</span>
                <span class="material-icons ml-auto text-lg transform transition-transform" :class="open ? 'rotate-180' : ''">expand_more</span>
            </button>
            <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-95" class="bg-gray-50 rounded-md overflow-hidden border">
                <a href="{{ route('campaigns.index')}}" class="block px-6 py-2 hover:bg-gray-100">Manage Campaign</a>
                <a href="#" class="block px-6 py-2 hover:bg-gray-100">Schedule Campaign</a>
                <a href="#" class="block px-6 py-2 hover:bg-gray-100">Tracked Audience</a>
            </div>
        </div>

        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="block w-full px-4 py-3 transition-all duration-200 hover:bg-gray-100 flex items-center">
                <span class="material-icons text-lg">view_kanban</span>
                <span class="ml-3 font-semibold">Slider</span>
                <span class="material-icons ml-auto text-lg transform transition-transform" :class="open ? 'rotate-180' : ''">expand_more</span>
            </button>
            <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-95" class="bg-gray-50 rounded-md overflow-hidden border">
                <a href="{{ route('sliders.index') }}" class="block px-6 py-2 hover:bg-gray-100">Manage Slider</a>
{{--                <a href="#" class="block px-6 py-2 hover:bg-gray-100">Sub Category</a>--}}
            </div>
        </div>

        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="block w-full px-4 py-3 transition-all duration-200 hover:bg-gray-100 flex items-center">
                <span class="material-icons text-lg">settings</span>
                <span class="ml-3 font-semibold">Settings</span>
                <span class="material-icons ml-auto text-lg transform transition-transform" :class="open ? 'rotate-180' : ''">expand_more</span>
            </button>
            <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-95" class="bg-gray-50 rounded-md overflow-hidden border">
                <a href="{{ route('settings.general.index') }}" class="block px-6 py-2 hover:bg-gray-100">General Settings</a>
                <a href="{{ route('settings.general.index') }}" class="block px-6 py-2 hover:bg-gray-100">Account Settings</a>
                <a href="#" class="block px-6 py-2 hover:bg-gray-100">Menu Settings</a>
                <a href="#" class="block px-6 py-2 hover:bg-gray-100">Roles</a>
                <a href="#" class="block px-6 py-2 hover:bg-gray-100">Report Settings</a>
                <a href="#" class="block px-6 py-2 hover:bg-gray-100">Notification Settings</a>
            </div>
        </div>

    </nav>

    <!-- Logout and Profile Buttons for Mobile -->
    <div class="lg:hidden flex flex-col items-center mt-auto space-y-4 p-4">
        <button class="px-4 py-2 bg-gray-800 text-white rounded-lg font-bold hover:bg-gray-700 w-full">Logout</button>
        <button class="px-4 py-2 bg-gray-800 text-white rounded-lg font-bold hover:bg-gray-700 w-full">Profile</button>
    </div>
</aside>
