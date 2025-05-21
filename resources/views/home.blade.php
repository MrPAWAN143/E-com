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
            style="background-image: url({{ asset('assets/images/banner1.webp') }})">
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
            style="background-image: url('{{ asset('assets/images/banner2.webp') }}')">
            <div class="w-full h-full flex justify-end items-center bg-[var(--primary-700)]/60 px-4 sm:px-6 md:px-12 lg:px-[10%]">
                <div class="max-w-2xl text-[var(--secondary-100)] text-center md:text-right   mx-auto md:mx-0">
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
            style="background-image: url({{ asset('assets/images/banner3.webp')}})">
            <div class="w-full h-full flex justify-end items-center bg-[var(--primary-700)]/60 px-4 sm:px-6 md:px-12 lg:px-[10%]">
                <div class="max-w-2xl text-[var(--secondary-100)] text-center md:text-right mx-auto md:mx-0">
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