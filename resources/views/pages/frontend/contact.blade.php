<x-frontend-layout :pageTitle="'Contact Us'">
    <!-- Hero Section -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">

                <div class="flex items-center justify-center space-x-2">
                    <span class="bg-primary h-1 w-5 mb-4"></span>
                    <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Contact Us</h2>
                </div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Have questions about our second-hand kitchen equipment? Need repairs or want to sell your used
                    equipment? We're here to help!
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="py-16 bg-white my-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Details -->
                <div class="bg-gray-50 rounded-lg p-8 shadow-sm">
                    <h2 class="text-2xl font-bold text-primary mb-6">Get In Touch</h2>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-primary rounded-full p-3 mr-4">
                                <img src="assets/icon/location.svg" alt="" class="h-6 w-6 text-white">
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">Our Location</h3>
                                <p class="text-gray-600">{{ $businessDetail->address }}</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-primary rounded-full p-3 mr-4">
                                <img src="assets/icon/phone.svg" alt="" class="h-6 w-6 text-white">
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">Phone Number</h3>
                                <p class="text-gray-600">{{ $businessDetail->phone }}</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-primary rounded-full p-3 mr-4">
                                <img src="assets/icon/mail.svg" alt="" class="h-6 w-6 text-white">
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">Email Address</h3>
                                <p class="text-gray-600">{{ $businessDetail->email }}</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-primary rounded-full p-3 mr-4">
                                <img src="assets/icon/clock.svg" alt="" class="h-6 w-6 text-white">
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">Business Hours</h3>
                                <p class="text-gray-600">{{ $businessDetail->working_hours }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h3 class="text-lg font-semibold text-primary mb-4">Connect With Us</h3>
                        <div class="flex space-x-4">
                            <a href="{{ $businessDetail->facebook }}" target="_blank"
                                class="bg-primary rounded-full p-3 hover:bg-hover-primary transition-colors duration-300">
                                <img src="assets/icon/facebook.svg" alt="Facebook" class="h-6 w-6">
                            </a>
                            <a href="{{ $businessDetail->instagram }}" target="_blank"
                                class="bg-primary rounded-full p-3 hover:bg-hover-primary transition-colors duration-300">
                                <img src="assets/icon/instagram.svg" alt="Instagram" class="h-6 w-6">
                            </a>
                            <a href="{{ $businessDetail->youtube }}" target="_blank"
                                class="bg-primary rounded-full p-3 hover:bg-hover-primary transition-colors duration-300">
                                <img src="assets/icon/youtube.svg" alt="YouTube" class="h-6 w-6">
                            </a>
                            <a href="{{ $businessDetail->tiktok }}" target="_blank"
                                class="bg-primary rounded-full p-3 hover:bg-hover-primary transition-colors duration-300">
                                <img src="assets/icon/tiktok.svg" alt="TikTok" class="h-6 w-6">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white rounded-lg p-8 shadow-sm border border-gray-200">
                    <h2 class="text-2xl font-bold text-primary mb-6">Send Us A Message</h2>

                    <form class="space-y-6" action="{{ route('inquiry.store') }}" method="POST">
                        @method('POST')
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your
                                    Name <span class="text-red-500">*</span></label>
                                <input type="text" id="name" name="name"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary focus:border-primary">
                                @error('name')
                                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email
                                    Address <span class="text-red-500">*</span></label>
                                <input type="email" id="email" name="email"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary focus:border-primary">
                                @error('email')
                                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone
                                Number <span class="text-red-500">*</span></label>
                            <input type="tel" id="phone" name="phone"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary focus:border-primary">
                            @error('phone')
                                <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject <span
                                    class="text-red-500">*</span></label>
                            <select id="subject" name="subject"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary focus:border-primary">
                                <option value="" selected disabled>Select a subject</option>
                                <option value="purchase">Purchase Equipment</option>
                                <option value="sell">Sell Equipment</option>
                                <option value="repair">Repair Services</option>
                                <option value="consultation">Equipment Consultation</option>
                                <option value="other">Other</option>
                            </select>
                            @error('subject')
                                <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message <span
                                    class="text-red-500">*</span></label>
                            <textarea id="message" name="message" rows="5"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary focus:border-primary"></textarea>
                            @error('message')
                                <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <button type="submit"
                                class="w-full bg-primary hover:bg-hover-primary text-white font-medium py-3 px-6 rounded-md transition-colors duration-300">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Visit Our Showroom</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Come and explore our extensive collection of quality second-hand kitchen equipment
                </p>
            </div>

            <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                <!-- Map placeholder - in a real implementation, this would be replaced with an actual map -->
                <div class="bg-gray-200 w-full flex items-center justify-center">
                    <iframe src="{!! $businessDetail->map_iframe !!}" width="1250" height="600" style="border:0;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Find answers to common questions about our services and equipment
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                @foreach ($faqs as $faq)
                    <div class="bg-gray-50 rounded-lg p-6 shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">{{ $faq->question }}</h3>
                        <p class="text-gray-600">{!! $faq->answer !!}</p>
                    </div>
                @endforeach

            </div>

        </div>
    </section>
</x-frontend-layout>
