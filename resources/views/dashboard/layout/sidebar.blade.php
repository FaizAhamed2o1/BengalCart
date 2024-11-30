      <!-- Sidebar -->
      <aside class="w-64 bg-black text-white flex flex-col">
        <nav class="flex-1">
          <!-- Dashboard Link -->
          <a href="#" class="block px-4 py-2 hover:bg-blue-700 flex items-center">
            <span class="material-icons">dashboard</span>
            <span class="ml-2">Dashboard</span>
          </a>

          <!-- Users Section with Dropdown -->
          <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="block w-full px-4 py-2 hover:bg-blue-700 flex items-center">
              <span class="material-icons">person</span>
              <span class="ml-2">Users</span>
              <span class="material-icons ml-auto" :class="open ? 'rotate-180' : ''">expand_more</span>
            </button>
            <div x-show="open" x-cloak class="bg-gray-800">
              <a href="/allUser.html" class="block px-6 py-2 hover:bg-blue-600">All Users</a>
              <a href="#" class="block px-6 py-2 hover:bg-blue-600">Add User</a>
              <a href="#" class="block px-6 py-2 hover:bg-blue-600">User Settings</a>
            </div>
          </div>

          <!-- Category -->
          <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="block w-full px-4 py-2 hover:bg-blue-700 flex items-center">
              <span class="material-icons">person</span>
              <span class="ml-2">Category</span>
              <span class="material-icons ml-auto" :class="open ? 'rotate-180' : ''">expand_more</span>
            </button>
            <div x-show="open" x-cloak class="bg-gray-800">
              <a href="/allUser.html" class="block px-6 py-2 hover:bg-blue-600">All Category</a>
              <!-- <a href="#" class="block px-6 py-2 hover:bg-blue-600">Add User</a>
              <a href="#" class="block px-6 py-2 hover:bg-blue-600">User Settings</a> -->
            </div>
          </div>


          <!-- Brand -->
          <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="block w-full px-4 py-2 hover:bg-blue-700 flex items-center">
              <span class="material-icons">person</span>
              <span class="ml-2">Brand</span>
              <span class="material-icons ml-auto" :class="open ? 'rotate-180' : ''">expand_more</span>
            </button>
            <div x-show="open" x-cloak class="bg-gray-800">
              <a href="/allUser.html" class="block px-6 py-2 hover:bg-blue-600">All Brand</a>
              <!-- <a href="#" class="block px-6 py-2 hover:bg-blue-600">Add User</a>
              <a href="#" class="block px-6 py-2 hover:bg-blue-600">User Settings</a> -->
            </div>
          </div>

          <!-- Product -->
          <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="block w-full px-4 py-2 hover:bg-blue-700 flex items-center">
              <span class="material-icons">person</span>
              <span class="ml-2">Product</span>
              <span class="material-icons ml-auto" :class="open ? 'rotate-180' : ''">expand_more</span>
            </button>
            <div x-show="open" x-cloak class="bg-gray-800">
              <a href="/allUser.html" class="block px-6 py-2 hover:bg-blue-600">All Product</a>
              <!-- <a href="#" class="block px-6 py-2 hover:bg-blue-600">Add User</a>
              <a href="#" class="block px-6 py-2 hover:bg-blue-600">User Settings</a> -->
            </div>
          </div>

          <!-- Campaign -->
          <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="block w-full px-4 py-2 hover:bg-blue-700 flex items-center">
              <span class="material-icons">person</span>
              <span class="ml-2">Campaign</span>
              <span class="material-icons ml-auto" :class="open ? 'rotate-180' : ''">expand_more</span>
            </button>
            <div x-show="open" x-cloak class="bg-gray-800">
              <a href="/allUser.html" class="block px-6 py-2 hover:bg-blue-600">All Campaign</a>
              <!-- <a href="#" class="block px-6 py-2 hover:bg-blue-600">Add User</a>
              <a href="#" class="block px-6 py-2 hover:bg-blue-600">User Settings</a> -->
            </div>
          </div>


          <!-- Slider -->
          <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="block w-full px-4 py-2 hover:bg-blue-700 flex items-center">
              <span class="material-icons">person</span>
              <span class="ml-2">Slider</span>
              <span class="material-icons ml-auto" :class="open ? 'rotate-180' : ''">expand_more</span>
            </button>
            <div x-show="open" x-cloak class="bg-gray-800">
              <a href="/allUser.html" class="block px-6 py-2 hover:bg-blue-600">All Slider</a>
              <!-- <a href="#" class="block px-6 py-2 hover:bg-blue-600">Add User</a>
              <a href="#" class="block px-6 py-2 hover:bg-blue-600">User Settings</a> -->
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
      </aside>
