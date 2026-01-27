@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="relative bg-brand-light overflow-hidden">
    <div class="max-w-7xl mx-auto">
        <div class="relative z-10 pb-8 bg-brand-light sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
            <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-brand-light transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                <polygon points="50,0 100,0 50,100 0,100" />
            </svg>

            <div class="relative pt-6 px-4 sm:px-6 lg:px-8"></div>

            <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                <div class="sm:text-center lg:text-left fade-in">
                    <h1 class="text-4xl tracking-tight font-serif font-bold text-gray-900 sm:text-5xl md:text-6xl">
                        <span class="block xl:inline">Enhance your natural</span>
                        <span class="block text-brand-gold xl:inline">Radiance & Beauty</span>
                    </h1>
                    <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                        Discover our exclusive collection of face and hair care products, crafted with the finest natural ingredients to reveal your inner glow.
                    </p>
                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-md shadow">
                            <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-brand-dark hover:bg-gray-800 md:py-4 md:text-lg md:px-10 transition duration-300">
                                Shop Collection
                            </a>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                            <a href="{{ url('/about') }}" class="w-full flex items-center justify-center px-8 py-3 border border-brand-dark text-base font-medium rounded-md text-brand-dark bg-transparent hover:bg-gray-50 md:py-4 md:text-lg md:px-10 transition duration-300">
                                Our Story
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- Hero Image Placeholder -->
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1596462502278-27bfdd403348?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80" alt="Woman applying cream">
    </div>
</div>

<!-- Features Section -->
<div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-base text-brand-gold font-semibold tracking-wide uppercase">Why Choose Us</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl font-serif">
                Pure, Natural, Effective
            </p>
            <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">
                We believe in the power of nature to heal and rejuvenate.
            </p>
        </div>

        <div class="mt-10">
            <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                <!-- Feature 1 -->
                <div class="relative">
                    <dt>
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-brand-dark text-white">
                            <!-- Heroicon name: outline/sparkles -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Natural Ingredients</p>
                    </dt>
                    <dd class="mt-2 ml-16 text-base text-gray-500">
                        Our products are free from harmful chemicals and paraben. We use only organic, sustainably sourced ingredients.
                    </dd>
                </div>

                <!-- Feature 2 -->
                <div class="relative">
                    <dt>
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-brand-dark text-white">
                            <!-- Heroicon name: outline/heart -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Cruelty Free</p>
                    </dt>
                    <dd class="mt-2 ml-16 text-base text-gray-500">
                        We love animals as much as you do. None of our products are tested on animals.
                    </dd>
                </div>

                <!-- Feature 3 -->
                <div class="relative">
                    <dt>
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-brand-dark text-white">
                            <!-- Heroicon name: outline/sun -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Radiant Skin</p>
                    </dt>
                    <dd class="mt-2 ml-16 text-base text-gray-500">
                        Formulated to bring out your natural glow and maintain healthy, hydrated skin all day long.
                    </dd>
                </div>

                <!-- Feature 4 -->
                <div class="relative">
                    <dt>
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-brand-dark text-white">
                            <!-- Heroicon name: outline/check-circle -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Dermatologically Tested</p>
                    </dt>
                    <dd class="mt-2 ml-16 text-base text-gray-500">
                        Safe for all skin types. Our products are rigorously tested to ensure safety and efficacy.
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="bg-brand-accent/30">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
            <span class="block font-serif">Ready to transform your routine?</span>
            <span class="block text-brand-gold mt-1">Get 20% off your first order.</span>
        </h2>
        <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
            <div class="inline-flex rounded-md shadow">
                <a href="{{ url('/contact') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-brand-gold hover:bg-yellow-600 transition duration-300">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
