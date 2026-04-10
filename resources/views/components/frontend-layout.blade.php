@props(['pageTitle'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEM Kitchen Equipment - {{ $pageTitle }}</title>

    <meta name="description"
        content="SEM Kitchen Equipment offers high-quality commercial kitchen solutions, including ovens, refrigerators, and custom fabrication.">
    <meta name="keywords"
        content="kitchen equipment, commercial kitchen, SEM kitchen, food service equipment, restaurant equipment">
    <meta name="author" content="SEM Kitchen Equipment">
    <link rel="canonical" href="https://example.com/post/post-title">
    <meta name="robots" content="index, follow">

    <meta property="og:title" content="SEM Kitchen Equipment - Home">
    <meta property="og:description"
        content="Explore premium kitchen equipment solutions tailored for restaurants and commercial kitchens.">
    <meta property="og:image" content="https://example.com/images/og-image.jpg">
    <meta property="og:url" content="https://example.com/post/post-title">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="SEM Kitchen Equipment - Home">
    <meta name="twitter:description"
        content="Explore premium kitchen equipment solutions tailored for restaurants and commercial kitchens.">
    <meta name="twitter:image" content="https://example.com/images/og-image.jpg">

    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <script src="/assets/js/tailwind.js"></script>
    <link rel="stylesheet" href="/assets/css/swiper.css">
    <link rel="stylesheet" href="/assets/css/style.css">

    <style>
        .custom-toast .toast-close {
            opacity: 0.7;
            padding: 0 8px;
        }

        .custom-toast .toast-close:hover {
            opacity: 1;
        }
    </style>
</head>


<body>

    <nav class="bg-primary shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto p-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 py-4">
                <!-- Logo and Brand Name -->
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <a href="{{ route('home') }}" class="text-white font-bold text-2xl flex items-center">
                            <img src="{{ $businessDetail ? Storage::url($businessDetail->logo_white) : '' }}"
                                alt="Logo" class="h-10">
                        </a>
                    </div>

                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="{{ route('home') }}"
                                class="text-gray-100 hover:border-b hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300 {{ Request::routeIs('home') ? 'border-b' : '' }}">Home</a>

                            <a href="{{ route('product') }}"
                                class="text-gray-100 hover:border-b hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300 {{ Request::routeIs('product') || Request::routeIs('single-product') || Request::routeIs('category-wise-product') ? 'border-b' : '' }}">Buy
                                Equipment</a>
                            <a href="{{ route('sell-equipment') }}"
                                class="text-gray-100 hover:border-b hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300 {{ Request::routeIs('sell-equipment') ? 'border-b' : '' }}">Sell
                                Equipment</a>

                            <a href="{{ route('about') }}"
                                class="text-gray-100 hover:border-b hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300 {{ Request::routeIs('about') ? 'border-b' : '' }}">About
                                Us</a>
                            <a href="{{ route('contact') }}"
                                class="text-gray-100 hover:border-b hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300 {{ Request::routeIs('contact') ? 'border-b' : '' }}">Contact
                                Us</a>

                        </div>
                    </div>
                </div>

                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <a href="/admin" target="_blank">
                            <button
                                class="bg-white text-primary hover:bg-gray-200 px-4 py-2 rounded-md text-sm font-medium transition duration-300">
                                Login
                            </button>
                        </a>
                    </div>
                </div>

                <div class="flex md:hidden">
                    <button class="text-white font-medium rounded-lg text-sm px-5 py-2.5 mb-2" type="button"
                        data-drawer-target="drawer" data-drawer-show="drawer" data-drawer-placement="right"
                        aria-controls="drawer">
                        <img src="/assets/icon/hamburger.svg" alt="" class="h-12 w-12">
                    </button>
                </div>

            </div>
        </div>

        <div id="drawer"
            class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80"
            tabindex="-1" aria-labelledby="drawer-right-label">
            <h5 id="drawer-right-label" class="inline-flex items-center mb-4 text-lg font-semibold text-primary">
                Menu
            </h5>
            <button type="button" data-drawer-hide="drawer" aria-controls="drawer"
                class="bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center">
                <img src="/assets/icon/close.svg" alt="" class="h-10 w-10">
                <span class="sr-only">Close menu</span>
            </button>
            <div class="flex flex-col mt-4 space-y-2">
                <a href="{{ route('home') }}"
                    class="text-primary hover:border-b hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ Request::routeIs('home') ? 'border-b border-primary' : '' }}">
                    Home
                </a>
                <a href="{{ route('product') }}"
                    class="text-primary px-3 py-2 rounded-md text-sm font-medium
                    {{ Request::routeIs('product') || Request::routeIs('single-product') || Request::routeIs('category-wise-product') ? 'border-b border-primary' : '' }}">
                    Buy Equipment
                </a>

                <a href="{{ route('sell-equipment') }}"
                    class="text-primary px-3 py-2 rounded-md text-sm font-medium border-primary {{ Request::routeIs('sell-equipment') ? 'border-b border-primary' : '' }}   ">Sell
                    Equipment</a>

                <a href="{{ route('about') }}"
                    class="text-primary px-3 py-2 rounded-md text-sm font-medium {{ Request::routeIs('about') ? 'border-b border-primary' : '' }}">About
                    Us</a>
                <a href="{{ route('contact') }}"
                    class="text-primary px-3 py-2 rounded-md text-sm font-medium {{ Request::routeIs('contact') ? 'border-b border-primary' : '' }}">Contact
                    Us</a>

                <div class="flex pt-3 px-3">
                    <a href="">
                        <button
                            class="bg-primary text-white hover:bg-gray-200 px-4 py-2 rounded-md text-sm font-medium">
                            Login
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    {{ $slot }}

    <footer class="bg-primary text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2 lg:col-span-1">
                    <div class="mb-6">
                        <div class="flex items-center">
                            <a href="{{ route('home') }}" class="rounded-lg">
                                <img src="{{ $businessDetail ? Storage::url($businessDetail->logo_white) : '' }}"
                                    alt="Company Logo" class="h-16">
                            </a>
                        </div>
                    </div>

                    <p class="text-white">
                        {!! $businessDetail ? $businessDetail->footer_description : '' !!}
                    </p>

                    <div class="flex space-x-4 mb-6 mt-6">
                        <a href="{{ $businessDetail ? $businessDetail->facebook : '' }}" target="_blank"
                            class="text-white hover:text-white transition-colors duration-300">
                            <span class="sr-only">Facebook</span>
                            <img src="/assets/icon/facebook.svg" alt="" class="h-6 w-6">
                        </a>
                        <a href="{{ $businessDetail ? $businessDetail->instagram : '' }}" target="_blank"
                            class="text-white hover:text-white transition-colors duration-300">
                            <span class="sr-only">Instagram</span>
                            <img src="/assets/icon/instagram.svg" alt="" class="h-6 w-6">
                        </a>
                        <a href="{{ $businessDetail ? $businessDetail->youtube : '' }}" target="_blank"
                            class="text-white hover:text-white transition-colors duration-300">
                            <span class="sr-only">Youtube</span>
                            <img src="/assets/icon/youtube.svg" alt="" class="h-6 w-6">
                        </a>
                        <a href="{{ $businessDetail ? $businessDetail->tiktok : '' }}" target="_blank"
                            class="text-white hover:text-white transition-colors duration-300">
                            <span class="sr-only">TikTok</span>
                            <img src="/assets/icon/tiktok.svg" alt="" class="h-6 w-6">
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-white mb-6">Quick Links</h3>
                    <ul class="space-y-4">
                        <li>
                            <a href="{{ route('home') }}"
                                class="text-white hover:text-white transition-colors duration-300">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('product') }}"
                                class="text-white hover:text-white transition-colors duration-300">Buy
                                Equipment</a>
                        </li>
                        <li>
                            <a href="{{ route('sell-equipment') }}"
                                class="text-white hover:text-white transition-colors duration-300">Sell
                                Equipment</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}"
                                class="text-white hover:text-white transition-colors duration-300">About
                                Us</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}"
                                class="text-white hover:text-white transition-colors duration-300">Contact
                                Us</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-white mb-6">Our Services</h3>
                    <ul class="space-y-4">
                        <li>
                            <p class="text-white hover:text-white transition-colors duration-300">Equipment
                                Installation</p>
                        </li>
                        <li>
                            <p class="text-white hover:text-white transition-colors duration-300">Maintenance &
                                Repairs</p>
                        </li>
                        <li>
                            <p class="text-white hover:text-white transition-colors duration-300">Emergency
                                Service</p>
                        </li>
                        <li>
                            <p class="text-white hover:text-white transition-colors duration-300">Equipment
                                Upgrades</p>
                        </li>
                        <li>
                            <p class="text-white hover:text-white transition-colors duration-300">Consultations</p>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-white mb-6">Contact Us</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <img src="/assets/icon/location.svg" alt="" class="h-6 w-6 mr-3">
                            <span class="text-white">
                                {{ $businessDetail ? $businessDetail->address : '' }}
                            </span>
                        </li>
                        <li class="flex items-center">
                            <img src="/assets/icon/phone.svg" alt="" class="h-6 w-6 mr-3">
                            <span class="text-white">{{ $businessDetail ? $businessDetail->phone : '' }}</span>
                        </li>
                        <li class="flex items-center">
                            <img src="/assets/icon/mail.svg" alt="" class="h-6 w-6 mr-3">
                            <span class="text-white">{{ $businessDetail ? $businessDetail->email : '' }}</span>
                        </li>
                        <li class="flex items-center">
                            <img src="/assets/icon/clock.svg" alt="" class="h-6 w-6 mr-3">
                            <span class="text-white">{{ $businessDetail ? $businessDetail->working_hours : '' }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <div class="md:flex md:items-center md:justify-between">
                    <div class="md:w-1/2 mb-6 md:mb-0">
                        <h3 class="text-lg font-semibold text-white mb-2">Find Kitchen Equipment</h3>
                        <p class="text-gray-400">Search our extensive catalog of professional kitchen equipment</p>
                    </div>
                    <div class="md:w-1/2">
                        <form class="flex sm:flex-row" action="{{ route('search') }}" method="GET">
                            <div class="relative flex-grow">
                                <input type="text" placeholder="Search for equipment by name..."
                                    name="SearchQuery"
                                    class="w-full px-4 py-3 pl-10 rounded-l-md bg-gray-800 border border-r-0 border-gray-700 text-white focus:outline-none">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </div>
                            </div>
                            <button type="submit"
                                class="bg-gray-900 text-white font-medium px-6 py-3 rounded-r-md transition-colors duration-300 border border-l-0 border-gray-700">
                                Search
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-gray-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <div class="text-sm text-white text-center">
                    &copy; {{ date('Y') }} {{ $businessDetail?->name }}. All rights reserved.
                </div>
            </div>
        </div>
    </footer>

    <button id="scrollTopBtn"
        class="fixed bottom-8 right-4 bg-gray-600 text-white p-2 z-10 rounded shadow-lg 
        hover:bg-gray-700 transition-all duration-500 transform translate-y-[-50px] opacity-0">
        <img src="/assets/icon/arrow-up.svg" alt="" class="h-8 w-8">
    </button>

    <div id=""
        class="fixed bottom-20 right-0 p-2 z-50 rounded transition-transform duration-300 hover:translate-y-2">
        <a href="https://wa.me/{{ $businessDetail?->phone }}" target="_blank"><img src="/assets/image/whatsapp.png" alt=""
                class="h-16 w-16"></a>
    </div>


    <script src="/assets/js/flowbite.js"></script>
    <script src="/assets/js/swiper.js"></script>
    <script src="/assets/js/script.js"></script>

    @yield('scripts')


    @if (session('success'))
        <script>
            Toastify({
                text: `<div style="display: flex; align-items: center; gap: 12px;">
           <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-patch-exclamation-fill" viewBox="0 0 16 16">
            <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
            </svg>
            <div>
                <div style="font-weight: bold; margin-bottom: 2px;">Success!</div>
                <div>{{ session('success') }}</div>
            </div>
          </div>`,
                className: "custom-toast",
                duration: 3000,
                close: true,
                gravity: "top",
                position: "right",
                close: false,
                style: {
                    background: "#03c04a",
                    padding: "16px",
                    borderRadius: "8px",
                    boxShadow: "0 4px 12px rgba(0,0,0,0.15)",
                    maxWidth: "450px",
                    width: "100%"
                },
                escapeMarkup: false,
            }).showToast();
        </script>
    @endif

</body>

</html>
