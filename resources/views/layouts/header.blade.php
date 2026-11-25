
{{-- ==========================================
     ZIL CONNEXION - PREMIUM RESPONSIVE HEADER
     Laravel Blade + Tailwind CSS
=========================================== --}}

<header class="relative z-50 w-full bg-white text-[#14243A] shadow-sm">

    {{-- TOP ANNOUNCEMENT BAR --}}
    <div class="hidden bg-background text-primary-navy md:block">
        <div class="mx-auto flex max-w-[1440px] items-center justify-between px-6 py-2 text-xs">

            <div class="flex items-center gap-2">
                <svg class="h-4 w-4 text-[#F36B38]" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M3 7h11v9H3zM14 10h4l3 3v3h-7z"/>
                    <circle cx="7" cy="18" r="2"/>
                    <circle cx="18" cy="18" r="2"/>
                </svg>
                <span class="font-medium">
                    Discover more. Shop smarter. Delivered across Mauritius.
                </span>
            </div>

            <div class="flex items-center gap-4 text-primary-navy">
                <a href="#" class="hover:text-hover-orange">Track Order</a>
                <span>|</span>
                <a href="#" class="hover:text-hover-orange">Help & Support</a>
                <span>|</span>
                <a href="#" class="hover:text-hover-orange">Contact Us</a>
                <span class="ml-2 font-semibold">🇲🇺 MUR⌄</span>
            </div>

        </div>
    </div>


    {{-- MAIN HEADER --}}
    <div class="border-b border-gray-100">

        <div class="mx-auto flex max-w-[1440px] items-center justify-between gap-4 px-4 py-4 sm:px-6 lg:px-8">

            {{-- LOGO --}}
            <div class="shrink-0">
                <a href="{{ url('/') }}" class="flex items-center">
                    <img
                        src="{{ asset('assets/logo/zil_connection_logo.webp') }}"
                        alt="ZIL Connexion"
                        class="h-10 w-auto object-contain sm:h-12"
                    >
                </a>
            </div>


            {{-- DESKTOP SEARCH --}}
            <div class="hidden max-w-2xl flex-1 md:block">

                <form action="#" method="GET" class="flex w-full">

                    <div class="flex w-full overflow-hidden rounded-full border border-gray-200 bg-white shadow-sm transition focus-within:border-[#F36B38] focus-within:ring-2 focus-within:ring-orange-100">

                        <select
                            name="category"
                            class="cursor-pointer border-r border-gray-200 bg-gray-50 px-4 text-sm font-medium text-gray-700 outline-none"
                        >
                            <option value="">All Categories</option>
                            <option value="fashion">Fashion</option>
                            <option value="electronics">Electronics</option>
                            <option value="home">Home & Living</option>
                            <option value="beauty">Beauty</option>
                            <option value="sports">Sports</option>
                            <option value="automotive">Automotive</option>
                        </select>

                        <input
                            type="search"
                            name="q"
                            placeholder="Search for products..."
                            class="min-w-0 flex-1 border-0 px-4 py-3 text-sm outline-none focus:ring-0"
                        >

                        <button
                            type="submit"
                            class="flex w-14 items-center justify-center bg-[#F36B38] text-white transition hover:bg-[#df5728]"
                            aria-label="Search"
                        >
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <circle cx="11" cy="11" r="7" stroke-width="2"/>
                                <path d="m20 20-4-4" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </button>

                    </div>
                </form>

            </div>


            {{-- HEADER ACTIONS --}}
            <div class="flex items-center gap-3 sm:gap-5">

                {{-- ACCOUNT --}}
                @auth

                    @if(auth()->user()->username)

                        <div class="group relative hidden sm:block">

                            <button class="flex items-center gap-2 rounded-lg p-2 text-sm font-semibold hover:bg-gray-50">

                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <circle cx="12" cy="8" r="3.5" stroke-width="1.8"/>
                                    <path d="M5 20c.6-3.2 3.2-5 7-5s6.4 1.8 7 5" stroke-width="1.8"/>
                                </svg>

                                <span class="max-w-[100px] truncate">
                                    {{ auth()->user()->username }}
                                </span>

                                <span>⌄</span>

                            </button>


                            <div class="invisible absolute right-0 top-full z-50 mt-2 w-56 translate-y-2 rounded-xl border border-gray-100 bg-white p-2 opacity-0 shadow-xl transition-all duration-200 group-hover:visible group-hover:translate-y-0 group-hover:opacity-100">

                                <a href="{{ route('user.dashboard') }}"
                                   class="block rounded-lg px-4 py-3 text-sm hover:bg-orange-50 hover:text-[#F36B38]">
                                    My Account
                                </a>

                                <a href="#"
                                   class="block rounded-lg px-4 py-3 text-sm hover:bg-orange-50 hover:text-[#F36B38]">
                                    My Orders
                                </a>

                                <a href="#"
                                   class="block rounded-lg px-4 py-3 text-sm hover:bg-orange-50 hover:text-[#F36B38]">
                                    Settings
                                </a>

                                <a href="#"
                                   class="block rounded-lg px-4 py-3 text-sm hover:bg-orange-50 hover:text-[#F36B38]">
                                    Favourites
                                </a>

                                <div class="my-2 border-t"></div>

                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf

                                    <button type="submit"
                                        class="w-full rounded-lg px-4 py-3 text-left text-sm text-red-600 hover:bg-red-50">
                                        Logout
                                    </button>
                                </form>

                            </div>

                        </div>

                    @else

                        <div class="hidden items-center gap-2 sm:flex">
                            <a href="{{ route('register') }}"
                               class="rounded-full bg-[#F36B38] px-4 py-2 text-sm font-semibold text-white hover:bg-[#df5728]">
                                Sign Up
                            </a>

                            <a href="{{ route('login') }}"
                               class="rounded-full border border-gray-200 px-4 py-2 text-sm font-semibold hover:border-[#F36B38] hover:text-[#F36B38]">
                                Login
                            </a>
                        </div>

                    @endif

                @else

                    <div class="hidden items-center gap-2 sm:flex">

                        <a href="{{ route('register') }}"
                           class="rounded-full bg-[#F36B38] px-4 py-2 text-sm font-semibold text-white hover:bg-[#df5728]">
                            Sign Up
                        </a>

                        <a href="{{ route('login') }}"
                           class="rounded-full border border-gray-200 px-4 py-2 text-sm font-semibold hover:border-[#F36B38] hover:text-[#F36B38]">
                            Login
                        </a>

                    </div>

                @endauth


                {{-- WISHLIST --}}
                <a href="#"
                   class="relative hidden rounded-lg p-2 text-[#14243A] transition hover:bg-orange-50 hover:text-[#F36B38] sm:block"
                   aria-label="Wishlist">

                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                              d="M20.8 8.8c0 5.1-8.8 10-8.8 10s-8.8-4.9-8.8-10A4.8 4.8 0 0 1 12 6.5a4.8 4.8 0 0 1 8.8 2.3Z"/>
                    </svg>

                    <span class="absolute right-0 top-0 flex h-4 w-4 items-center justify-center rounded-full bg-[#F36B38] text-[10px] text-white">
                        0
                    </span>

                </a>


                {{-- CART --}}
                <div class="group relative">

                    <button class="relative flex items-center gap-2 rounded-lg p-2 hover:bg-gray-50">

                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                                  d="M3 4h2l2.2 11.2a2 2 0 0 0 2 1.6h8.9a2 2 0 0 0 1.9-1.4L22 9H6"/>
                            <circle cx="10" cy="20" r="1.2"/>
                            <circle cx="18" cy="20" r="1.2"/>
                        </svg>

                        <span class="hidden text-sm font-semibold sm:block">Cart</span>

                        <span class="absolute -right-1 -top-1 flex h-4 w-4 items-center justify-center rounded-full bg-[#F36B38] text-[10px] text-white">
                            0
                        </span>

                    </button>


                    {{-- CART DROPDOWN --}}
                    <div class="invisible absolute right-0 top-full z-50 mt-3 w-72 rounded-xl border border-gray-100 bg-white p-5 opacity-0 shadow-xl transition-all duration-200 group-hover:visible group-hover:opacity-100">

                        <h3 class="font-bold text-[#14243A]">
                            Your Shopping Cart
                        </h3>

                        <div class="py-8 text-center">

                            <svg class="mx-auto mb-3 h-10 w-10 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                      d="M3 4h2l2.2 11.2a2 2 0 0 0 2 1.6h8.9a2 2 0 0 0 1.9-1.4L22 9H6"/>
                            </svg>

                            <p class="text-sm font-semibold text-gray-700">
                                Your cart is empty
                            </p>

                            <p class="mt-1 text-xs text-gray-400">
                                Discover products you will love.
                            </p>

                        </div>

                        <a href="{{ url('/') }}"
                           class="block rounded-full bg-[#F36B38] px-4 py-3 text-center text-sm font-bold text-white hover:bg-[#df5728]">
                            Start Shopping
                        </a>

                    </div>

                </div>


                {{-- MOBILE MENU BUTTON --}}
                <button
                    id="zil-mobile-menu-button"
                    type="button"
                    aria-controls="zil-mobile-menu"
                    aria-expanded="false"
                    class="flex h-10 w-10 items-center justify-center rounded-lg hover:bg-gray-100 md:hidden"
                >

                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" stroke-linecap="round"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>

                </button>

            </div>

        </div>


        {{-- MOBILE SEARCH --}}
        <div class="px-4 pb-4 md:hidden">

            <form action="#" method="GET"
                  class="flex overflow-hidden rounded-full border border-gray-200 bg-gray-50">

                <input
                    type="search"
                    name="q"
                    placeholder="Search for products..."
                    class="w-full border-0 bg-transparent px-4 py-3 text-sm outline-none focus:ring-0"
                >

                <button type="submit" class="px-4 text-[#F36B38]" aria-label="Search">

                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="7" stroke-width="2"/>
                        <path d="m20 20-4-4" stroke-width="2"/>
                    </svg>

                </button>

            </form>

        </div>

    </div>


    {{-- DESKTOP CATEGORY NAVIGATION --}}
    <nav class="hidden border-b border-gray-100 bg-primary-navy md:block ">

        <div class="mx-auto flex max-w-[1440px] items-center gap-7 px-6 py-3">

            {{-- SHOP CATEGORY DROPDOWN --}}
            <div class="group relative shrink-0">

                <button class="flex items-center gap-3 rounded-full bg-[#F36B38] px-5 py-2.5 text-sm font-bold text-white transition hover:bg-[#df5728]">

                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" stroke-linecap="round"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>

                    Shop by Category

                    <span></span>

                </button>


                <div class="invisible absolute left-0 top-full z-50 mt-2 w-64 rounded-xl border border-gray-100 bg-white p-3 opacity-0 shadow-xl transition-all duration-200 group-hover:visible group-hover:opacity-100">

                    @foreach(['Fashion', 'Electronics', 'Home & Living', 'Beauty', 'Sports & Fitness', 'Automotive', 'Auto & Tools'] as $category)

                        <a href="#"
                           class="block rounded-lg px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-orange-50 hover:text-[#F36B38]">
                            {{ $category }}
                        </a>

                    @endforeach

                </div>

            </div>


            {{-- NAVIGATION LINKS --}}
            <div class="flex flex-1 items-center justify-between gap-4 text-sm font-semibold text-white">

                <a href="{{ url('/') }}" class="whitespace-nowrap hover:text-[#F36B38]">
                    Home
                </a>

                <a href="#" class="whitespace-nowrap hover:text-[#F36B38]">
                    Fashion <span>⌄</span>
                </a>

                <a href="#" class="whitespace-nowrap hover:text-[#F36B38]">
                    Electronics <span>⌄</span>
                </a>

                <a href="#" class="whitespace-nowrap hover:text-[#F36B38]">
                    Home & Living <span>⌄</span>
                </a>

                <a href="#" class="whitespace-nowrap hover:text-[#F36B38]">
                    Beauty <span>⌄</span>
                </a>

                <a href="#" class="whitespace-nowrap hover:text-[#F36B38]">
                    Sports <span>⌄</span>
                </a>

                <a href="#" class="whitespace-nowrap hover:text-[#F36B38]">
                    Automotive <span>⌄</span>
                </a>

                <a href="#" class="flex items-center gap-1 whitespace-nowrap font-bold text-[#F36B38]">
                    🔥 Deals
                </a>

            </div>

        </div>

    </nav>


    {{-- MOBILE NAVIGATION --}}
    <div id="zil-mobile-menu"
         class="hidden border-t border-gray-100 bg-white px-4 py-5 shadow-lg md:hidden">

        <h3 class="mb-4 text-sm font-bold text-[#14243A]">
            Browse Categories
        </h3>

        <div class="grid grid-cols-2 gap-2">

            @foreach(['Home', 'Fashion', 'Electronics', 'Home & Living', 'Beauty', 'Sports', 'Automotive', '🔥 Todays Deals'] as $category)

                <a href="#"
                   class="rounded-lg bg-gray-50 px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-orange-50 hover:text-[#F36B38]">

                    {{ $category }}

                </a>

            @endforeach

        </div>


        <div class="mt-5 flex gap-3 border-t border-gray-100 pt-4">

            @auth

                <a href="{{ route('user.dashboard') }}"
                   class="flex-1 rounded-full border border-gray-200 px-4 py-3 text-center text-sm font-semibold">
                    My Account
                </a>

                <form action="{{ route('logout') }}" method="POST" class="flex-1">
                    @csrf

                    <button type="submit"
                            class="w-full rounded-full bg-[#14243A] px-4 py-3 text-sm font-semibold text-white">
                        Logout
                    </button>
                </form>

            @else

                <a href="{{ route('login') }}"
                   class="flex-1 rounded-full border border-gray-200 px-4 py-3 text-center text-sm font-semibold">
                    Login
                </a>

                <a href="{{ route('register') }}"
                   class="flex-1 rounded-full bg-[#F36B38] px-4 py-3 text-center text-sm font-semibold text-white">
                    Sign Up
                </a>

            @endauth

        </div>

    </div>

</header>


{{-- MOBILE MENU JAVASCRIPT --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {

        const menuButton = document.getElementById('zil-mobile-menu-button');
        const mobileMenu = document.getElementById('zil-mobile-menu');

        if (menuButton && mobileMenu) {

            menuButton.addEventListener('click', function () {

                mobileMenu.classList.toggle('hidden');

                const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';

                menuButton.setAttribute('aria-expanded', String(!isExpanded));

            });

        }

    });
</script>
