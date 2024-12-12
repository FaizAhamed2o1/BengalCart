      <!-- Sidebar -->
      <aside id="sidebar"
          class="w-64 bg-black text-white flex flex-col lg:block fixed inset-0 lg:relative lg:flex-nowrap lg:w-64 transition-all duration-300 transform lg:translate-x-0 hidden lg:flex">
          <nav class="flex-1">
              <!-- Dashboard Link -->
              <a href="{{ route('dashboard') }}" class="block px-4 py-2 hover:bg-blue-700 flex items-center">
                  <span class="material-icons">dashboard</span>
                  <span class="ml-2">Admin Dashboard</span>
              </a>

              <!-- Users Section with Dropdown -->
              <div x-data="{ open: false }" class="relative">
                  <button @click="open = !open" class="block w-full px-4 py-2 hover:bg-blue-700 flex items-center">
                      <span class="material-icons">person</span>
                      <span class="ml-2">Users</span>
                      <span class="material-icons ml-auto" :class="open ? 'rotate-180' : ''">expand_more</span>
                  </button>
                  <div x-show="open" x-cloak class="bg-gray-800">
                      <a href="{{route('user')}}" class="block px-6 py-2 hover:bg-blue-600">All Users</a>
                      <a href="{{route('user')}}" class="block px-6 py-2 hover:bg-blue-600">Add User</a>
                      <a href="{{route('user')}}" class="block px-6 py-2 hover:bg-blue-600">User Settings</a>
                  </div>
              </div>

              <!-- Category Section with Dropdown -->
              <div x-data="{ open: false }" class="relative">
                  <button @click="open = !open" class="block w-full px-4 py-2 hover:bg-blue-700 flex items-center">
                      <span class="material-icons">category</span>
                      <span class="ml-2">Category</span>
                      <span class="material-icons ml-auto" :class="open ? 'rotate-180' : ''">expand_more</span>
                  </button>
                  <div x-show="open" x-cloak class="bg-gray-800">
                      <a href="{{route('category')}}" class="block px-6 py-2 hover:bg-blue-600">Manage Category</a>
                      <a href="#" class="block px-6 py-2 hover:bg-blue-600">Sub category</a>
                      {{-- <a href="#" class="block px-6 py-2 hover:bg-blue-600">User Settings</a> --}}
                  </div>
              </div>

              <!-- Brand Section with Dropdown -->
              <div x-data="{ open: false }" class="relative">
                  <button @click="open = !open" class="block w-full px-4 py-2 hover:bg-blue-700 flex items-center">
                      <span class="material-icons">business</span>
                      <span class="ml-2">Brand</span>
                      <span class="material-icons ml-auto" :class="open ? 'rotate-180' : ''">expand_more</span>
                  </button>
                  <div x-show="open" x-cloak class="bg-gray-800">
                      <a href="{{route('brand')}}" class="block px-6 py-2 hover:bg-blue-600">Manage Brand</a>
                      {{-- <a href="#" class="block px-6 py-2 hover:bg-blue-600"></a> --}}
                      {{-- <a href="#" class="block px-6 py-2 hover:bg-blue-600">User Settings</a> --}}
                  </div>
              </div>

              <!-- Product Section with Dropdown -->
              <div x-data="{ open: false }" class="relative">
                  <button @click="open = !open" class="block w-full px-4 py-2 hover:bg-blue-700 flex items-center">
                      <span class="material-icons">shopping_basket</span>
                      <span class="ml-2">Product</span>
                      <span class="material-icons ml-auto" :class="open ? 'rotate-180' : ''">expand_more</span>
                  </button>
                  <div x-show="open" x-cloak class="bg-gray-800">
                      <a href="{{route('product')}}" class="block px-6 py-2 hover:bg-blue-600">Manage Product</a>
                      {{-- <a href="#" class="block px-6 py-2 hover:bg-blue-600"></a> --}}
                      {{-- <a href="#" class="block px-6 py-2 hover:bg-blue-600">User Settings</a> --}}
                  </div>
              </div>

              <!-- Inventory Section with Dropdown -->
              <div x-data="{ open: false }" class="relative">
                  <button @click="open = !open" class="block w-full px-4 py-2 hover:bg-blue-700 flex items-center">
                      <span class="material-icons">inventory_2</span>
                      <span class="ml-2">Inventory</span>
                      <span class="material-icons ml-auto" :class="open ? 'rotate-180' : ''">expand_more</span>
                  </button>
                  <div x-show="open" x-cloak class="bg-gray-800">
                      <a href="/allUser.html" class="block px-6 py-2 hover:bg-blue-600">Manage Inventory</a>
                      {{-- <a href="#" class="block px-6 py-2 hover:bg-blue-600"></a> --}}
                      {{-- <a href="#" class="block px-6 py-2 hover:bg-blue-600">User Settings</a> --}}
                  </div>
              </div>

              <!-- Campaign Section with Dropdown -->
              <div x-data="{ open: false }" class="relative">
                  <button @click="open = !open" class="block w-full px-4 py-2 hover:bg-blue-700 flex items-center">
                      <span class="material-icons">campaign</span>
                      <span class="ml-2">Campaign</span>
                      <span class="material-icons ml-auto" :class="open ? 'rotate-180' : ''">expand_more</span>
                  </button>
                  <div x-show="open" x-cloak class="bg-gray-800">
                      <a href="/allUser.html" class="block px-6 py-2 hover:bg-blue-600">Manage Campaign</a>
                      {{-- <a href="#" class="block px-6 py-2 hover:bg-blue-600"></a> --}}
                      {{-- <a href="#" class="block px-6 py-2 hover:bg-blue-600">User Settings</a> --}}
                  </div>
              </div>

              <!-- Slider Section with Dropdown -->
              <div x-data="{ open: false }" class="relative">
                  <button @click="open = !open" class="block w-full px-4 py-2 hover:bg-blue-700 flex items-center">
                      <span class="material-icons">tune</span>
                      <span class="ml-2">Slider</span>
                      <span class="material-icons ml-auto" :class="open ? 'rotate-180' : ''">expand_more</span>
                  </button>
                  <div x-show="open" x-cloak class="bg-gray-800">
                      <a href="{{route('slider')}}" class="block px-6 py-2 hover:bg-blue-600">Manage Slider</a>
                      {{-- <a href="#" class="block px-6 py-2 hover:bg-blue-600"></a> --}}
                      {{-- <a href="#" class="block px-6 py-2 hover:bg-blue-600">User Settings</a> --}}
                  </div>
              </div>

              <!-- Settings Section with Dropdown -->
              <div x-data="{ open: false }" class="relative">
                  <button @click="open = !open" class="block w-full px-4 py-2 hover:bg-blue-700 flex items-center">
                      <span class="material-icons">settings</span>
                      <span class="ml-2">Settings</span>
                      <span class="material-icons ml-auto" :class="open ? 'rotate-180' : ''">expand_more</span>
                  </button>
                  <div x-show="open" x-cloak class="bg-gray-800">
                      <a href="#" class="block px-6 py-2 hover:bg-blue-600">General</a>
                      <a href="#" class="block px-6 py-2 hover:bg-blue-600">Privacy</a>
                      <a href="#" class="block px-6 py-2 hover:bg-blue-600">Account</a>
                  </div>
              </div>
          </nav>
          <!-- Login and Profile Buttons for Mobile -->
          <div class="lg:hidden flex flex-col items-center mt-auto space-y-4 p-4">
              <button
                  class="px-4 py-2 bg-white rounded-lg text-black font-bold hover:bg-blue-300 w-full">Logout</button>
              <button
                  class="px-4 py-2 bg-white rounded-lg text-black font-bold hover:bg-blue-300 w-full">Profile</button>
          </div>
      </aside>
