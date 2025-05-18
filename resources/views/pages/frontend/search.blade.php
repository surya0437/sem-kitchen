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

                @if (count($products) == 0)
                    <div
                        class=" flex flex-col items-center justify-center p-8 rounded-lg border border-gray-200 bg-gray-50">
                        <svg class="w-24 h-24 text-gray-400 mb-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                        <p class="text-xl font-medium text-gray-600">No products found</p>
                        <p class="text-gray-500 mt-2 text-center">
                            We couldn't find any products matching with your search.
                        </p>
                        <a href="{{ route('product') }}"
                            class="mt-4 px-4 py-2 text-white rounded-md bg-primary flex items-center transition-transform duration-300 hover:shadow-xl hover:-translate-y-2">
                            Continue Shopping
                            <img src="/assets/icon/arrow-right-white.svg" alt="" class="w-5 h-5 ml-2">
                        </a>
                    </div>
                @else
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">

                        @foreach ($products as $product)
                            <a href="{{ route('single-product', $product->slug) }}"
                                class="group bg-white rounded-lg shadow-md cursor-pointer overflow-hidden border border-gray-100 transition-transform duration-300 hover:shadow-xl hover:-translate-y-1">
                                <img src="{{ Storage::url($product->image[0]) }}" alt="{{ $product->name }}"
                                    class="w-full h-64 object-cover">
                                <div class="p-4 space-y-2">
                                    <h3 class="text-lg font-bold text-gray-900">{{ $product->name }}</h3>
                                    <p
                                        class="bg-gray-100 text-gray-800 text-sm font-medium px-2.5 py-0.5 rounded w-fit">
                                        Category: {{ $product->category->title }}</p>
                                    <p
                                        class="bg-gray-100 text-gray-800 text-sm font-medium px-2.5 py-0.5 rounded w-fit">
                                        In
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

                @endif

            </div>

            <!-- Pagination -->
            <div class="flex justify-center mt-12">
                {{ $products->links('components.custom-pagination', ['products' => $products]) }}
            </div>

        </div>
    </section>
</x-frontend-layout>
