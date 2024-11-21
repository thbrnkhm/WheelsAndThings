<x-app-layout>
    <!-- hero section -->
    <section class="bg-white dark:bg-zinc-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
            <a href="#" class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700" role="alert">
                
                <input class="text-sm font-medium" placeholder="Get jiggy with it!">
                
                <button class="text-xs bg-blue-600 rounded-full text-white px-4 py-2 mr-1">Search</button> 
            </a>
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">We invest in the world’s potential</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. In laudantium maiores praesentium et expedita rerum eveniet autem saepe nemo eaque eum sapiente suscipit deleniti corporis harum hic beatae, quibusdam doloribus.</p>
            <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Learn more
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    <svg class="mr-2 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path>
                    </svg>
                    Watch video
                </a>
            </div>
        </div>
    </section>

    <!-- filters -->
    <div class="container-fluid">
        <div class="grid grid-row-2">
            <!-- actual filters -->
            <div class="row border-t-2 border-zinc-800 p-5 flex justify-between">

                <!-- sort -->
                <x-dropdown align="left" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-full text-zinc-500 dark:text-zinc-400 bg-white dark:bg-zinc-800 hover:text-zinc-700 dark:hover:text-zinc-300 focus:outline-none transition">
                            <span>Sort</span>
                            <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                            </svg>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link>
                            Newest
                        </x-dropdown-link>
                        <x-dropdown-link>
                            Lowest to Highest (Price)
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>

                <!-- other filters -->
                <div class="grid grid-row-1 grid-flow-col gap-4">
                    <!-- model filter -->
                    <div class="div">
                        <x-dropdown align="left" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-full text-zinc-500 dark:text-zinc-400 bg-white dark:bg-zinc-800 hover:text-zinc-700 dark:hover:text-zinc-300 focus:outline-none transition">
                                    <span>Model</span>
                                    <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                                    </svg>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link>
                                    Benz
                                </x-dropdown-link>
                                <x-dropdown-link>
                                    Beemer
                                </x-dropdown-link>
                                <x-dropdown-link>
                                    Audi
                                </x-dropdown-link>
                                <x-dropdown-link>
                                    and dat..
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </div>

                    <!-- diactivated till user chooses vehicle make -->
                    <div class="div">
                        <x-dropdown align="left" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-full text-zinc-500 dark:text-zinc-400 bg-white dark:bg-zinc-800 hover:text-zinc-700 dark:hover:text-zinc-300 focus:outline-none transition">
                                    <span>Make</span>
                                    <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                                    </svg>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link>
                                    GLE 63 s
                                </x-dropdown-link>
                                <x-dropdown-link>
                                    c200
                                </x-dropdown-link>
                                <x-dropdown-link>
                                    A 45 s
                                </x-dropdown-link>
                                <x-dropdown-link>
                                    c 63 s AMG
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </div>

                    <!-- year -->
                    <div class="div">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-full text-zinc-500 dark:text-zinc-400 bg-white dark:bg-zinc-800 hover:text-zinc-700 dark:hover:text-zinc-300 focus:outline-none transition">
                                    <span>Year</span>
                                    <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                                    </svg>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link>
                                    2025
                                </x-dropdown-link>
                                <x-dropdown-link>
                                    2024 - 2020
                                </x-dropdown-link>
                                <x-dropdown-link>
                                    2020 - 2016
                                </x-dropdown-link>
                                <x-dropdown-link>
                                    2016 - 2012
                                </x-dropdown-link>
                                <x-dropdown-link>
                                    2012 - 2008
                                </x-dropdown-link>
                                <x-dropdown-link>
                                    < 2008
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </div>

                    <!-- price ranges -->
                    <div class="div">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-full text-zinc-500 dark:text-zinc-400 bg-white dark:bg-zinc-800 hover:text-zinc-700 dark:hover:text-zinc-300 focus:outline-none transition">
                                    <span>Price Range</span>
                                    <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                                    </svg>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link>
                                    None
                                </x-dropdown-link>
                                <x-dropdown-link>
                                    less than P10,000.00
                                </x-dropdown-link>
                                <x-dropdown-link>
                                    less than P50,000.00
                                </x-dropdown-link>
                                <x-dropdown-link>
                                    less than P200,000.00
                                </x-dropdown-link>
                                <x-dropdown-link>
                                    more than P200,000.00
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
            </div>
            <!-- show filters -->
            <div class="flex flex-row gap-4 p-5 bg-zinc-200 dark:bg-zinc-800">

                <div>
                    <span class="inline-flex items-center px-4 py-2 btext-sm font-medium rounded-full text-zinc-500 dark:text-zinc-400 bg-white dark:bg-zinc-800 ">Filters |</span>
                </div>

                <!-- show selected filters -->
                <div>
                    <x-dropdown align="left" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-4 py-2 border-2 border-dashed text-sm font-medium rounded-full text-zinc-500 dark:text-zinc-400 bg-white dark:bg-zinc-700 hover:text-zinc-800 dark:hover:text-zinc-300 focus:outline-none transition">
                                <span>Mercedes-Benz</span>
                                <i class="fa-solid fa-circle-xmark ml-2"></i>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link>
                                Newest
                            </x-dropdown-link>
                            <x-dropdown-link>
                                Lowest to Highest (Price)
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>

            </div>
        </div>
    </div>

    <!-- new right now section -->
    <div class="container-fluid">

        <!-- Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-5">

            @foreach($allVehicles as $vehicle)
            <x-vehicle-card :vehicle="$vehicle" />
            @endforeach

        </div>

        <div class="p-5">
            {{ $allVehicles->links() }}
        </div>
    </div>

    <!-- Footer Component -->
    <x-footer />
</x-app-layout>