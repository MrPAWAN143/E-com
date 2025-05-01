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
            style="background-image: url('{{ asset('assets/images/banner1.webp') }}')">
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
            style="background-image: url('{{ asset('assets/images/banner3.webp') }}')">
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
<h1 class="bg-[var(--tertiary-300)] font-bold p-4">Content </h1><x-bi-megaphone-fill />

@endsection




@section('javascript')
<script>
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
</script>

@endsection