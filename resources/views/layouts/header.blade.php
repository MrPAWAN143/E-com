<!-- deskto-nav -->
<div class="hidden lg:block container m-auto">
    <nav class="flex justify-between items-center  gap-5">
        <div class="flex items-center">
            <a href="#"><img src="{{ asset('assets/logo/logo.png') }}" alt="Logo" class="w-17.5 object-cover mr-2"></a>
            <!-- <span class="text-xl font-bold">My Website</span> -->
        </div>
        <ul class="flex space-x-5">
            <li class="nav-item py-5.5"><a href="" class="text-secondary hover:text-tertiary">Shop</a></li>
            <li class="nav-item py-5.5"><a href="" class="text-secondary hover:text-tertiary">Category <x-heroicon-m-chevron-down  class="w-6 inline"/></a>
                <div class="dropdown">
                    <ul class="dropdown-menu bg-primary rounded-bl-sm rounded-br-sm px-4 py-2">
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Men's Clothing</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Women's Clothing</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Kids' Wear</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Ethnic Wear</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Activewear</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item py-5.5"><a href="" class="text-secondary hover:text-tertiary">On Sale <x-heroicon-m-chevron-down  class="w-6 inline"/></a>
                <div class="dropdown">
                    <ul class="dropdown-menu bg-primary rounded-bl-sm rounded-br-sm px-4 py-2">
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Today's Deals</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Under ₹999 / $9.99</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Clearance Sale</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Buy 1 Get 1 Free</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Festive Offers</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Limited-Time Flash Sale </a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item py-5.5"><a href="" class="text-secondary hover:text-tertiary">New Arrivals</a></li>
            <li class="nav-item py-5.5"><a href="" class="text-secondary hover:text-tertiary">Brands</a></li>
        </ul>
        <div class="search_bar flex items-center flex-1  rounded-full p-2 bg-text mx-4">
            <div class="search_icon">
                <a href="#" class="text-secondary hover:text-tertiary"><x-heroicon-s-magnifying-glass class="w-6"/>
                </a>
            </div>
            <form action="" method="" class="w-full">
                <div class="search px-3">
                    <input type="text" name="search" placeholder="Search for products" class="w-full outline-none">
                </div>
            </form>
        </div>
        <ul class="flex space-x-4">
            <li><a href="" class="text-secondary hover:text-tertiary w-full"><x-heroicon-o-heart class="w-6" />
                </a></li>
            <li><a href="" class="text-secondary hover:text-tertiary">
                    <x-heroicon-s-shopping-bag class="w-6" />
                </a>
            </li>
            <li><a href="" class="text-secondary hover:text-tertiary"><x-heroicon-s-user class="w-6" />
                </a></li>
        </ul>
    </nav>
</div>

<!-- mobile nav -->
<div class="container m-auto lg:hidden">
    <nav class="m-navbar flex items-center justify-between">
        <div class="logo">
            <a href="#">
                <img src="{{asset(path: 'assets/logo/logo.png')}}" alt="Logo" class="w-12.5">
            </a>
        </div>
        <a href="#" class="inline-block text-tertiary" id="m-menu">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd"
                    d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z"
                    clip-rule="evenodd" />
            </svg>
        </a>
    </nav>
</div>
<!-- side nav -->
<nav class="side-nav bg-primary lg:hidden w-11/12 max-w-lg absolute top-0 left-0 z-60 h-dvh shadow -ml-[767px] transition-all ">
    <div class="nav-wrapper px-6 pb-2">
        <div class="side-nav-logo flex items-center justify-between">
            <a href="#">
                <img src="{{ asset('assets/logo/logo.png') }}" alt="logo" class="w-12.5">
            </a>
            <a href="#" class="text-tertiary">
            <x-heroicon-o-x-circle class="w-6" id="close-nav" />

        </div>
        </a>
        <ul class="">
            <li class=""><a href="#" class="border-b border-tertiary py-5 block text-tertiary">Shop</a></li>
            <li class="m-navbar-item"><a href="#" class="border-b border-tertiary py-5  text-tertiary flex justify-between sub-menu">category
            <x-heroicon-m-chevron-down  class="w-6"/>
                </a>
                <div class="side-nav-dropdown">
                    <ul class="m-dropdown-menu">
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Men's Clothing</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Women's Clothing</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Kids' Wear</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Ethnic Wear</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Activewear</a></li>
                    </ul>
                </div>
            </li>
            <li class="m-navbar-item"><a href="#" class="border-b border-tertiary py-5 flex justify-between text-tertiary sub-menu">On Sale
            <x-heroicon-m-chevron-down  class="w-6"/>
                </a>
                <div class="side-nav-dropdown ">
                    <ul class="m-dropdown-menu">
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Today's Deals</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Under ₹999 / $9.99</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Clearance Sale</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Buy 1 Get 1 Free</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Festive Offers</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Limited-Time Flash Sale</a></li>
                    </ul>
                </div>
            </li>
            <li class=""><a href="#" class="border-b border-tertiary py-5 block text-tertiary">New Arrivals</a></li>
            <li class=""><a href="#" class="border-b border-tertiary py-5 block text-tertiary">Brands</a></li>
        </ul>
    </div>
</nav>