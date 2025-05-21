   <!-- Sidebar -->
   <aside class="w-72 bg-gray-800 text-white flex flex-col p-4 space-y-6 overflow-y-auto sticky top-0 h-screen shadow-lg z-10 dashboard-sidebar">

      <!-- Logo -->
      <div class="text-2xl font-bold flex items-center space-x-2">
         <!-- <img src="{{asset('assets/logo/logo.png')}}" alt="logo" class="h-auto w-20"> -->
         <a href="{{route('dashboard')}}"> <span>LUXEMART</span></a>
      </div>

      <!-- Search Docs Section -->
      <div class="mt-auto">
         <input type="text" placeholder="Search..." class="w-full py-2 px-3 bg-gray-700 rounded text-white">
      </div>
      <!-- Homepage Section -->
      <div>
         <p class="uppercase text-xs text-gray-400 mb-2">Homepage</p>

         <a href="#" class="block py-2 px-3 rounded bg-gradient-to-r from-blue-800 to-blue-900 text-white"> E-commerce</a>
         <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700 text-gray-300">Project</a>
         <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700 text-gray-300">CRM</a>
         <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700 flex items-center justify-between">
            <span>Analytics</span>
         </a>
         <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700 flex items-center justify-between">
            <span>HRM</span>
         </a>
      </div>

      <!-- Apps Section -->
      <div>
         <p class="uppercase text-xs text-gray-400 mb-2">Apps</p>

         <!-- E-commerce Dropdown -->
         <div>
            <button class="w-full flex items-center justify-between px-3 py-2 hover:bg-gray-700 rounded toggle-group" data-target="#ecomMenu">
               <span>E-commerce</span>
               <svg class="w-4 h-4 transition-transform transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
               </svg>
            </button>

            <div id="ecomMenu" class="ml-4 mt-2 hidden space-y-1">

               <!-- Super admin Submenu -->

               @if(auth()->user()->user_type == 'super_admin')
               <button class="w-full flex items-center justify-between px-2 py-1 bg-gray-700 rounded toggle-group" data-target="#superAdmin">
                  <span>Super Admin</span>
                  <svg class="w-4 h-4 transition-transform transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>
               </button>
               <div id="superAdmin" class="ml-4 mt-1 hidden space-y-1">
                  <button class="w-full flex items-center justify-between px-2 py-1 bg-gray-500 rounded toggle-group" data-target="#vendor">
                     <span>Vendors</span>
                     <svg class="w-4 h-4 transition-transform transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                     </svg>
                  </button>

                  <div id="vendor" class="ml-4 mt-1 hidden space-y-1">
                       <a href="{{route('add-category')}}" class="block py-1 text-sm hover:underline">Vendor Request List</a>
                     <a href="{{route('add-category')}}" class="block py-1 text-sm hover:underline">All Vendor</a>
                     <a href="{{route('add-category')}}" class="block py-1 text-sm hover:underline">Active Vendor</a>
                     <a href="{{route('add-category')}}" class="block py-1 text-sm hover:underline">Inactive Vendor</a>
                  </div>
                  <button class="w-full flex items-center justify-between px-2 py-1 bg-gray-500 rounded toggle-group" data-target="#users">
                     <span>Users</span>
                     <svg class="w-4 h-4 transition-transform transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                     </svg>
                  </button>

                  <div id="users" class="ml-4 mt-1 hidden space-y-1">
                     <a href="{{route('add-category')}}" class="block py-1 text-sm hover:underline">All User</a>
                     <a href="{{route('add-category')}}" class="block py-1 text-sm hover:underline">Active User</a>
                     <a href="{{route('add-category')}}" class="block py-1 text-sm hover:underline">Inactive User</a>
                  </div>

                  <button class="w-full flex items-center justify-between px-2 py-1 bg-gray-500 rounded toggle-group" data-target="#category">
                     <span>Category</span>
                     <svg class="w-4 h-4 transition-transform transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                     </svg>
                  </button>

                  <div id="category" class="ml-4 mt-1 hidden space-y-1">
                     <a href="{{route('add-category')}}" class="block py-1 text-sm hover:underline">Add Category</a>
                     <a href="{{route('add-category')}}" class="block py-1 text-sm hover:underline">Update Category</a>
                     <a href="{{route('category-list')}}" class="block py-1 text-sm hover:underline">List Category</a>
                  </div>



                  
                  <button class="w-full flex items-center justify-between px-2 py-1 bg-gray-500 rounded toggle-group" data-target="#subcategory">
                     <span>Sub Category</span>
                     <svg class="w-4 h-4 transition-transform transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                     </svg>
                  </button>

                  <div id="subcategory" class="ml-4 mt-1 hidden space-y-1">
                     <a href="{{route('super.add_SubCategory')}}" class="block py-1 text-sm hover:underline">Add Sub Category</a>
                     <a href="" class="block py-1 text-sm hover:underline">Update Sub Category</a>
                     <a href="" class="block py-1 text-sm hover:underline">List Sub Category</a>
                  </div>
               </div>
               @endif

               <!-- Admin Submenu -->
               <button class="w-full flex items-center justify-between px-2 py-1 bg-gray-700 rounded toggle-group" data-target="#adminMenu">
                  <span>Admin</span>
                  <svg class="w-4 h-4 transition-transform transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>
               </button>
               <div id="adminMenu" class="ml-4 mt-1 hidden space-y-1">
                  <a href="{{route('add-product')}}" class="block py-1 text-sm hover:underline">Add Product</a>
                  <a href="#" class="block py-1 text-sm hover:underline">Product list</a>
                  <a href="{{route('add_SubCategory')}}" class="block py-1 text-sm hover:underline">Add Subcategory</a>
                  <a href="#" class="block py-1 text-sm hover:underline">Order list</a>
                  <a href="#" class="block py-1 text-sm hover:underline">Order</a>
                  <a href="#" class="block py-1 text-sm hover:underline">Create order</a>
                  <a href="#" class="block py-1 text-sm hover:underline">Refund</a>
                  <a href="#" class="block py-1 text-sm hover:underline">Invoice list</a>
                  <a href="#" class="block py-1 text-sm hover:underline">Invoice</a>

               </div>
               <!-- Customer Submenu -->
               <button class="w-full flex items-center justify-between px-2 py-1 bg-gray-700 rounded toggle-group" data-target="#customerMenu">
                  <span>Customer</span>
                  <svg class="w-4 h-4 transition-transform transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>
               </button>
               <div id="customerMenu" class="ml-4 mt-1 hidden space-y-1">
                  <a href="#" class="block py-1 text-sm hover:underline">List</a>
                  <a href="#" class="block py-1 text-sm hover:underline">Feedback</a>
               </div>
            </div>
         </div>

         <!-- CRM Dropdown -->
         <div class="mt-2">
            <button class="w-full flex items-center justify-between px-3 py-2 hover:bg-gray-700 rounded toggle-group" data-target="#crmMenu">
               <span>CRM</span>
               <svg class="w-4 h-4 transition-transform transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
               </svg>
            </button>
            <div id="crmMenu" class="ml-4 mt-1 hidden space-y-1">
               <a href="#" class="block py-1 text-sm hover:underline">Leads</a>
               <a href="#" class="block py-1 text-sm hover:underline">Reports</a>
            </div>
         </div>

         <!-- Others -->
         <a href="#" class="block px-3 py-2 hover:bg-gray-700 rounded mt-2">📧 E-mail</a>
         <a href="#" class="block px-3 py-2 hover:bg-gray-700 rounded">📋 Kanban</a>
         <a href="#" class="block px-3 py-2 hover:bg-gray-700 rounded">💬 Chat</a>
      </div>


      <!-- Pages Section -->
      <div>
         <p class="uppercase text-xs text-gray-400 mb-2">Pages</p>
         <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700 text-gray-300">Starter</a>
         <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700 text-gray-300">Notifications</a>
         <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700 text-gray-300">Events</a>
         <button class="w-full flex items-center justify-between px-3 py-2 hover:bg-gray-700 rounded toggle-group" data-target="#authMenu">
            <span>Authentication</span>
            <svg class="w-4 h-4 transition-transform transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
         </button>
         <div id="authMenu" class="ml-4 mt-1 hidden space-y-1">
            <a href="#" class="block py-1 text-sm hover:underline">Login</a>
            <a href="#" class="block py-1 text-sm hover:underline">Signup</a>
         </div>
         <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700 text-gray-300">Error 404</a>
      </div>

      <!-- Misc Section -->
      <div>
         <p class="uppercase text-xs text-gray-400 mb-2">Misc</p>
         <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700 text-gray-300">Landing</a>
         <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700 text-gray-300">Account</a>
         <button class="w-full flex items-center justify-between px-3 py-2 hover:bg-gray-700 rounded toggle-group" data-target="#pricingMenu">
            <span>Pricing</span>
            <svg class="w-4 h-4 transition-transform transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
         </button>
         <div id="pricingMenu" class="ml-4 mt-1 hidden space-y-1">
            <a href="#" class="block py-1 text-sm hover:underline">Basic</a>
            <a href="#" class="block py-1 text-sm hover:underline">Premium</a>
         </div>
         <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700 text-gray-300">FAQ</a>
         <button class="w-full flex items-center justify-between px-3 py-2 hover:bg-gray-700 rounded toggle-group" data-target="#multiLevelMenu">
            <span>Multi level</span>
            <svg class="w-4 h-4 transition-transform transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
         </button>
         <div id="multiLevelMenu" class="ml-4 mt-1 hidden space-y-1">
            <a href="#" class="block py-1 text-sm hover:underline">Level 1</a>
            <a href="#" class="block py-1 text-sm hover:underline">Level 2</a>
            <a href="#" class="block py-1 text-sm hover:underline">Level 3</a>
         </div>
      </div>


      <!-- Docs Section -->
      <div>
         <p class="uppercase text-xs text-gray-400 mb-2">Docs</p>
         <a href="#" class="block py-2 px-3 rounded hover:bg-gray-700 text-gray-300">Guide</a>
      </div>
   </aside>