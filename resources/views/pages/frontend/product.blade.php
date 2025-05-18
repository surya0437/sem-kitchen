<x-frontend-layout :pageTitle="'Products'">

    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="text-center mb-12">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Professional Kitchen Equipment</h1>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Browse our extensive selection of high-quality kitchen equipment for professional restaurants and
                    food service businesses.
                </p>
            </div>

            <!-- Category Navigation -->
            <div class="custom-scroll overflow-x-auto mb-12">
                <div class="flex gap-4 justify-start px-4 whitespace-nowrap py-2">
                    <a href="{{ route('product') }}"
                        class="bg-primary text-white px-6 py-2 rounded-full font-medium hover:bg-hover-primary transition-colors duration-300">
                        All Products
                    </a>
                    @foreach ($categories as $category)
                        <a href="{{ route('category-wise-product', $category->slug) }}"
                            class="bg-gray-200 text-gray-700 px-6 py-2 rounded-full font-medium hover:bg-gray-300 transition-colors duration-300">
                            {{ $category->title }}
                        </a>
                    @endforeach

                </div>
            </div>



            <!-- Category 1: Cooking Equipment -->
            <div class="mb-16">
                <!-- Product Cards -->

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                    @foreach ($products as $product)
                        <a href="{{ route('single-product', $product->slug) }}"
                            class="group bg-white rounded-lg shadow-md cursor-pointer overflow-hidden border border-gray-100 transition-transform duration-300 hover:shadow-xl hover:-translate-y-2">
                            <img src="{{ Storage::url($product->image[0]) }}" alt="{{ $product->name }}"
                                class="w-full h-64 object-cover">
                            <div class="p-4 space-y-2">
                                <h3 class="text-lg font-bold text-gray-900">{{ $product->name }}</h3>
                                <p class="bg-gray-100 text-gray-800 text-sm font-medium px-2.5 py-0.5 rounded w-fit">
                                    Category: {{ $product->category->title }}</p>
                                <p class="bg-gray-100 text-gray-800 text-sm font-medium px-2.5 py-0.5 rounded w-fit">In
                                    Stock: {{ $product->in_stock }}</p>
                                <p class="text-gray-600 text-sm mb-4">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($product->description), 50) }}
                                </p>

                            </div>
                            <div class="flex justify-between items-center px-4 pb-4">
                                <button
                                    class="bg-primary w-full hover:bg-hover-primary text-white py-2 px-4 rounded-md font-medium transition-colors duration-300">
                                    View Details
                                </button>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center mt-12">
                {{ $products->links('components.custom-pagination', ['products' => $products]) }}
            </div>

            <!-- Product Benefits -->
            <div class="mt-16 bg-gray-50 rounded-lg p-8 shadow-sm">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="flex items-start">
                        <div class="bg-primary rounded-full p-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Fast Delivery</h3>
                            <p class="text-gray-600">Quick shipping on all equipment orders</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-primary rounded-full p-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Warranty Protection</h3>
                            <p class="text-gray-600">All products backed by manufacturer warranty</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-primary rounded-full p-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Easy Returns</h3>
                            <p class="text-gray-600">30-day return policy on unused equipment</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-primary rounded-full p-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Expert Support</h3>
                            <p class="text-gray-600">Technical assistance and installation help</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</x-frontend-layout>
