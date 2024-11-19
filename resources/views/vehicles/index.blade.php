<x-app-layout>
    <x-slot name="header">
        <div x-data="{ openModal: false }" class="flex justify-between">

            <h1 class="font-semibold text-xl text-zinc-800 dark:text-zinc-200">
                {{ __('tshwantse o tsenye di koloi...') }}
            </h1>
            <!-- Create Button -->
            <button @click="openModal = true" class="bg-white dark:bg-zinc-700 border-2 border-zinc-600 border-dashed rounded-full py-2 px-4 hover:bg-zinc-100 dark:hover:bg-zinc-800 text-black dark:text-white">
                Create +
            </button>

            <!-- Modal -->
            <div x-show="openModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
                <div class="relative w-3/4 h-3/4 bg-white rounded-lg shadow dark:bg-zinc-800">
                    <!-- Modal Header -->
                    <div class="flex items-center justify-between p-4 border-b dark:border-zinc-600">
                        <h3 class="text-lg font-semibold text-zinc-900 dark:text-white">Create New Vehicle</h3>
                        <button @click="openModal = false" class="text-zinc-400 hover:text-zinc-900 dark:hover:text-white">
                            <svg class="w-5 h-5" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Modal Body (Scrollable) -->
                    <div class="p-4 overflow-y-auto h-[calc(100%-60px)]">
                        <form>
                            <!-- Vehicle Make -->
                            <label for="make" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Vehicle Make</label>
                            <input type="text" id="make" class="w-full mb-4 border rounded p-2 bg-white dark:bg-zinc-700 border-zinc-300 dark:border-zinc-700 dark:text-white dark:placeholder-zinc-400" placeholder="e.g., Mercedes-Benz, BMW, Audi, Toyota, etc." required>

                            <!-- Vehicle Model -->
                            <label for="model" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Vehicle Model</label>
                            <input type="text" id="model" class="w-full mb-4 border rounded p-2 bg-white dark:bg-zinc-700 border-zinc-300 dark:border-zinc-700 dark:text-white dark:placeholder-zinc-400" placeholder="e.g., GLE 63 S, M5 CS, RSQ8, Corolla Quest, etc." required>

                            <!-- Description -->
                            <label for="description" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Description</label>
                            <textarea id="description" rows="4" class="block w-full mb-4 border rounded p-2 bg-white dark:bg-zinc-700 border-zinc-300 dark:border-zinc-700 dark:text-white dark:placeholder-zinc-400" placeholder="Provide a detailed description..." required></textarea>

                            <!-- Image Upload -->
                            <label class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white" for="images">Upload Images</label>
                            <input type="file" id="images" multiple class="block w-full mb-4 text-sm border rounded-lg p-2 bg-gray-50 dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-400 dark:placeholder-gray-400" required>

                            <!-- Price and Mileage -->
                            <div class="grid md:grid-cols-2 md:gap-6">
                                <div>
                                    <label for="price" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Price</label>
                                    <input type="text" id="price" class="w-full mb-4 border rounded p-2 bg-white dark:bg-zinc-700 border-zinc-300 dark:border-zinc-700 dark:text-white dark:placeholder-zinc-400 required" placeholder="Enter price">
                                </div>
                                <div>
                                    <label for="mileage" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Mileage</label>
                                    <input type="text" id="mileage" class="w-full mb-4 border rounded p-2 bg-white dark:bg-zinc-700 border-zinc-300 dark:border-zinc-700 dark:text-white dark:placeholder-zinc-400 required" placeholder="Enter mileage">
                                </div>
                            </div>

                            <!-- Year and Condition -->
                            <div class="grid md:grid-cols-2 md:gap-6">
                                <div>
                                    <label for="year" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Year</label>
                                    <input type="number" id="year" min="1900" max="2099" step="1" class="w-full mb-4 border rounded p-2 bg-white dark:bg-zinc-700 border-zinc-300 dark:border-zinc-700 dark:text-white dark:placeholder-zinc-400" placeholder="e.g., 2023" required>
                                </div>
                                <div>
                                    <label for="condition" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Condition</label>
                                    <select id="condition" class="w-full mb-4 border rounded p-2 bg-gray-50 dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-400 dark:placeholder-gray-400" required>
                                        <option value="new">New</option>
                                        <option value="used">Used</option>
                                        <option value="certified">Certified Pre-Owned</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="bg-blue-700 text-white rounded-full py-2 px-4">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </x-slot>

    <!-- Main Content -->
    <div class="py-12">
        <!-- Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 px-5">
            <div class="col">
                <div class="max-w-sm bg-white border border-zinc-200 rounded-lg shadow dark:bg-zinc-800 dark:border-zinc-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://aquitainevet.com/wp-content/uploads/2018/06/aquitaine-kittens.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-zinc-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-zinc-700 dark:text-zinc-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Edit
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>