<x-frontend-layout :pageTitle="'Home'">

    <section class="pt-2 pb-12  bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div id="controls-carousel" class="relative w-full h-96 lg:h-[600px]" data-carousel="slide">

                <!-- Carousel wrapper -->
                <div class="relative h-full overflow-hidden rounded-lg">

                    @foreach ($carousels as $carousel)
                        <div class="hidden duration-700 ease-in-out"
                            data-carousel-item="{{ $loop->iteration == 1 ? 'active' : '' }}">
                            <img src="{{ Storage::url($carousel->image) }}" alt="{{ $carousel->title }}"
                                class="absolute w-full h-full object-cover rounded-lg" />
                            <div
                                class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-center px-4">
                                <h2 class="text-white text-2xl sm:text-4xl lg:text-5xl font-bold mb-4">
                                    {{ $carousel->title }}
                                </h2>
                                <p class="text-white text-base sm:text-lg lg:text-xl mb-6">
                                    {{ $carousel->description }}
                                </p>
                                <div class="space-x-2 sm:space-x-4">
                                    <a href="#"
                                        class="bg-primary hover:bg-hover-primary text-white px-4 sm:px-5 py-2 rounded-md text-sm sm:text-base font-medium">
                                        Shop Now
                                    </a>
                                    <a href="#"
                                        class="bg-white text-primary px-4 sm:px-5 py-2 rounded-md text-sm sm:text-base font-medium">
                                        Request Repair
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50">
                        <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50">
                        <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                    </span>
                </button>

                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    @foreach ($carousels as $carousel)
                        <button type="button" class="w-3 h-3 rounded-full bg-white/50"
                            aria-current="{{ $loop->iteration == 1 ? 'true' : 'false' }}"
                            aria-label="{{ $carousel->title }}" data-carousel-slide-to="0"></button>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="my-16 py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-12">
                <div class="flex items-center justify-center space-x-2">
                    <span class="bg-primary h-1 w-5 mb-4"></span>
                    <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Our Services</h2>
                </div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    We offer comprehensive solutions for all your kitchen equipment needs - from buying and selling to
                    expert repair services.
                </p>
            </div>

            <!-- Service Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div
                    class="bg-white rounded-lg cursor-pointer shadow-md overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="h-48 bg-primary flex items-center justify-center">
                        <img src="assets/icon/shop.svg" alt="" class="h-20 w-20">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Buy Equipment</h3>
                        <p class="text-gray-600 mb-4">
                            Browse our extensive collection of high-quality new and refurbished kitchen equipment at
                            competitive prices.
                        </p>
                        <a href="#"
                            class="inline-flex items-center text-primary hover:text-hover-primary font-medium">
                            View Products
                            <img src="assets/icon/arrow-right.svg" alt="" class="h-5 w-5 ml-1">
                        </a>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div
                    class="bg-white rounded-lg cursor-pointer shadow-md overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="h-48 bg-primary flex items-center justify-center">
                        <img src="assets/icon/repair.svg" alt="" class="h-20 w-20">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Repair Services</h3>
                        <p class="text-gray-600 mb-4">
                            Expert repair and maintenance services for all types of commercial kitchen equipment with
                            quick turnaround times.
                        </p>
                        <a href="#"
                            class="inline-flex items-center text-primary hover:text-hover-primary font-medium">
                            Request Repair
                            <img src="assets/icon/arrow-right.svg" alt="" class="h-5 w-5 ml-1">
                        </a>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div
                    class="bg-white rounded-lg cursor-pointer shadow-md overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="h-48 bg-primary flex items-center justify-center">
                        <img src="assets/icon/debit-card.svg" alt="" class="h-20 w-20">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Sell Equipment</h3>
                        <p class="text-gray-600 mb-4">
                            Turn your unused kitchen equipment into cash. We offer fair prices and hassle-free selling
                            process.
                        </p>
                        <a href="#"
                            class="inline-flex items-center text-primary hover:text-hover-primary font-medium">
                            Sell Now
                            <img src="assets/icon/arrow-right.svg" alt="" class="h-5 w-5 ml-1">
                        </a>
                    </div>
                </div>

                <!-- Service Card 4 -->
                <div
                    class="bg-white rounded-lg cursor-pointer shadow-md overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="h-48 bg-primary flex items-center justify-center">
                        <img src="assets/icon/clock.svg" alt="" class="h-20 w-20">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Scheduled Maintenance</h3>
                        <p class="text-gray-600 mb-4">
                            Regular maintenance programs to keep your kitchen equipment running efficiently and prevent
                            costly breakdowns.
                        </p>
                        <a href="#"
                            class="inline-flex items-center text-primary hover:text-hover-primary font-medium">
                            Schedule Service
                            <img src="assets/icon/arrow-right.svg" alt="" class="h-5 w-5 ml-1">
                        </a>
                    </div>
                </div>

                <!-- Service Card 5 -->
                <div
                    class="bg-white rounded-lg cursor-pointer shadow-md overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="h-48 bg-primary flex items-center justify-center">
                        <img src="assets/icon/i-icon.svg" alt="" class="h-20 w-20">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Technical Consultation</h3>
                        <p class="text-gray-600 mb-4">
                            Expert advice on selecting the right equipment for your commercial kitchen needs and budget.
                        </p>
                        <a href="#"
                            class="inline-flex items-center text-primary hover:text-hover-primary font-medium">
                            Get Advice
                            <img src="assets/icon/arrow-right.svg" alt="" class="h-5 w-5 ml-1">
                        </a>
                    </div>
                </div>

                <!-- Service Card 6 -->
                <div
                    class="bg-white rounded-lg cursor-pointer shadow-md overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="h-48 bg-primary flex items-center justify-center">
                        <img src="assets/icon/user-group.svg" alt="" class="h-20 w-20">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Parts Supply</h3>
                        <p class="text-gray-600 mb-4">
                            Genuine replacement parts for all major brands of commercial kitchen equipment with fast
                            delivery.
                        </p>
                        <a href="#"
                            class="inline-flex items-center text-primary hover:text-hover-primary font-medium">
                            Browse Parts
                            <img src="assets/icon/arrow-right.svg" alt="" class="h-5 w-5 ml-1">
                        </a>
                    </div>
                </div>
            </div>

            <!-- CTA Button -->
            <!-- <div class="text-center mt-12">
                <a href="#" class="inline-block bg-primary hover:bg-hover-primary text-white px-6 py-3 rounded-md text-lg font-medium transition duration-300">
                    View All Services
                </a>
            </div> -->
        </div>
    </section>

    <section class="my-16 py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Heading -->
            <div class="text-center mb-12">
                <div class="flex items-center justify-center space-x-2">
                    <span class="bg-primary h-1 w-5 mb-4"></span>
                    <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Our Service Areas</h2>
                </div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    We provide our kitchen equipment services across major cities and surrounding areas to ensure you
                    get professional support wherever you are.
                </p>
            </div>

            <div class="flex flex-col lg:flex-row gap-8 items-start">

                <!-- Service areas list -->
                <div class="w-full">
                    <div class="bg-gray-50 rounded-lg shadow-md p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Regions We Cover</h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                            @foreach ($serviceAreas as $serviceArea)
                                <div
                                    class="bg-white p-4 rounded-md shadow-sm hover:shadow-md transition-shadow duration-300">
                                    <div class="flex items-start">
                                        <div class="bg-primary rounded-full p-2 mr-3 mt-1">
                                            <img src="assets/icon/location.svg" alt="" class="h-6 w-6">
                                        </div>
                                        <div>
                                            <h4 class="text-lg font-semibold text-gray-900">{{ $serviceArea->name }}
                                            </h4>
                                            <p class="text-gray-600 mt-1">{{ $serviceArea->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <!-- Additional area info -->
                        <div class="mt-6 bg-white p-4 rounded-md shadow-sm">
                            <h4 class="text-lg font-semibold text-gray-900 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Not in our standard service area?
                            </h4>
                            <p class="text-gray-600 mt-2">
                                We may still be able to accommodate your needs. Contact us for special arrangements or
                                to discuss options for extended service areas.
                            </p>
                            <a href="#"
                                class="inline-flex items-center text-primary hover:text-hover-primary font-medium mt-3">
                                Contact for service inquiry
                                <img src="assets/icon/arrow-right.svg" alt="" class="h-5 w-5 ml-1">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="my-16 py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Heading -->
            <div class="text-center mb-12">
                <div class="flex items-center justify-center space-x-2">
                    <span class="bg-primary h-1 w-5 mb-4"></span>
                    <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Our Trusted Clients</h2>
                </div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    We're proud to work with these amazing businesses to provide top-quality kitchen equipment services.
                </p>
            </div>

            <!-- Logo Carousel -->
            <div class="relative overflow-hidden">
                <!-- First row of logos -->
                <div class="logo-slide-track flex items-center gap-16 py-8" id="track1">
                    @for ($i = 0; $i < 20; $i++)
                        @foreach ($ourClients as $ourClient)
                            <div class="logo-slide w-32 h-16 flex items-center justify-center">
                                <img src="{{ Storage::url($ourClient->image) }}" alt="{{ $ourClient->name }}"
                                    class="max-h-full max-w-full object-contain">
                            </div>
                        @endforeach
                    @endfor

                </div>

                <!-- Second row of logos moving in opposite direction -->
                <div class="logo-slide-track flex items-center gap-16 py-8" id="track2">
                    @for ($i = 0; $i < 20; $i++)
                        @foreach ($ourClients as $ourClient)
                            <div class="logo-slide w-32 h-16 flex items-center justify-center">
                                <img src="{{ Storage::url($ourClient->image) }}" alt="{{ $ourClient->name }}"
                                    class="max-h-full max-w-full object-contain">
                            </div>
                        @endforeach
                    @endfor
                </div>
            </div>

            <!-- Trust badge -->
            <div class="mt-12 text-center">
                <span
                    class="inline-flex items-center px-4 py-2 rounded-full bg-gray-50 text-gray-700 text-sm font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Trusted by businesses across the country
                </span>
            </div>
        </div>
    </section>

    <section class="mt-16 py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="flex items-center justify-center space-x-2">
                    <span class="bg-primary h-1 w-5 mb-4"></span>
                    <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">What Our Clients Say</h2>
                </div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Discover why restaurants and commercial kitchens trust us with their equipment maintenance and
                    repair needs.
                </p>
            </div>

            <div class="relative mt-8">

                <!-- Swiper Container -->
                <div class="swiper mySwiper py-4 px-3">
                    <div class="swiper-wrapper">
                        @foreach ($testimonials as $testimonial)
                            @php
                                $rating = (float) $testimonial->rating;
                                $fullStars = floor($rating);
                                $hasHalfStar = $rating - $fullStars === 0.5;
                                $emptyStars = 5 - $fullStars - ($hasHalfStar ? 1 : 0);
                            @endphp
                            <div
                                class="swiper-slide bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                                <div class="flex items-center mb-4">
                                    <div class="bg-primary rounded-full p-1 mr-3">
                                        <img src="{{ Storage::url($testimonial->image) }}" alt="Client"
                                            class="h-12 w-12 rounded-full object-cover">
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold text-gray-900">{{ $testimonial->name }}
                                        </h4>
                                        <p class="text-gray-600">{{ $testimonial->position }},
                                            {{ $testimonial->company_name }}</p>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="flex text-yellow-400">
                                        @for ($i = 0; $i < $fullStars; $i++)
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        @endfor
                                        @if ($hasHalfStar)
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                                <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327
                                        4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83
                                        4.73c.078.443-.36.79-.746.592L8 13.187l-4.389
                                        2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173
                                        6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1
                                        .085-.302.51.51 0 0 1 .37-.245zM8
                                        12.027a.5.5 0 0 1 .232.056l3.686
                                        1.894-.694-3.957a.56.56 0 0 1
                                        .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001
                                        2.223 8 2.226z" />
                                            </svg>
                                        @endif
                                    </div>
                                </div>
                                <blockquote class="text-gray-600 italic mb-4">
                                    {!! $testimonial->message !!}
                                </blockquote>
                                <div class="border-t border-gray-100 pt-4 mt-4">
                                    <p class="text-sm text-gray-500">Service: <span
                                            class="font-medium">{{ $testimonial->service }}</span></p>
                                    <p class="text-sm text-gray-500">Location: <span
                                            class="font-medium">{{ $testimonial->service_location }}</span>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </section>

</x-frontend-layout>
