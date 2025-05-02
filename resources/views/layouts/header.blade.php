<!-- deskto-nav -->
<div class="hidden lg:block container m-auto">
    <nav class="flex justify-between items-center  gap-5">
        <div class="flex items-center">
            <img src="{{ asset('assets/logo/noBgColor-1920w.webp') }}" alt="Logo" class="w-50 object-cover mr-2">
            <!-- <span class="text-xl font-bold">My Website</span> -->
        </div>
        <ul class="flex space-x-5">
            <li class="nav-item py-5.5"><a href="" class="text-secondary hover:text-tertiary">Shop</a></li>
            <li class="nav-item py-5.5"><a href="" class="text-secondary hover:text-tertiary">Category</a>
                <div class="dropdown">
                    <ul class="dropdown-menu bg-white rounded-bl-sm rounded-br-sm px-4 py-2">
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Men's Clothing</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Women's Clothing</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Kids' Wear</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Ethnic Wear</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Activewear</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item py-5.5"><a href="" class="text-secondary hover:text-tertiary">On Sale</a>
                <div class="dropdown">
                    <ul class="dropdown-menu bg-white rounded-bl-sm rounded-br-sm px-4 py-2">
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
                <a href="#" class="text-secondary hover:text-tertiary"><svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd"
                            d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
            <form action="" method="" class="w-full">
                <div class="search px-3">
                    <input type="text" name="search" placeholder="Search for products" class="w-full outline-none">
                </div>
            </form>
        </div>
        <ul class="flex space-x-4">
            <li><a href="" class="text-secondary hover:text-tertiary"><svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path
                            d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                    </svg>
                </a></li>
            <li><a href="" class="text-secondary hover:text-tertiary"><svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd"
                            d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 0 0 4.25 22.5h15.5a1.875 1.875 0 0 0 1.865-2.071l-1.263-12a1.875 1.875 0 0 0-1.865-1.679H16.5V6a4.5 4.5 0 1 0-9 0ZM12 3a3 3 0 0 0-3 3v.75h6V6a3 3 0 0 0-3-3Zm-3 8.25a3 3 0 1 0 6 0v-.75a.75.75 0 0 1 1.5 0v.75a4.5 4.5 0 1 1-9 0v-.75a.75.75 0 0 1 1.5 0v.75Z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </li>
            <li><a href="" class="text-secondary hover:text-tertiary"><svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd"
                            d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                            clip-rule="evenodd" />
                    </svg>
                </a></li>
        </ul>
    </nav>
</div>

<!-- mobile nav -->
<div class="container m-auto lg:hidden">
    <nav class="m-navbar flex items-center justify-between py-3">
        <div class="logo">
            <a href="#">
                <img src="{{asset(path: 'assets/logo/noBgColor-1920w.webp')}}" alt="Logo" class="w-50">
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
<nav class="side-nav bg-primary lg:hidden w-11/12 max-w-lg absolute top-0 bottom-0 left-0 z-60 py-3 shadow ">
    <div class="nav-wrapper px-6 pb-2">
        <div class="side-nav-logo flex items-center justify-between">
            <a href="#">
                <img src="{{ asset('assets/logo/noBgColor-1920w.webp') }}" alt="logo" class="w-50">
            </a>
            <a href="#" class="text-tertiary">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd"
                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.72 6.97a.75.75 0 1 0-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 1 0 1.06 1.06L12 13.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L13.06 12l1.72-1.72a.75.75 0 1 0-1.06-1.06L12 10.94l-1.72-1.72Z"
                        clip-rule="evenodd" />
                </svg>

        </div>
        </a>
        <ul>
            <li class=""><a href="#" class="border-b border-tertiary py-5 block text-tertiary">Shop</a></li>
            <li class=""><a href="#" class="border-b border-tertiary py-5  text-tertiary flex justify-between ">category
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                        <path fill-rule="evenodd"
                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
                <div class="side-nav-dropdown ">
                    <ul class="m-dropdown-menu">
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Men's Clothing</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Women's Clothing</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Kids' Wear</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Ethnic Wear</a></li>
                        <li class="dropdown-item"><a href="#" class="dropdown-link">Activewear</a></li>
                    </ul>
                </div>
            </li>
            <li class=""><a href="#" class="border-b border-tertiary py-5 flex justify-between text-tertiary">On Sale <svg
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                        <path fill-rule="evenodd"
                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                            clip-rule="evenodd" />
                    </svg>
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