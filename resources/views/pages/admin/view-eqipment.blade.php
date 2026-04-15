<x-frontend-layout :pageTitle="'Admin - Equipment Request'">

    <section class="bg-white py-12 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <h1 class="text-2xl md:text-3xl font-semibold tracking-tight text-gray-900">
                        {{ $equipment->equipment_name }}
                    </h1>

                    <p class="text-sm text-gray-500 mt-1 flex items-center gap-2">
                        <span class="w-1.5 h-1.5 bg-gray-400 rounded-full"></span>
                        Submitted on {{ $equipment->created_at->format('F j, Y \\a\\t h:i A') }}
                    </p>
                </div>

                <div class="text-sm font-semibold text-primary bg-primary/10 px-3 py-1 rounded-full w-fit">
                    Request ID: {{ $equipment->request_number }}
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <div class="lg:col-span-2 space-y-8">

                    <div class="bg-white border border-gray-200/70 rounded-xl shadow-sm hover:shadow-md transition p-8">
                        <h2 class="text-xl font-semibold text-gray-900 mb-6">Equipment Information</h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <p class="text-xs uppercase tracking-wide text-gray-400 mb-1">Equipment Type</p>
                                <p class="text-gray-900 font-semibold">{{ $equipment->equipment_type }}</p>
                            </div>

                            <div>
                                <p class="text-xs uppercase tracking-wide text-gray-400 mb-1">Condition</p>
                                <span
                                    class="inline-flex items-center px-3 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-700">
                                    {{ ucfirst(str_replace('-', ' ', $equipment->equipment_condition)) }}
                                </span>
                            </div>

                            <div class="md:col-span-2">
                                <p class="text-xs uppercase tracking-wide text-gray-400 mb-1">Equipment Name</p>
                                <p class="text-gray-900 font-semibold">{{ $equipment->equipment_name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white border border-gray-200/70 rounded-xl shadow-sm hover:shadow-md transition p-8">
                        <h2 class="text-xl font-semibold text-gray-900 mb-6">Equipment Photos</h2>

                        @if (count($equipment->image) > 0)
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                @foreach ($equipment->image as $image)
                                    <div
                                        class="relative group cursor-pointer overflow-hidden rounded-lg border border-gray-200">
                                        <img src="{{ env('ASSET_URL'). Storage::url($image) }}"
                                            class="w-full h-32 object-cover transition-transform duration-300 group-hover:scale-105">

                                        <div
                                            class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition">
                                            <button class="open-modal" data-image="{{ env('ASSET_URL'). Storage::url($image) }}">
                                                <div
                                                    class="bg-white/20 backdrop-blur-sm p-3 rounded-full hover:scale-110 transition">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-gray-500">No images uploaded.</p>
                        @endif
                    </div>

                </div>

                <div class="space-y-6">

                    <div
                        class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-xl p-8 shadow-sm">
                        <h2 class="text-xl font-semibold text-gray-900 mb-6">Seller Information</h2>

                        <div class="space-y-4">
                            <div>
                                <p class="text-sm text-gray-500">Name</p>
                                <p class="text-gray-900 font-medium">{{ $equipment->name }}</p>
                            </div>

                            <div>
                                <p class="text-sm text-gray-500">Phone</p>
                                <p class="text-gray-900 font-medium">{{ $equipment->phone }}</p>
                            </div>

                            <div>
                                <p class="text-sm text-gray-500">Email</p>
                                <p class="text-gray-900 font-medium">{{ $equipment->email }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm">
                        <h2 class="text-xl font-semibold text-gray-900 mb-6">Actions</h2>

                        <div class="space-y-3">
                            <a href="mailto:{{ $equipment->email }}"
                                class="w-full border border-gray-300 hover:border-primary hover:text-primary text-gray-700 font-medium py-2.5 px-4 rounded-lg flex items-center justify-center transition">
                                Send Email
                            </a>

                            <a href="tel:{{ $equipment->phone }}"
                                class="w-full bg-primary hover:bg-hover-primary text-white font-medium py-2.5 px-4 rounded-lg flex items-center justify-center shadow-sm hover:shadow-md transition">
                                Call Seller
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <div id="imageModal"
        class="fixed inset-0 z-50 hidden items-center justify-center bg-black/70 backdrop-blur-sm transition-opacity duration-300">

        <div id="modalContent" class="relative transform scale-95 opacity-0 transition-all duration-300">

            <div class="relative bg-white rounded-xl shadow-2xl p-2 border border-gray-100">

                <button id="closeModal"
                    class="absolute top-3 right-3 bg-red-500 hover:bg-black/70 text-white rounded-full p-2 backdrop-blur transition shadow-lg z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <img id="modalImage" class="max-h-[80vh] max-w-[90vw] object-contain rounded-lg" />
            </div>

        </div>
    </div>

    @section('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const modal = document.getElementById("imageModal");
                const modalContent = document.getElementById("modalContent");
                const modalImage = document.getElementById("modalImage");
                const closeBtn = document.getElementById("closeModal");

                function openModal(imageUrl) {
                    modalImage.src = imageUrl;

                    modalContent.classList.remove("scale-100", "opacity-100");
                    modalContent.classList.add("scale-95", "opacity-0");

                    modal.classList.remove("hidden");
                    modal.classList.add("flex");

                    requestAnimationFrame(() => {
                        modalContent.classList.remove("scale-95", "opacity-0");
                        modalContent.classList.add("scale-100", "opacity-100");
                    });
                }

                function closeModal() {
                    modalContent.classList.remove("scale-100", "opacity-100");
                    modalContent.classList.add("scale-95", "opacity-0");

                    setTimeout(() => {
                        modal.classList.add("hidden");
                        modal.classList.remove("flex");
                        modalImage.src = "";
                    }, 200);
                }

                document.querySelectorAll(".open-modal").forEach(btn => {
                    btn.addEventListener("click", function() {
                        openModal(this.dataset.image);
                    });
                });

                closeBtn.addEventListener("click", closeModal);

                modal.addEventListener("click", function(e) {
                    if (e.target === modal) closeModal();
                });

                document.addEventListener("keydown", function(e) {
                    if (e.key === "Escape" && !modal.classList.contains("hidden")) {
                        closeModal();
                    }
                });
            });
        </script>
    @endsection

</x-frontend-layout>
