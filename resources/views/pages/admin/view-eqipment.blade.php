<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - View Equipment Request</title>
    <script src="/assets/js/tailwind.js"></script>
    <link rel="stylesheet" href="/assets/css/style.css">

</head>

<body>
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-primary shadow">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl font-bold text-primary">
                        <img src="/assets/image/logo-white.png" alt="" class="h-12">
                    </h1>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-1 py-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Page Header -->
                <div class="border-b border-gray-200 pb-6 mb-6 ">
                    <div>
                        <h2 class="text-2xl font-bold text-primary">{{ $equipment->name }}</h2>
                        <p class="mt-1 text-sm text-gray-500">Submitted on
                            {{ $equipment->created_at->format('F j, Y \a\t h:i A') }}
                        </p>
                    </div>
                    <div class="mt-2">
                        <span class="text-primary font-medium">Request ID: {{ $equipment->request_number }}</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Equipment and Seller Details -->
                    <div class="lg:col-span-2 space-y-8">
                        <!-- Equipment Info Card -->
                        <div class="bg-white shadow rounded-lg p-6">
                            <h3 class="text-lg font-medium text-primary mb-4">Equipment Information</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <div class="text-sm font-medium text-gray-500">Equipment Type</div>
                                    <div class="mt-1 text-primary">{{ $equipment->equipment_type }}</div>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-500">Equipment Name</div>
                                    <div class="mt-1 text-primary">{{ $equipment->equipment_name }}</div>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-500">Condition</div>
                                    <div class="mt-1 text-primary">{{ $equipment->equipment_condition }}</div>
                                </div>
                            </div>
                        </div>

                        <!-- Photos Card -->
                        <div class="bg-white shadow rounded-lg p-6">
                            <h3 class="text-lg font-medium text-primary mb-4">Equipment Photos</h3>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                @foreach ($equipment->image as $image)
                                    <div class="relative group cursor-pointer">
                                        <img src="{{ Storage::url($image) }}" alt="Vehicle Front"
                                            class="w-full h-32 rounded-lg object-cover">
                                        <button
                                            class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 flex items-center justify-center rounded-lg transition-opacity open-modal"
                                            data-image="{{ Storage::url($image) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-eye text-white w-8 h-8"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                                <path
                                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                            </svg>
                                        </button>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>

                    <!-- Admin Actions Sidebar -->
                    <div class="lg:col-span-1 space-y-6">
                        <!-- Status Update Card -->
                        <div class="bg-white shadow rounded-lg p-6">
                            <h3 class="text-lg font-medium text-primary mb-4">Seller Information</h3>
                            <div class="space-y-3">
                                <div>
                                    <div class="text-sm font-medium text-gray-500">Name</div>
                                    <div class="mt-1 text-primary">{{ $equipment->name }}</div>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-500">Phone Number</div>
                                    <div class="mt-1 text-primary">{{ $equipment->phone }}</div>
                                </div>
                                <div class="md:col-span-2">
                                    <div class="text-sm font-medium text-gray-500">Email Address</div>
                                    <div class="mt-1 text-primary">{{ $equipment->email }}</div>
                                </div>
                            </div>
                        </div>

                        <!-- Admin Actions Card -->
                        <div class="bg-white shadow rounded-lg p-6">
                            <h3 class="text-lg font-medium text-primary mb-4">Actions</h3>
                            <div class="space-y-3">
                                <a href="mailto:{{ $equipment->email }}"
                                    class="w-full bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 font-medium py-2 px-4 rounded-md transition-colors duration-300 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    Send Email to Seller
                                </a>
                                <a href="tel:{{ $equipment->phone }}"
                                    class="w-full bg-white border border-[#2a3855] hover:bg-red-50 text-[#2a3855] font-medium py-2 px-4 rounded-md transition-colors duration-300 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                    Call to Seller
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>

    <div id="imageModal" class="fixed inset-0 bg-black/80 flex items-center justify-center z-50 hidden">
        <div class="relative w-auto h-4/5 bg-transparent flex flex-col justify-center items-center">
            <button id="closeModal" class="absolute top-4 right-4 text-white text-3xl font-bold">
                &times;
            </button>
            <img id="modalImage" src="" alt="Preview"
                class="max-w-full max-h-[80vh] object-contain rounded-lg">
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const modal = document.getElementById("imageModal");
            const modalImage = document.getElementById("modalImage");
            const closeModal = document.getElementById("closeModal");
            const openModalButtons = document.querySelectorAll(".open-modal");

            openModalButtons.forEach(button => {
                button.addEventListener("click", function() {
                    modalImage.src = this.getAttribute("data-image");
                    modal.classList.remove("hidden");
                });
            });

            closeModal.addEventListener("click", function() {
                modal.classList.add("hidden");
            });

            modal.addEventListener("click", function(e) {
                if (e.target === modal) {
                    modal.classList.add("hidden");
                }
            });
        });
    </script>
</body>

</html>
