<x-frontend-layout :pageTitle="'About Us'">

    <!-- Hero Section -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">About {{ $businessDetail->name }}</h1>
                    <p class="text-lg text-gray-600 mb-6">
                        {!! $businessDetail->company_description !!}
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('product') }}"
                            class="bg-primary hover:bg-hover-primary text-white py-3 px-6 rounded-md font-medium transition-colors duration-300">
                            Browse Equipment
                        </a>
                        <a href="{{ route('contact') }}"
                            class="border border-primary text-primary hover:bg-gray-50 py-3 px-6 rounded-md font-medium transition-colors duration-300">
                            Contact Us
                        </a>
                    </div>
                </div>
                <div class="rounded-lg overflow-hidden shadow-xl">
                    <img src="{{ Storage::url($businessDetail->thumbnail_image) }}" alt="Our Showroom"
                        class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="bg-white py-16 my-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="flex items-center justify-center space-x-2">
                    <span class="bg-primary h-1 w-5 mb-4"></span>
                    <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Our Story</h2>
                </div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    From humble beginnings to becoming a trusted name in the industry
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                <div
                    class="bg-white p-6 rounded-lg shadow-md transition-transform duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="bg-primary rounded-full p-3 w-14 h-14 flex items-center justify-center mb-4">
                        <span class="text-white font-bold text-xl">1</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Founded in 2010</h3>
                    <p class="text-gray-600">
                        Started as a small repair shop for restaurant equipment, focusing on quality service and
                        building relationships with local businesses.
                    </p>
                </div>

                <div
                    class="bg-white p-6 rounded-lg shadow-md transition-transform duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="bg-primary rounded-full p-3 w-14 h-14 flex items-center justify-center mb-4">
                        <span class="text-white font-bold text-xl">2</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Expanded in 2015</h3>
                    <p class="text-gray-600">
                        Added buying and selling pre-owned equipment to our services, helping businesses access quality
                        gear at affordable prices.
                    </p>
                </div>

                <div
                    class="bg-white p-6 rounded-lg shadow-md transition-transform duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="bg-primary rounded-full p-3 w-14 h-14 flex items-center justify-center mb-4">
                        <span class="text-white font-bold text-xl">3</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Today</h3>
                    <p class="text-gray-600">
                        Now a full-service operation with a large showroom, repair facility, and nationwide delivery
                        options for quality second-hand kitchen equipment.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="bg-white py-16 my-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="flex items-center justify-center space-x-2">
                    <span class="bg-primary h-1 w-5 mb-4"></span>
                    <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Our Service</h2>
                </div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Complete solutions for all your commercial kitchen equipment needs
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
                <div
                    class="bg-white border border-gray-100 rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="h-48 bg-gray-200 relative">
                        <div class="absolute inset-0 bg-primary bg-opacity-50 flex items-center justify-center">
                            <img src="assets/icon/shop.svg" alt="" class="h-20 w-20">
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Buy Equipment</h3>
                        <p class="text-gray-600 mb-4">
                            Browse our extensive selection of quality second-hand commercial kitchen equipment,
                            thoroughly tested and refurbished to ensure reliability.
                        </p>
                        <a href="{{ route('product') }}"
                            class="inline-block bg-primary hover:bg-hover-primary text-white py-2 px-4 rounded-md font-medium transition-colors duration-300">
                            View Products
                        </a>
                    </div>
                </div>

                <div
                    class="bg-white border border-gray-100 rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="h-48 bg-gray-200 relative">
                        <div class="absolute inset-0 bg-primary bg-opacity-50 flex items-center justify-center">
                            <img src="assets/icon/dollor.svg" alt="" class="h-20 w-20">
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Sell Equipment</h3>
                        <p class="text-gray-600 mb-4">
                            Get fair value for your used kitchen equipment. We purchase individual pieces or handle
                            complete restaurant liquidations.
                        </p>
                        <a href="{{ route('sell-equipment') }}"
                            class="inline-block bg-primary hover:bg-hover-primary text-white py-2 px-4 rounded-md font-medium transition-colors duration-300">
                            Sell Your Equipment
                        </a>
                    </div>
                </div>

                <div
                    class="bg-white border border-gray-100 rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="h-48 bg-gray-200 relative">
                        <div class="absolute inset-0 bg-primary bg-opacity-50 flex items-center justify-center">
                            <img src="assets/icon/setting.svg" alt="" class="h-20 w-20">
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Repair Services</h3>
                        <p class="text-gray-600 mb-4">
                            Our skilled technicians provide reliable repairs and maintenance for all types of commercial
                            kitchen equipment.
                        </p>
                        <a href="{{ route('contact') }}"
                            class="inline-block bg-primary hover:bg-hover-primary text-white py-2 px-4 rounded-md font-medium transition-colors duration-300">
                            Request Service
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="bg-white py-16 mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="flex items-center justify-center space-x-2">
                    <span class="bg-primary h-1 w-5 mb-4"></span>
                    <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Meet Our Team</h2>
                </div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Experienced professionals dedicated to providing excellent service
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-12">

                @foreach ($teams as $team)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ Storage::url($team->image) }}" alt="Team Member" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-1">{{ $team->name }}</h3>
                            <p class="text-primary font-medium mb-3">{{ $team->position }}</p>
                            <p class="text-gray-600 mb-4">{!! $team->description !!}</p>
                            <div class="flex space-x-3">
                                <a href="{{ $team->facebook }}"
                                    class="bg-primary rounded-full p-2 hover:bg-hover-primary transition-colors duration-300">
                                    <img src="assets/icon/facebook.svg" alt="Facebook" class="h-5 w-5">
                                </a>
                                <a href="mailto:{{ $team->email }}"
                                    class="bg-primary rounded-full p-2 hover:bg-hover-primary transition-colors duration-300">
                                    <img src="assets/icon/mail.svg" alt="email" class="h-5 w-5">
                                </a>
                                <a href="tel:{{ $team->phone }}"
                                    class="bg-primary rounded-full p-2 hover:bg-hover-primary transition-colors duration-300">
                                    <img src="assets/icon/phone.svg" alt="phone" class="h-5 w-5">
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

</x-frontend-layout>
