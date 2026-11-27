@extends('layouts.master')
@section('title' , 'homepage')
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/home.css')}}">

@endsection

@section('banner')
<section class="relative overflow-hidden w-full h-[100vh] md:h-[75vh]">
    <!-- Slides Wrapper -->
    <div class="slider-wrapper relative w-full h-full">
        <!-- Slide 1 -->
        <div class="slide w-full h-full absolute inset-0 bg-cover bg-center flex items-center transition-opacity duration-700 opacity-100 z-0"
            style="background-image: url({{ asset('assets/images/home-banner2.webp') }})">
            <div class="w-full h-full flex items-center bg-[var(--primary-700)]/60 px-4 sm:px-6 md:px-12 lg:px-[10%]">
                <div class="max-w-2xl text-[var(--secondary-100)] text-center md:text-left mx-auto md:mx-0">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 sm:mb-6 lg:mb-8 leading-tight">
                        Find Your Style with Confidence
                    </h1>
                    <p class="text-base sm:text-lg md:text-xl lg:text-2xl mb-4 sm:mb-6 lg:mb-8 text-[var(--secondary-200)]">
                        Discover the latest trends in fashion and accessories from top global brands.
                    </p>
                    <button class="bg-[var(--quaternary-300)] hover:bg-[var(--quaternary-400)] text-white font-semibold px-5 sm:px-6 md:px-8 py-2 sm:py-3 lg:py-4 rounded text-sm sm:text-base lg:text-lg">
                        Shop Now
                    </button>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide w-full h-full absolute inset-0 bg-cover bg-center flex items-center transition-opacity duration-700 opacity-0 z-0"
            style="background-image: url('{{ asset('assets/images/home-banner3.webp') }}')">
            <div class="w-full h-full flex justify-start items-center bg-[var(--primary-700)]/60 px-4 sm:px-6 md:px-12 lg:px-[10%]">
                <div class="max-w-2xl text-[var(--secondary-100)] text-center md:text-left   mx-auto md:mx-0">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 sm:mb-6 lg:mb-8 leading-tight">
                        Find Your Style with Confidence
                    </h1>
                    <p class="text-base sm:text-lg md:text-xl lg:text-2xl mb-4 sm:mb-6 lg:mb-8 text-[var(--secondary-200)]">
                        Discover the latest trends in fashion and accessories from top global brands.
                    </p>
                    <button class="bg-[var(--quaternary-300)] hover:bg-[var(--quaternary-400)] text-white font-semibold px-5 sm:px-6 md:px-8 py-2 sm:py-3 lg:py-4 rounded text-sm sm:text-base lg:text-lg">
                        Shop Now
                    </button>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide w-full h-full absolute inset-0 bg-cover bg-center flex items-center transition-opacity duration-700 opacity-0 z-0"
            style="background-image: url({{ asset('assets/images/home-banner1.webp')}})">
            <div class="w-full h-full flex justify-start items-center bg-[var(--primary-700)]/60 px-4 sm:px-6 md:px-12 lg:px-[10%]">
                <div class="max-w-2xl text-[var(--secondary-100)] text-center md:text-left mx-auto md:mx-0">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 sm:mb-6 lg:mb-8 leading-tight">
                        Find Your Style with Confidence
                    </h1>
                    <p class="text-base sm:text-lg md:text-xl lg:text-2xl mb-4 sm:mb-6 lg:mb-8 text-[var(--secondary-200)]">
                        Discover the latest trends in fashion and accessories from top global brands.
                    </p>
                    <button class="bg-[var(--quaternary-300)] hover:bg-[var(--quaternary-400)] text-white font-semibold px-5 sm:px-6 md:px-8 py-2 sm:py-3 lg:py-4 rounded text-sm sm:text-base lg:text-lg">
                        Shop Now
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Arrows -->
    <div class="absolute left-2 sm:left-4 top-1/2 transform -translate-y-1/2 z-50">
        <button class="prev-slide w-10 sm:w-14 h-10 sm:h-14 flex items-center justify-center rounded-full bg-[var(--primary-500)] hover:bg-[var(--primary-600)] text-white shadow-lg">
            <x-heroicon-c-arrow-left class="w-5 sm:w-6 h-5 sm:h-6" />
        </button>
    </div>
    <div class="absolute right-2 sm:right-4 top-1/2 transform -translate-y-1/2 z-50">
        <button class="next-slide w-10 sm:w-14 h-10 sm:h-14 flex items-center justify-center rounded-full bg-[var(--primary-500)] hover:bg-[var(--primary-600)] text-white shadow-lg">
            <x-heroicon-c-arrow-right class="w-5 sm:w-6 h-5 sm:h-6" />
        </button>
    </div>
</section>
@endsection
@section('trust benifit section')
{{-- Trust Benefits Section --}}
<section class="bg-white border-y border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 py-6">

            {{-- Benefit 1 --}}
            <div class="flex items-center gap-3">
                <div class="flex-shrink-0 w-11 h-11 rounded-full bg-orange-50 flex items-center justify-center">
                    <svg class="w-5 h-5 text-[#F36B38]" fill="none"
                         stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="1.8"
                              d="M3 7h13v11H3zM16 11h3l2 3v4h-5zM7 18a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm11 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-sm font-bold text-[#14243A]">Fast Delivery</h3>
                    <p class="text-xs text-gray-500 mt-1">Quick & reliable shipping</p>
                </div>
            </div>

            {{-- Benefit 2 --}}
            <div class="flex items-center gap-3">
                <div class="flex-shrink-0 w-11 h-11 rounded-full bg-orange-50 flex items-center justify-center">
                    <svg class="w-5 h-5 text-[#F36B38]" fill="none"
                         stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="1.8"
                              d="M12 3l8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7l8-4zM9 12l2 2 4-4"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-sm font-bold text-[#14243A]">Quality Products</h3>
                    <p class="text-xs text-gray-500 mt-1">Trusted product selection</p>
                </div>
            </div>

            {{-- Benefit 3 --}}
            <div class="flex items-center gap-3">
                <div class="flex-shrink-0 w-11 h-11 rounded-full bg-orange-50 flex items-center justify-center">
                    <svg class="w-5 h-5 text-[#F36B38]" fill="none"
                         stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="1.8"
                              d="M12 8v4l3 2m6-2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-sm font-bold text-[#14243A]">24/7 Support</h3>
                    <p class="text-xs text-gray-500 mt-1">Here whenever you need us</p>
                </div>
            </div>

            {{-- Benefit 4 --}}
            <div class="flex items-center gap-3">
                <div class="flex-shrink-0 w-11 h-11 rounded-full bg-orange-50 flex items-center justify-center">
                    <svg class="w-5 h-5 text-[#F36B38]" fill="none"
                         stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="1.8"
                              d="M12 3v18m-7-5 7 5 7-5M5 8l7-5 7 5"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-sm font-bold text-[#14243A]">Easy Shopping</h3>
                    <p class="text-xs text-gray-500 mt-1">Simple & secure experience</p>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
@section('trending product')

<section class="bg-[#F8F9FB] py-14 lg:py-20" id="trending-products">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="flex items-end justify-between gap-5 mb-10">

            <div>
                <span class="inline-flex items-center gap-2 text-[#F36B38]
                             text-xs sm:text-sm font-bold uppercase tracking-[0.15em]">
                    <span class="w-2 h-2 rounded-full bg-[#F36B38]"></span>
                    Customer Favorites
                </span>

                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold
                           text-[#14243A] mt-3">
                    Trending Products
                </h2>

                <p class="text-gray-500 text-sm sm:text-base mt-3 max-w-xl">
                    Explore the most popular automotive parts and accessories.
                </p>
            </div>

            {{-- Slider Controls --}}
            <div class="flex gap-2 shrink-0">

                <button type="button" id="trending-prev"
                    class="w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-white
                           border border-gray-200 text-[#14243A]
                           hover:bg-[#14243A] hover:text-white hover:border-[#14243A]
                           transition-all duration-300 shadow-sm"
                    aria-label="Previous products">

                    <svg class="w-5 h-5 mx-auto" fill="none"
                         stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>

                <button type="button" id="trending-next"
                    class="w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-white
                           border border-gray-200 text-[#14243A]
                           hover:bg-[#14243A] hover:text-white hover:border-[#14243A]
                           transition-all duration-300 shadow-sm"
                    aria-label="Next products">

                    <svg class="w-5 h-5 mx-auto" fill="none"
                         stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M9 5l7 7-7 7"/>
                    </svg>
                </button>

            </div>
        </div>


        {{-- Product Slider --}}
        <div id="trending-slick-slider">

            @php
                $products = [
                    [
                        'name' => 'Premium Engine Assembly',
                        'category' => 'Engine Components',
                        'image' => 'engine-parts.webp',
                        'price' => '149.00',
                        'old_price' => '199.00',
                        'discount' => '25%',
                        'rating' => '4.8',
                        'reviews' => '24',
                        'badge' => 'Trending',
                        'badge_color' => 'orange',
                    ],
                    [
                        'name' => 'Heavy Duty Brake Kit',
                        'category' => 'Brake System',
                        'image' => 'brake-system.webp',
                        'price' => '89.00',
                        'old_price' => '120.00',
                        'discount' => '26%',
                        'rating' => '4.9',
                        'reviews' => '18',
                        'badge' => 'Best Seller',
                        'badge_color' => 'green',
                    ],
                    [
                        'name' => 'Performance Suspension',
                        'category' => 'Suspension',
                        'image' => 'suspension.webp',
                        'price' => '210.00',
                        'old_price' => '260.00',
                        'discount' => '19%',
                        'rating' => '4.7',
                        'reviews' => '32',
                        'badge' => 'New',
                        'badge_color' => 'navy',
                    ],
                    [
                        'name' => 'Automotive Power Module',
                        'category' => 'Electrical',
                        'image' => 'electrical-parts.webp',
                        'price' => '75.00',
                        'old_price' => '99.00',
                        'discount' => '24%',
                        'rating' => '4.6',
                        'reviews' => '14',
                        'badge' => 'Hot Deal',
                        'badge_color' => 'orange',
                    ],
                    [
                        'name' => 'High Performance Oil Filter',
                        'category' => 'Filters',
                        'image' => 'filters.webp',
                        'price' => '25.00',
                        'old_price' => '35.00',
                        'discount' => '29%',
                        'rating' => '4.9',
                        'reviews' => '40',
                        'badge' => 'Top Rated',
                        'badge_color' => 'green',
                    ],
                    [
                        'name' => 'Premium Vehicle Lighting',
                        'category' => 'Lighting',
                        'image' => 'lighting.webp',
                        'price' => '65.00',
                        'old_price' => '85.00',
                        'discount' => '23%',
                        'rating' => '4.7',
                        'reviews' => '21',
                        'badge' => 'Trending',
                        'badge_color' => 'orange',
                    ],
                ];
            @endphp


            @foreach($products as $product)

                <div class="px-2.5 pb-5">

                    {{-- Product Card --}}
                    <div class="product-card group relative bg-white rounded-2xl
                                border border-gray-100 overflow-hidden
                                transition-all duration-300
                                hover:shadow-[0_15px_40px_rgba(20,36,58,0.12)]
                                hover:border-orange-100">

                        {{-- Image Area --}}
                        <div class="relative aspect-square overflow-hidden
                                    bg-gradient-to-br from-[#F7F8FA] to-[#EEF1F5]">

                            {{-- Badge --}}
                            <span class="absolute top-4 left-4 z-20
                                         text-xs font-bold px-3 py-1.5 rounded-full
                                         text-white shadow-sm

                                         @if($product['badge_color'] === 'orange')
                                             bg-[#F36B38]
                                         @elseif($product['badge_color'] === 'green')
                                             bg-green-600
                                         @else
                                             bg-[#14243A]
                                         @endif">

                                {{ $product['badge'] }}
                            </span>

                            {{-- Product Image --}}
                            <img src="{{ asset('assets/images/categories/' . $product['image']) }}"
                                 alt="{{ $product['name'] }}"
                                 class="w-full h-full object-cover
                                        transition-transform duration-700
                                        group-hover:scale-110"
                                 loading="lazy">

                            {{-- Wishlist --}}
                            <button type="button"
                                    aria-label="Add to wishlist"
                                    class="absolute top-4 right-4 z-20 w-10 h-10
                                           rounded-full bg-white/90 backdrop-blur-sm
                                           shadow-sm flex items-center justify-center
                                           text-gray-500
                                           hover:text-[#F36B38] hover:scale-110
                                           transition-all duration-300">

                                <svg class="w-5 h-5" fill="none"
                                     stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-width="1.8"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.7
                                             11 4.6a5.5 5.5 0 0 0-7.8 7.8L12 21
                                             l8.8-8.6a5.5 5.5 0 0 0 0-7.8z"/>
                                </svg>
                            </button>


                            {{-- Premium Hover Overlay --}}
                            <div class="absolute inset-0 z-10
                                        bg-[#14243A]/80 backdrop-blur-[2px]
                                        opacity-0 group-hover:opacity-100
                                        transition-all duration-300
                                        flex items-center justify-center">

                                <div class="flex flex-col gap-3 w-[80%]
                                            transform translate-y-6
                                            group-hover:translate-y-0
                                            transition-transform duration-500">

                                    {{-- Quick View --}}
                                    <a href="#"
                                       class="flex items-center justify-center gap-2
                                              bg-white text-[#14243A]
                                              py-3 px-4 rounded-xl
                                              text-sm font-bold
                                              hover:bg-gray-100 transition">

                                        <svg class="w-5 h-5" fill="none"
                                             stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-width="1.8"
                                                  stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0z
                                                     M2 12s4-7 10-7 10 7 10 7-4 7-10 7-10-7-10-7z"/>
                                        </svg>

                                        Quick View
                                    </a>

                                    {{-- Add to Cart --}}
                                    <button type="button"
                                            class="flex items-center justify-center gap-2
                                                   bg-[#F36B38] text-white
                                                   py-3 px-4 rounded-xl
                                                   text-sm font-bold
                                                   hover:bg-[#DF5728] transition">

                                        <svg class="w-5 h-5" fill="none"
                                             stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-width="1.8"
                                                  stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  d="M3 3h2l2 13h11l3-9H6
                                                     M9 20a1 1 0 1 0 0-2 1 1 0 0 0 0 2z
                                                     M17 20a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                        </svg>

                                        Add to Cart
                                    </button>
                                </div>
                            </div>

                        </div>


                        {{-- Product Info --}}
                        <div class="p-4 sm:p-5">

                            {{-- Category --}}
                            <p class="text-[11px] font-semibold uppercase
                                      tracking-[0.12em] text-gray-400 mb-2">
                                {{ $product['category'] }}
                            </p>

                            {{-- Product Name --}}
                            <h3 class="text-[#14243A] font-bold text-sm sm:text-base
                                       leading-snug min-h-[44px]
                                       group-hover:text-[#F36B38]
                                       transition-colors duration-300">
                                {{ $product['name'] }}
                            </h3>

                            {{-- Rating --}}
                            <div class="flex items-center gap-2 mt-3">

                                <div class="flex text-amber-400 text-sm tracking-tight">
                                    ★★★★★
                                </div>

                                <span class="text-xs font-semibold text-gray-500">
                                    {{ $product['rating'] }}
                                </span>

                                <span class="text-xs text-gray-400">
                                    ({{ $product['reviews'] }})
                                </span>
                            </div>

                            {{-- Price --}}
                            <div class="flex items-center flex-wrap gap-2 mt-4">

                                <span class="text-lg sm:text-xl font-extrabold
                                            text-[#14243A]">
                                    ${{ $product['price'] }}
                                </span>

                                <span class="text-sm text-gray-400 line-through">
                                    ${{ $product['old_price'] }}
                                </span>
                            </div>

                            {{-- Discount --}}
                            <div class="mt-3">

                                <span class="inline-flex items-center gap-1
                                             text-xs font-bold text-green-700
                                             bg-green-50 border border-green-100
                                             px-2.5 py-1 rounded-md">

                                    <svg class="w-3.5 h-3.5" fill="none"
                                         stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-width="2"
                                              stroke-linecap="round"
                                              stroke-linejoin="round"
                                              d="M5 12l4 4L19 6"/>
                                    </svg>

                                    {{ $product['discount'] }} OFF
                                </span>
                            </div>

                        </div>

                    </div>
                </div>

            @endforeach

        </div>


        {{-- View All --}}
        <div class="text-center mt-10">

            <a href="{{ url('/shop') }}"
               class="inline-flex items-center gap-3
                      bg-[#14243A] text-white px-8 py-3.5
                      rounded-full text-sm font-bold
                      hover:bg-[#F36B38] transition-all duration-300
                      shadow-lg shadow-[#14243A]/10">

                Explore All Products

                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                     viewBox="0 0 24 24">
                    <path stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M5 12h14m-7-7l7 7-7 7"/>
                </svg>
            </a>

        </div>

    </div>
</section>

@endsection

@section('shop by categories')

<section class="bg-[#F8F9FB] py-14 lg:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Heading --}}
        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 mb-9">
            <div>
                <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#F36B38]">
                    Explore Our Collection
                </span>

                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#14243A] mt-2">
                    Shop By Categories
                </h2>

                <p class="text-sm sm:text-base text-gray-500 mt-3 max-w-xl">
                    Discover premium automotive parts and accessories
                    designed to keep your vehicle performing at its best.
                </p>
            </div>

            <a href="{{ url('/categories') }}"
               class="inline-flex items-center gap-2 text-sm font-bold text-[#14243A]
                      hover:text-[#F36B38] transition-colors">
                View All Categories
                <span class="text-lg">&rarr;</span>
            </a>
        </div>

        {{-- Premium Category Grid --}}
        <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-4 lg:gap-5">

            {{-- 1. Engine Parts --}}
            <a href="{{ url('/category/engine-parts') }}"
               class="category-card group relative min-h-[210px] sm:min-h-[240px] xl:min-h-[260px]
                      rounded-2xl overflow-hidden bg-[#14243A] shadow-sm">

                <img src="{{ asset('assets/images/categories/engine-parts.webp') }}"
                     alt="Engine Parts"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700
                            group-hover:scale-110">

                <div class="absolute inset-0 bg-gradient-to-t from-[#101D30] via-[#14243A]/30 to-transparent"></div>

                <div class="absolute inset-0 p-4 sm:p-5 flex flex-col justify-end">
                    <span class="text-[10px] font-bold tracking-[0.18em] text-[#F36B38] uppercase mb-2">
                        Category 01
                    </span>
                    <div class="flex items-end justify-between gap-2">
                        <div>
                            <h3 class="text-white text-lg font-bold">Engine Parts</h3>
                            <p class="text-gray-300 text-xs mt-1">Explore Collection</p>
                        </div>
                        <span class="w-9 h-9 shrink-0 rounded-full bg-white/15 backdrop-blur
                                     text-white flex items-center justify-center
                                     group-hover:bg-[#F36B38] transition-all duration-300">
                            &rarr;
                        </span>
                    </div>
                </div>
            </a>

            {{-- 2. Brake System --}}
            <a href="{{ url('/category/brake-system') }}"
               class="category-card group relative min-h-[210px] sm:min-h-[240px] xl:min-h-[260px]
                      rounded-2xl overflow-hidden bg-[#14243A] shadow-sm">

                <img src="{{ asset('assets/images/categories/brake-system.webp') }}"
                     alt="Brake System"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700
                            group-hover:scale-110">

                <div class="absolute inset-0 bg-gradient-to-t from-[#101D30] via-[#14243A]/30 to-transparent"></div>

                <div class="absolute inset-0 p-4 sm:p-5 flex flex-col justify-end">
                    <span class="text-[10px] font-bold tracking-[0.18em] text-[#F36B38] uppercase mb-2">
                        Category 02
                    </span>
                    <div class="flex items-end justify-between gap-2">
                        <div>
                            <h3 class="text-white text-lg font-bold">Brake System</h3>
                            <p class="text-gray-300 text-xs mt-1">Explore Collection</p>
                        </div>
                        <span class="w-9 h-9 shrink-0 rounded-full bg-white/15 backdrop-blur
                                     text-white flex items-center justify-center
                                     group-hover:bg-[#F36B38] transition-all duration-300">
                            &rarr;
                        </span>
                    </div>
                </div>
            </a>

            {{-- 3. Suspension --}}
            <a href="{{ url('/category/suspension') }}"
               class="category-card group relative min-h-[210px] sm:min-h-[240px] xl:min-h-[260px]
                      rounded-2xl overflow-hidden bg-[#14243A] shadow-sm">

                <img src="{{ asset('assets/images/categories/suspension.webp') }}"
                     alt="Suspension Parts"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700
                            group-hover:scale-110">

                <div class="absolute inset-0 bg-gradient-to-t from-[#101D30] via-[#14243A]/30 to-transparent"></div>

                <div class="absolute inset-0 p-4 sm:p-5 flex flex-col justify-end">
                    <span class="text-[10px] font-bold tracking-[0.18em] text-[#F36B38] uppercase mb-2">
                        Category 03
                    </span>
                    <div class="flex items-end justify-between gap-2">
                        <div>
                            <h3 class="text-white text-lg font-bold">Suspension</h3>
                            <p class="text-gray-300 text-xs mt-1">Explore Collection</p>
                        </div>
                        <span class="w-9 h-9 shrink-0 rounded-full bg-white/15 backdrop-blur
                                     text-white flex items-center justify-center
                                     group-hover:bg-[#F36B38] transition-all duration-300">
                            &rarr;
                        </span>
                    </div>
                </div>
            </a>

            {{-- 4. Electrical Parts --}}
            <a href="{{ url('/category/electrical-parts') }}"
               class="category-card group relative min-h-[210px] sm:min-h-[240px] xl:min-h-[260px]
                      rounded-2xl overflow-hidden bg-[#14243A] shadow-sm">

                <img src="{{ asset('assets/images/categories/electrical-parts.webp') }}"
                     alt="Electrical Parts"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700
                            group-hover:scale-110">

                <div class="absolute inset-0 bg-gradient-to-t from-[#101D30] via-[#14243A]/30 to-transparent"></div>

                <div class="absolute inset-0 p-4 sm:p-5 flex flex-col justify-end">
                    <span class="text-[10px] font-bold tracking-[0.18em] text-[#F36B38] uppercase mb-2">
                        Category 04
                    </span>
                    <div class="flex items-end justify-between gap-2">
                        <div>
                            <h3 class="text-white text-lg font-bold">Electrical Parts</h3>
                            <p class="text-gray-300 text-xs mt-1">Explore Collection</p>
                        </div>
                        <span class="w-9 h-9 shrink-0 rounded-full bg-white/15 backdrop-blur
                                     text-white flex items-center justify-center
                                     group-hover:bg-[#F36B38] transition-all duration-300">
                            &rarr;
                        </span>
                    </div>
                </div>
            </a>

            {{-- 5. Filters --}}
            <a href="{{ url('/category/filters') }}"
               class="category-card group relative min-h-[210px] sm:min-h-[240px] xl:min-h-[260px]
                      rounded-2xl overflow-hidden bg-[#14243A] shadow-sm">

                <img src="{{ asset('assets/images/categories/filters.webp') }}"
                     alt="Vehicle Filters"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700
                            group-hover:scale-110">

                <div class="absolute inset-0 bg-gradient-to-t from-[#101D30] via-[#14243A]/30 to-transparent"></div>

                <div class="absolute inset-0 p-4 sm:p-5 flex flex-col justify-end">
                    <span class="text-[10px] font-bold tracking-[0.18em] text-[#F36B38] uppercase mb-2">
                        Category 05
                    </span>
                    <div class="flex items-end justify-between gap-2">
                        <div>
                            <h3 class="text-white text-lg font-bold">Filters</h3>
                            <p class="text-gray-300 text-xs mt-1">Explore Collection</p>
                        </div>
                        <span class="w-9 h-9 shrink-0 rounded-full bg-white/15 backdrop-blur
                                     text-white flex items-center justify-center
                                     group-hover:bg-[#F36B38] transition-all duration-300">
                            &rarr;
                        </span>
                    </div>
                </div>
            </a>

            {{-- SECOND ROW --}}

            {{-- 6. Lighting: 1 Column --}}
            <a href="{{ url('/category/lighting') }}"
               class="category-card group relative min-h-[210px] sm:min-h-[240px] xl:min-h-[260px]
                      xl:col-span-1 rounded-2xl overflow-hidden bg-[#14243A] shadow-sm">

                <img src="{{ asset('assets/images/categories/lighting.webp') }}"
                     alt="Vehicle Lighting"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700
                            group-hover:scale-110">

                <div class="absolute inset-0 bg-gradient-to-t from-[#101D30] via-[#14243A]/30 to-transparent"></div>

                <div class="absolute inset-0 p-4 sm:p-5 flex flex-col justify-end">
                    <span class="text-[10px] font-bold tracking-[0.18em] text-[#F36B38] uppercase mb-2">
                        Category 06
                    </span>
                    <div class="flex items-end justify-between gap-2">
                        <div>
                            <h3 class="text-white text-lg font-bold">Lighting</h3>
                            <p class="text-gray-300 text-xs mt-1">Explore Collection</p>
                        </div>
                        <span class="w-9 h-9 shrink-0 rounded-full bg-white/15 backdrop-blur
                                     text-white flex items-center justify-center
                                     group-hover:bg-[#F36B38] transition-all duration-300">
                            &rarr;
                        </span>
                    </div>
                </div>
            </a>

            {{-- 7. Body Parts: 2 Columns --}}
            <a href="{{ url('/category/body-parts') }}"
               class="category-card group relative min-h-[210px] sm:min-h-[240px] xl:min-h-[260px]
                      md:col-span-1 xl:col-span-2 rounded-2xl overflow-hidden bg-[#14243A] shadow-sm">

                <img src="{{ asset('assets/images/categories/body-parts.webp') }}"
                     alt="Vehicle Body Parts"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700
                            group-hover:scale-110">

                <div class="absolute inset-0 bg-gradient-to-t from-[#101D30] via-[#14243A]/20 to-transparent"></div>

                <div class="absolute inset-0 p-4 sm:p-6 flex flex-col justify-end">
                    <span class="text-[10px] font-bold tracking-[0.18em] text-[#F36B38] uppercase mb-2">
                        Category 07
                    </span>
                    <div class="flex items-end justify-between gap-3">
                        <div>
                            <h3 class="text-white text-xl sm:text-2xl font-bold">Body Parts</h3>
                            <p class="text-gray-300 text-xs sm:text-sm mt-1">
                                Quality components for every vehicle
                            </p>
                        </div>
                        <span class="w-10 h-10 shrink-0 rounded-full bg-white/15 backdrop-blur
                                     text-white flex items-center justify-center
                                     group-hover:bg-[#F36B38] transition-all duration-300">
                            &rarr;
                        </span>
                    </div>
                </div>
            </a>

            {{-- 8. Accessories: 2 Columns --}}
            <a href="{{ url('/category/accessories') }}"
               class="category-card group relative min-h-[210px] sm:min-h-[240px] xl:min-h-[260px]
                      md:col-span-1 xl:col-span-2 rounded-2xl overflow-hidden bg-[#14243A] shadow-sm">

                <img src="{{ asset('assets/images/categories/accessories.webp') }}"
                     alt="Vehicle Accessories"
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700
                            group-hover:scale-110">

                <div class="absolute inset-0 bg-gradient-to-t from-[#101D30] via-[#14243A]/20 to-transparent"></div>

                <div class="absolute inset-0 p-4 sm:p-6 flex flex-col justify-end">
                    <span class="text-[10px] font-bold tracking-[0.18em] text-[#F36B38] uppercase mb-2">
                        Category 08
                    </span>
                    <div class="flex items-end justify-between gap-3">
                        <div>
                            <h3 class="text-white text-xl sm:text-2xl font-bold">Accessories</h3>
                            <p class="text-gray-300 text-xs sm:text-sm mt-1">
                                Upgrade your driving experience
                            </p>
                        </div>
                        <span class="w-10 h-10 shrink-0 rounded-full bg-white/15 backdrop-blur
                                     text-white flex items-center justify-center
                                     group-hover:bg-[#F36B38] transition-all duration-300">
                            &rarr;
                        </span>
                    </div>
                </div>
            </a>

        </div>
    </div>
</section>

@endsection
@section('ad banner')


<section class="py-8 sm:py-10 lg:py-14 bg-[#F8F9FB]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Background Banner --}}
        <div
            class="relative overflow-hidden rounded-2xl lg:rounded-3xl
                   min-h-[390px] lg:min-h-[430px] flex items-center
                   bg-[#14243A] bg-cover bg-center"
            style="background-image: url('{{ asset('assets/images/banner1.webp') }}');"
        >

            {{-- Dark Overlay --}}
            <div class="absolute inset-0 bg-[#071A32]/65"></div>

            {{-- Gradient Overlay --}}
            <div class="absolute inset-0"></div>

            {{-- Content --}}
            <div class="relative z-10 w-full px-6 py-12 sm:px-10 lg:px-14">

                <div class="max-w-5xl mx-auto">

                    {{-- Main Content + CTA --}}
                    <div class="flex flex-col lg:flex-row
                                items-center justify-center gap-8 lg:gap-12">

                        {{-- Text Content --}}
                        <div class="text-center flex-1">

                            {{-- Label --}}
                            <span class="inline-flex items-center gap-2
                                         rounded-full bg-[#F36B38]
                                         px-5 py-2 text-white text-xs
                                         sm:text-sm font-bold uppercase
                                         tracking-widest mb-5">
                                <span class="text-lg">✦</span>
                                B2B Solutions
                            </span>

                            {{-- Heading --}}
                            <h2 class="text-3xl sm:text-4xl lg:text-5xl
                                       font-extrabold text-white
                                       leading-tight tracking-tight">

                                Sourcing Made Simple
                                <span class="block text-[#FF824F]">
                                    for Business.
                                </span>
                            </h2>

                            {{-- Description --}}
                            <p class="text-sm sm:text-base text-white/85
                                      leading-7 mt-4 max-w-2xl mx-auto">
                                Your trusted partner for global sourcing,
                                wholesale procurement and seamless
                                international trade solutions.
                            </p>

                            {{-- Services --}}
                            <div class="flex flex-wrap justify-center
                                        items-center gap-x-6 gap-y-4 mt-7">

                                <div class="flex items-center gap-2 text-white">
                                    <span class="text-xl">🚢</span>
                                    <span class="text-sm font-semibold">
                                        Import - Export
                                    </span>
                                </div>

                                <span class="hidden sm:block w-px h-6 bg-white/40"></span>

                                <div class="flex items-center gap-2 text-white">
                                    <span class="text-xl">📦</span>
                                    <span class="text-sm font-semibold">
                                        Wholesale
                                    </span>
                                </div>

                                <span class="hidden sm:block w-px h-6 bg-white/40"></span>

                                <div class="flex items-center gap-2 text-white">
                                    <span class="text-xl">🌍</span>
                                    <span class="text-sm font-semibold">
                                        Global Delivery
                                    </span>
                                </div>

                            </div>
                        </div>

                        {{-- CTA Right Side --}}
                        <div class="shrink-0">
                            <a href="{{ url('/contact') }}"
                               class="inline-flex items-center gap-4
                                      bg-[#F36B38] hover:bg-white
                                      text-white hover:text-[#14243A]
                                      font-bold text-sm sm:text-base
                                      px-7 py-4 rounded-full
                                      shadow-xl shadow-black/20
                                      transition-all duration-300
                                      group whitespace-nowrap">

                                Partner With Us

                                <span class="w-9 h-9 rounded-full
                                             bg-white text-[#F36B38]
                                             flex items-center justify-center
                                             group-hover:bg-[#F36B38]
                                             group-hover:text-white
                                             transition-all duration-300">
                                    &rarr;
                                </span>
                            </a>

                            <p class="text-center text-xs text-white/75 mt-3">
                                Let's grow globally
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
@section('feature product')

<section class="bg-white py-14 lg:py-20">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Heading --}}
        <div class="flex items-end justify-between gap-4 mb-8">

            <div>
                <span class="text-xs font-bold uppercase tracking-[0.2em]
                             text-[#F36B38]">
                    Handpicked For You
                </span>

                <h2 class="text-2xl sm:text-3xl lg:text-4xl
                           font-extrabold text-[#14243A] mt-2">
                    Featured Products
                </h2>

                <p class="text-sm text-gray-500 mt-2">
                    Explore our popular products and latest arrivals.
                </p>
            </div>

            <a href="{{ url('/products') }}"
               class="hidden sm:inline-flex items-center gap-2
                      text-sm font-bold text-[#14243A]
                      hover:text-[#F36B38] transition-colors">
                View All Products
                <span class="text-lg">&rarr;</span>
            </a>

        </div>

        {{-- Products Grid --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">

            @php
                $products = [
                    [
                        'name' => 'Premium Brake Disc',
                        'category' => 'Brake System',
                        'image' => 'brake-system.webp',
                        'price' => '₹2,499',
                        'old_price' => '₹3,199',
                        'discount' => '22% OFF',
                        'rating' => '4.8',
                        'reviews' => '124',
                        'badge' => 'Best Seller',
                    ],
                    [
                        'name' => 'High Performance Air Filter',
                        'category' => 'Engine Parts',
                        'image' => 'filters.webp',
                        'price' => '₹899',
                        'old_price' => '₹1,199',
                        'discount' => '25% OFF',
                        'rating' => '4.6',
                        'reviews' => '86',
                        'badge' => 'New Arrival',
                    ],
                    [
                        'name' => 'Premium Car Headlight',
                        'category' => 'Lighting',
                        'image' => 'lighting.webp',
                        'price' => '₹4,599',
                        'old_price' => '₹5,499',
                        'discount' => '16% OFF',
                        'rating' => '4.9',
                        'reviews' => '215',
                        'badge' => 'Popular',
                    ],
                    [
                        'name' => 'Heavy Duty Suspension Kit',
                        'category' => 'Suspension',
                        'image' => 'suspension.webp',
                        'price' => '₹6,999',
                        'old_price' => '₹8,499',
                        'discount' => '18% OFF',
                        'rating' => '4.7',
                        'reviews' => '98',
                        'badge' => 'Top Rated',
                    ],
                ];
            @endphp

            @foreach($products as $product)

                <div class="group relative bg-white rounded-2xl
                            border border-gray-100 overflow-hidden
                            hover:border-gray-200 hover:shadow-xl
                            transition-all duration-300">

                    {{-- Product Image Area --}}
                    <div class="relative bg-[#F7F8FA] overflow-hidden">

                        <a href="{{ url('/product') }}"
                           class="block aspect-square">

                            <img
                                src="{{ asset('assets/images/categories/' . $product['image']) }}"
                                alt="{{ $product['name'] }}"
                                class="w-full h-full object-cover
                                       transition-transform duration-500
                                       group-hover:scale-110"
                                loading="lazy">
                        </a>

                        {{-- Product Badge --}}
                        <span class="absolute top-3 left-3
                                     bg-[#F36B38] text-white
                                     text-[10px] sm:text-xs font-bold
                                     px-2.5 py-1 rounded-md">
                            {{ $product['badge'] }}
                        </span>

                        {{-- Discount Badge --}}
                        <span class="absolute top-3 right-3
                                     bg-[#14243A] text-white
                                     text-[10px] font-bold
                                     px-2 py-1 rounded-md">
                            {{ $product['discount'] }}
                        </span>

                        {{-- Wishlist Button --}}
                        <button type="button"
                                aria-label="Add to wishlist"
                                class="absolute bottom-3 right-3
                                       w-9 h-9 rounded-full bg-white
                                       shadow-md flex items-center
                                       justify-center text-gray-500
                                       hover:text-red-500 hover:scale-110
                                       transition-all duration-300">

                            <svg class="w-5 h-5" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="1.8"
                                      d="M20.8 4.6a5.5 5.5 0 00-7.8 0L12 5.7l-1.1-1.1a5.5 5.5 0 00-7.8 7.8l1.1 1.1L12 21l7.8-7.5 1.1-1.1a5.5 5.5 0 00-.1-7.8z"/>
                            </svg>

                        </button>

                    </div>

                    {{-- Product Information --}}
                    <div class="p-3 sm:p-4">

                        {{-- Category --}}
                        <p class="text-[10px] sm:text-xs font-semibold
                                  uppercase tracking-wider text-gray-400">
                            {{ $product['category'] }}
                        </p>

                        {{-- Product Name --}}
                        <a href="{{ url('/product') }}">
                            <h3 class="text-sm sm:text-base font-bold
                                       text-[#14243A] mt-1
                                       line-clamp-2 min-h-10
                                       group-hover:text-[#F36B38]
                                       transition-colors">
                                {{ $product['name'] }}
                            </h3>
                        </a>

                        {{-- Rating --}}
                        <div class="flex items-center gap-1 mt-2">

                            <div class="flex text-[#F5A623] text-xs">
                                ★★★★★
                            </div>

                            <span class="text-xs font-bold text-gray-600">
                                {{ $product['rating'] }}
                            </span>

                            <span class="text-[10px] text-gray-400">
                                ({{ $product['reviews'] }})
                            </span>

                        </div>

                        {{-- Price --}}
                        <div class="flex flex-wrap items-center
                                    gap-x-2 gap-y-1 mt-3">

                            <span class="text-base sm:text-lg
                                         font-extrabold text-[#14243A]">
                                {{ $product['price'] }}
                            </span>

                            <span class="text-xs text-gray-400 line-through">
                                {{ $product['old_price'] }}
                            </span>

                        </div>

                        {{-- Add to Cart --}}
                        <button type="button"
                                class="w-full mt-4 py-2.5 px-3
                                       rounded-lg border border-[#14243A]
                                       text-[#14243A] text-xs sm:text-sm
                                       font-bold flex items-center
                                       justify-center gap-2
                                       hover:bg-[#F36B38]
                                       hover:border-[#F36B38]
                                       hover:text-white
                                       transition-all duration-300">

                            <svg class="w-4 h-4" fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="1.8"
                                      d="M3 3h2l2.4 12.2a2 2 0 002 1.6h8.8a2 2 0 002-1.6L22 7H6"/>
                                <circle cx="10" cy="21" r="1"/>
                                <circle cx="19" cy="21" r="1"/>
                            </svg>

                            Add to Cart
                        </button>

                    </div>

                </div>

            @endforeach

        </div>

        {{-- Mobile View All --}}
        <div class="mt-7 text-center sm:hidden">
            <a href="{{ url('/products') }}"
               class="inline-flex items-center gap-2
                      text-sm font-bold text-[#14243A]
                      hover:text-[#F36B38]">
                View All Products
                <span>&rarr;</span>
            </a>
        </div>

    </div>
</section>

@endsection
@section('content')
<section class="bg-black py-6">
    <div class="container mx-auto px-">
        <div class="flex flex-wrap justify-between items-center">
            <img src="{{ asset('assets/logo/Group.png') }}" alt="Versace" class="h-6 sm:h-8 object-contain">
            <img src="{{ asset('assets/logo/group-1.png') }}" alt="Zara" class="h-6 sm:h-8 object-contain">
            <img src="{{ asset('assets/logo/gucci-logo-1 1.png') }}" alt="Gucci" class="h-6 sm:h-8 object-contain">
            <img src="{{ asset('assets/logo/prada-logo-1 1.png') }}" alt="Prada" class="h-6 sm:h-8 object-contain">
            <img src="{{ asset('assets/logo/zara-logo-1 1.png') }}" alt="Calvin Klein" class="h-6 sm:h-8 object-contain">
        </div>
    </div>
</section>
<section class="container mx-auto pt-12 bg-white text-center">
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6 px-4">

        @foreach ($categories as $category)
        <a href="">
            <div class="relative group cursor-pointer">
                <div class="overflow-hidden rounded-2xl shadow-lg flex items-start justify-center">
                    <img src="{{ asset($category->image) }}" alt="{{ $category->name }}"
                        class="w-full h-32 object-cover opacity-70 transition-opacity duration-300 group-hover:opacity-100" />
                </div>
                <p class="mt-2 text-lg font-medium">{{ $category->name }}</p>
            </div>
        </a>
        @endforeach


    </div>
</section>
<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl sm:text-4xl font-extrabold text-center mb-10">NEW ARRIVALS</h2>
        <div class="flex flex-wrap justify-center gap-6">
            <a href="/product/tshirt-tape-details" class="block w-full sm:w-[50%] md:w-[33%] lg:w-[22%] text-center bg-[var(--secondary-1010)] rounded-md shadow-lg p-4 hover:shadow-xl transition">
                <img src="{{ asset('assets/images/products/tshirt1.png') }}" alt="T-shirt with Tape Details"
                    class="mx-auto w-full object-contain mb-3" />
                <h3 class="text-start text-2xl font-semibold">T-shirt with Tape Details</h3>
                <div class="text-yellow-400 text-sm flex justify-start gap-1 my-1">
                    ★★★★☆ <span class="text-gray-500 ml-1">(4.5)</span>
                </div>
                <p class="text-lg text-start font-bold mt-1">$120</p>
            </a>
            <a href="/product/tshirt-tape-details" class="block w-full sm:w-[50%] md:w-[33%] lg:w-[22%] text-center bg-[var(--secondary-1010)] rounded-md shadow-lg p-4 hover:shadow-xl transition">
                <img src="{{ asset('assets/images/products/jeans1.png') }}" alt="Skinny Fit Jeans"
                    class="mx-auto w-full object-contain mb-3" />
                <h3 class="text-start text-2xl font-semibold">Skinny Fit Jeans</h3>
                <div class="text-yellow-400 text-sm flex justify-start gap-1 my-1">
                    ★★★☆☆ <span class="text-gray-500 ml-1">(3.5)</span>
                </div>
                <p class="text-lg text-start font-bold text-black mt-1">
                    $240 <span class="line-through text-gray-500 ml-2">$260</span>
                    <span class="text-red-500 text-sm ml-1">-20%</span>
                </p>
            </a>
            <!-- Item 3 -->
            <a href="/product/tshirt-tape-details" class="block w-full sm:w-[50%] md:w-[33%] lg:w-[22%] text-center bg-[var(--secondary-1010)] rounded-md shadow-lg p-4 hover:shadow-xl transition">
                <img src="{{ asset('assets/images/products/shirt1.png') }}" alt="Checkered Shirt"
                    class="mx-auto w-full object-contain mb-3" />
                <h3 class="text-start text-2xl font-semibold">Checkered Shirt</h3>
                <div class="text-yellow-400 text-sm flex justify-start gap-1 my-1">
                    ★★★★☆ <span class="text-gray-500 ml-1">(4.5)</span>
                </div>
                <p class="text-lg text-start font-bold mt-1">$180</p>
            </a>
            <!-- Item 4 -->
            <a href="/product/tshirt-tape-details" class="block w-full sm:w-[50%] md:w-[33%] lg:w-[22%] text-center bg-[var(--secondary-1010)] rounded-md shadow-lg p-4 hover:shadow-xl transition">
                <img src="{{ asset('assets/images/products/tshirt2.png') }}" alt="Sleeve Striped T-shirt"
                    class="mx-auto w-full object-contain mb-3" />
                <h3 class="text-start text-2xl font-semibold">Sleeve Striped T-shirt</h3>
                <div class="text-yellow-400 text-sm flex justify-start gap-1 my-1">
                    ★★★★☆ <span class="text-gray-500 ml-1">(4.5)</span>
                </div>
                <p class="text-lg text-start font-bold text-black mt-1">
                    $130 <span class="line-through text-gray-500 ml-2">$160</span>
                    <span class="text-red-500 text-sm ml-1">-30%</span>
                </p>
            </a>
        </div>

        <!-- View All Button -->
        <div class="text-center mt-10">
            <button class="px-6 py-2 border rounded transition text-[var(--primary-600)] border-[var(--primary-600)] hover:bg-[var(--primary-600)] hover:text-white">
                View All
            </button>

        </div>
    </div>
</section>

<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl sm:text-4xl font-extrabold text-center mb-10">TOP SELLING</h2>
        <div class="flex flex-wrap justify-center gap-6">
            <a href="/product/tshirt-tape-details" class="block w-full sm:w-[50%] md:w-[33%] lg:w-[22%] text-center bg-[var(--secondary-1010)] rounded-md shadow-lg p-4 hover:shadow-xl transition">
                <img src="{{ asset('assets/images/products/tshirt1.png') }}" alt="T-shirt with Tape Details"
                    class="mx-auto w-full object-contain mb-3" />
                <h3 class="text-start text-2xl font-semibold">T-shirt with Tape Details</h3>
                <div class="text-yellow-400 text-sm flex justify-start gap-1 my-1">
                    ★★★★☆ <span class="text-gray-500 ml-1">(4.5)</span>
                </div>
                <p class="text-lg text-start font-bold mt-1">$120</p>
            </a>
            <a href="/product/tshirt-tape-details" class="block w-full sm:w-[50%] md:w-[33%] lg:w-[22%] text-center bg-[var(--secondary-1010)] rounded-md shadow-lg p-4 hover:shadow-xl transition">
                <img src="{{ asset('assets/images/products/jeans1.png') }}" alt="Skinny Fit Jeans"
                    class="mx-auto w-full object-contain mb-3" />
                <h3 class="text-start text-2xl font-semibold">Skinny Fit Jeans</h3>
                <div class="text-yellow-400 text-sm flex justify-start gap-1 my-1">
                    ★★★☆☆ <span class="text-gray-500 ml-1">(3.5)</span>
                </div>
                <p class="text-lg text-start font-bold text-black mt-1">
                    $240 <span class="line-through text-gray-500 ml-2">$260</span>
                    <span class="text-red-500 text-sm ml-1">-20%</span>
                </p>
            </a>
            <!-- Item 3 -->
            <a href="/product/tshirt-tape-details" class="block w-full sm:w-[50%] md:w-[33%] lg:w-[22%] text-center bg-[var(--secondary-1010)] rounded-md shadow-lg p-4 hover:shadow-xl transition">
                <img src="{{ asset('assets/images/products/shirt1.png') }}" alt="Checkered Shirt"
                    class="mx-auto w-full object-contain mb-3" />
                <h3 class="text-start text-2xl font-semibold">Checkered Shirt</h3>
                <div class="text-yellow-400 text-sm flex justify-start gap-1 my-1">
                    ★★★★☆ <span class="text-gray-500 ml-1">(4.5)</span>
                </div>
                <p class="text-lg text-start font-bold mt-1">$180</p>
            </a>
            <!-- Item 4 -->
            <a href="/product/tshirt-tape-details" class="block w-full sm:w-[50%] md:w-[33%] lg:w-[22%] text-center bg-[var(--secondary-1010)] rounded-md shadow-lg p-4 hover:shadow-xl transition">
                <img src="{{ asset('assets/images/products/tshirt2.png') }}" alt="Sleeve Striped T-shirt"
                    class="mx-auto w-full object-contain mb-3" />
                <h3 class="text-start text-2xl font-semibold">Sleeve Striped T-shirt</h3>
                <div class="text-yellow-400 text-sm flex justify-start gap-1 my-1">
                    ★★★★☆ <span class="text-gray-500 ml-1">(4.5)</span>
                </div>
                <p class="text-lg text-start font-bold text-black mt-1">
                    $130 <span class="line-through text-gray-500 ml-2">$160</span>
                    <span class="text-red-500 text-sm ml-1">-30%</span>
                </p>
            </a>
        </div>

        <!-- View All Button -->
        <div class="text-center mt-10">
            <button class="px-6 py-2 border rounded transition text-[var(--primary-600)] border-[var(--primary-600)] hover:bg-[var(--primary-600)] hover:text-white">
                View All
            </button>

        </div>
    </div>
</section>

<section class="bg-gray-100 py-12 px-4 rounded-3xl">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-2xl sm:text-4xl font-extrabold text-center mb-10">BROWSE BY DRESS STYLE</h2>

        <div class="grid grid-cols-5 gap-4">
            <!-- Casual -->
            <a href="#" class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition duration-300 col-span-2">
                <div class="relative">
                    <img src="{{asset('assets/images/products/casual.webp')}}" alt="Casual" class="w-full h-100 object-cover" />
                    <span class="absolute top-3 left-3 text-xl font-semibold text-black bg-white/90 px-3 py-1 rounded ">
                        Casual
                    </span>
                </div>
            </a>

            <!-- Formal -->
            <a href="#" class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition duration-300 col-span-3">
                <div class="relative">
                    <img src="{{asset('assets/images/products/formal.webp')}}" alt="Formal" class="w-full h-100 object-cover" />
                    <span class="absolute top-3 left-3 text-xl font-semibold text-black bg-white/90 px-3 py-1 rounded">
                        Formal
                    </span>
                </div>
            </a>

            <!-- Party -->
            <a href="#" class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition duration-300 col-span-3">
                <div class="relative">
                    <img src="{{asset('assets/images/products/party.webp')}}" alt="Party" class="w-full h-100 object-cover" />
                    <span class="absolute top-3 left-3 text-xl font-semibold text-black bg-white/90 px-3 py-1 rounded">
                        Party
                    </span>
                </div>
            </a>

            <!-- Gym -->
            <a href="#" class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition duration-300 col-span-2">
                <div class="relative">
                    <img src="{{asset('assets/images/products/gym.webp')}}" alt="Gym" class="w-full h-100 object-cover" />
                    <span class="absolute top-3 left-3 text-xl font-semibold text-black bg-white/90 px-3 py-1 rounded">
                        Gym
                    </span>
                </div>
            </a>
        </div>
    </div>
</section>

<section class="bg-white py-12 px-4">
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-between items-center mb-0 px-8">
            <h2 class="text-3xl font-extrabold mb-0 text-black">OUR HAPPY CUSTOMERS</h2>
            <div class="flex items-center gap-0">
                <button class="prev-slide w-10 sm:w-12 h-10 sm:h-12 flex items-center justify-center rounded-full text-primary-700">
                    <x-heroicon-c-arrow-left class="w-5 sm:w-6 h-5 sm:h-6" />
                </button>
                <button class="next-slide w-10 sm:w-12 h-10 sm:h-12 flex items-center justify-center rounded-full text-primary-700">
                    <x-heroicon-c-arrow-right class="w-5 sm:w-6 h-5 sm:h-6" />
                </button>

            </div>
        </div>

        <div class="autoplay" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows": true, "dots": true}'>
            @foreach ([1,2,3,4,5] as $i)
            <div class="px-6 my-4">
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center space-x-2 mb-2">
                        @for ($s = 0; $s < 5; $s++)
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.082 3.323a1 1 0 00.95.69h3.495c.969 0 1.371 1.24.588 1.81l-2.83 2.057a1 1 0 00-.364 1.118l1.082 3.323c.3.921-.755 1.688-1.54 1.118L10 13.348l-2.83 2.057c-.784.57-1.838-.197-1.539-1.118l1.082-3.323a1 1 0 00-.364-1.118L3.52 8.75c-.783-.57-.38-1.81.588-1.81h3.495a1 1 0 00.95-.69l1.082-3.323z" />
                            </svg>
                            @endfor
                    </div>
                    <h3 class="font-bold text-gray-800 mb-1 flex gap-2 items-center">Customer Name {{ $i }}
                        <div><x-codicon-verified-filled class="text-green-500 text-sm font-semibold w-4" /></div>
                    </h3>
                    <p class="text-gray-600 text-sm mb-2">"Lorem ipsum dolor sit amet, lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci fuga, ducimus, exercitationem voluptatibus officiis temporibus fugiat nam repellendus neque reprehenderit."</p>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

@section('javascript')
<script type="module">
    const slides = document.querySelectorAll('.slide');
    let current = 0;

    const updateSlides = () => {
        slides.forEach((slide, index) => {
            slide.classList.remove('opacity-100', 'z-10');
            slide.classList.add('opacity-0', 'z-0');
            if (index === current) {
                slide.classList.add('opacity-100', 'z-10');
            }
        });
    };

    document.querySelector('.next-slide').addEventListener('click', () => {
        current = (current + 1) % slides.length;
        updateSlides();
    });

    document.querySelector('.prev-slide').addEventListener('click', () => {
        current = (current - 1 + slides.length) % slides.length;
        updateSlides();
    });

    $(document).ready(function() {
        $('.autoplay').slick({
            dots: false,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: true,
            prevArrow: $('.prev-slide'),
            nextArrow: $('.next-slide'),
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    });
</script>

@endsection

@section('trending-slider-js')
<script>
     $(document).ready(function () {

        $('#trending-slick-slider').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            infinite: true,
            speed: 600,
            arrows: true,
            dots: false,
            autoplay: false,
            pauseOnHover: true,
            adaptiveHeight: false,

            prevArrow: $('#trending-prev'),
            nextArrow: $('#trending-next'),

            responsive: [
                {
                    breakpoint: 1280,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

    });
</script>
@endsection