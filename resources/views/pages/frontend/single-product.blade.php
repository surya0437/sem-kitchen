<x-frontend-layout :pageTitle="'Product Details'">
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Product Detail Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                <!-- Product Images Section -->
                <div class="space-y-4">
                    <!-- Main Product Image -->
                    <div class="border border-gray-200 rounded-lg overflow-hidden">
                        <img src="{{ Storage::url($product->image[0]) }}" alt="Professional Gas Range"
                            class="w-full h-auto object-cover" id="main-image">
                    </div>

                    <!-- Thumbnail Images -->
                    <div class="grid grid-cols-4 gap-4">
                        @foreach ($product->image as $image)
                            @if ($loop->first)
                                @php
                                    continue;
                                @endphp
                            @endif
                            <div class="border border-primary rounded-lg overflow-hidden cursor-pointer">
                                <img src="{{ Storage::url($image) }}" alt="Professional Gas Range"
                                    class="w-full h-20 object-cover" onclick="changeImage(this)">
                            </div>
                        @endforeach

                    </div>
                </div>

                <!-- Product Details Section -->
                <div class="space-y-6">
                    <!-- Product Title & Basic Info -->
                    <div>
                        <h1 class="text-3xl font-bold text-primary">{{ $product->name }}</h1>
                        <div class="flex items-center mt-2">
                            <span class="text-green-600 font-medium">In Stock: {{ $product->in_stock }}</span>
                        </div>
                    </div>

                    <!-- Product Description -->
                    <div>
                        <h2 class="text-lg font-medium text-gray-900">Description</h2>
                        <p class="mt-2 text-gray-600 text-justify">
                            {!! $product->description !!}
                        </p>
                    </div>

                    <!-- Additional Information -->
                    <div class="space-y-4">
                        <!-- Key Features -->
                        <div>
                            <h2 class="text-lg font-medium text-gray-900">Key Features</h2>
                            <ul class="mt-2 space-y-2">
                                @foreach ($product->feature as $item)
                                    <li class="flex items-start">
                                        <img src="/assets/icon/tick-green.svg" alt=""
                                            class="h-5 w-5 mr-2 mt-0.5">
                                        <span class="text-gray-600">{{ $item['feature'] }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Products -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-primary mb-8">You May Also Like</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                    @foreach ($randomProducts as $product)
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
        </div>
    </section>
</x-frontend-layout>
