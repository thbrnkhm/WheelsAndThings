<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicles</title>

    
    <!-- tailwind script -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- font awesome script -->
    <script src="https://kit.fontawesome.com/f494d78729.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="bg-white dark:bg-zinc-900">
        <div>
            <!--
      Mobile filter dialog

      Off-canvas filters for mobile, show/hide based on off-canvas filters state.
    -->
            <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
                <!--
        Off-canvas menu backdrop, show/hide based on off-canvas menu state.

        Entering: "transition-opacity ease-linear duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
                <div class="fixed inset-0 bg-black/25" aria-hidden="true"></div>

                <div class="fixed inset-0 z-40 flex">
                    <!--
          Off-canvas menu, show/hide based on off-canvas menu state.

          Entering: "transition ease-in-out duration-300 transform"
            From: "translate-x-full"
            To: "translate-x-0"
          Leaving: "transition ease-in-out duration-300 transform"
            From: "translate-x-0"
            To: "translate-x-full"
        -->
                    <div class="relative ml-auto flex size-full max-w-xs flex-col overflow-y-auto bg-zinc-900 py-4 pb-12">
                        <div class="flex items-center justify-between px-4">
                            <h2 class="text-lg font-medium text-zinc-900 dark:text-zinc-300">Filters</h2>
                            <button type="button" class="-mr-2 flex size-10 items-center justify-center rounded-md bg-white dark:bg-zinc-900 p-2 text-zinc-400 dark:text-white">
                                <span class="sr-only">Close menu</span>
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <!-- Filters -->
                        <form class="mt-4 border-t border-zinc-200 dark:border-zinc-800">
                            <h3 class="sr-only">Categories</h3>
                            <ul role="list" class="px-2 py-3 font-medium text-zinc-900 dark:text-zinc-400">
                                <li>
                                    <a href="#" class="block px-2 py-3">Totes</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-2 py-3">Backpacks</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-2 py-3">Travel Bags</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-2 py-3">Hip Bags</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-2 py-3">Laptop Sleeves</a>
                                </li>
                            </ul>

                            <div class="border-t border-zinc-200 dark:border-zinc-800 px-4 py-6">
                                <h3 class="-mx-2 -my-3 flow-root">
                                    <!-- Expand/collapse section button -->
                                    <button type="button" class="flex w-full items-center justify-between bg-white dark:bg-zinc-900 px-2 py-3 text-zinc-400 dark:text-white hover:text-zinc-500 dark:hover:text-zinc-500" aria-controls="filter-section-mobile-0" aria-expanded="false">
                                        <span class="font-medium text-zinc-900 dark:text-white">Color</span>
                                        <span class="ml-6 flex items-center">
                                            <!-- Expand icon, show/hide based on section open state. -->
                                            <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                                <path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
                                            </svg>
                                            <!-- Collapse icon, show/hide based on section open state. -->
                                            <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                                <path fill-rule="evenodd" d="M4 10a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H4.75A.75.75 0 0 1 4 10Z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                </h3>
                                <!-- Filter section, show/hide based on section state. -->
                                <div class="pt-6" id="filter-section-mobile-0">
                                    <div class="space-y-6">
                                        <div class="flex items-center">
                                            <input id="filter-mobile-color-0" name="color[]" value="white" type="checkbox" class="size-4 rounded border-zinc-300 dark:border-zinc-800 text-sky-600 dark:text-sky-600 focus:ring-sky-500 dark:focus:ring-sky-500">
                                            <label for="filter-mobile-color-0" class="ml-3 min-w-0 flex-1 text-zinc-400">White</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-color-0" name="color[]" value="white" type="checkbox" class="size-4 rounded border-zinc-300 dark:border-zinc-800 text-sky-600 dark:text-sky-600 focus:ring-sky-500 dark:focus:ring-sky-500">
                                            <label for="filter-mobile-color-0" class="ml-3 min-w-0 flex-1 text-zinc-400">White</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-color-0" name="color[]" value="white" type="checkbox" class="size-4 rounded border-zinc-300 dark:border-zinc-800 text-sky-600 dark:text-sky-600 focus:ring-sky-500 dark:focus:ring-sky-500">
                                            <label for="filter-mobile-color-0" class="ml-3 min-w-0 flex-1 text-zinc-400">White</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-color-0" name="color[]" value="white" type="checkbox" class="size-4 rounded border-zinc-300 dark:border-zinc-800 text-sky-600 dark:text-sky-600 focus:ring-sky-500 dark:focus:ring-sky-500">
                                            <label for="filter-mobile-color-0" class="ml-3 min-w-0 flex-1 text-zinc-400">White</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-color-0" name="color[]" value="white" type="checkbox" class="size-4 rounded border-zinc-300 dark:border-zinc-800 text-sky-600 dark:text-sky-600 focus:ring-sky-500 dark:focus:ring-sky-500">
                                            <label for="filter-mobile-color-0" class="ml-3 min-w-0 flex-1 text-zinc-400">White</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-color-0" name="color[]" value="white" type="checkbox" class="size-4 rounded border-zinc-300 dark:border-zinc-800 text-sky-600 dark:text-sky-600 focus:ring-sky-500 dark:focus:ring-sky-500">
                                            <label for="filter-mobile-color-0" class="ml-3 min-w-0 flex-1 text-zinc-400">White</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-t border-zinc-200 px-4 py-6">
                                <h3 class="-mx-2 -my-3 flow-root">
                                    <!-- Expand/collapse section button -->
                                    <button type="button" class="flex w-full items-center justify-between bg-white px-2 py-3 text-zinc-400 hover:text-zinc-500" aria-controls="filter-section-mobile-1" aria-expanded="false">
                                        <span class="font-medium text-zinc-900">Category</span>
                                        <span class="ml-6 flex items-center">
                                            <!-- Expand icon, show/hide based on section open state. -->
                                            <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                                <path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
                                            </svg>
                                            <!-- Collapse icon, show/hide based on section open state. -->
                                            <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                                <path fill-rule="evenodd" d="M4 10a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H4.75A.75.75 0 0 1 4 10Z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                </h3>
                                <!-- Filter section, show/hide based on section state. -->
                                <div class="pt-6" id="filter-section-mobile-1">
                                    <div class="space-y-6">
                                        <div class="flex items-center">
                                            <input id="filter-mobile-category-0" name="category[]" value="new-arrivals" type="checkbox" class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-category-0" class="ml-3 min-w-0 flex-1 text-zinc-500">New Arrivals</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-category-1" name="category[]" value="sale" type="checkbox" class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-category-1" class="ml-3 min-w-0 flex-1 text-zinc-500">Sale</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-category-2" name="category[]" value="travel" type="checkbox" checked class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-category-2" class="ml-3 min-w-0 flex-1 text-zinc-500">Travel</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-category-3" name="category[]" value="organization" type="checkbox" class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-category-3" class="ml-3 min-w-0 flex-1 text-zinc-500">Organization</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-category-4" name="category[]" value="accessories" type="checkbox" class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-category-4" class="ml-3 min-w-0 flex-1 text-zinc-500">Accessories</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-t border-zinc-200 px-4 py-6">
                                <h3 class="-mx-2 -my-3 flow-root">
                                    <!-- Expand/collapse section button -->
                                    <button type="button" class="flex w-full items-center justify-between bg-white px-2 py-3 text-zinc-400 hover:text-zinc-500" aria-controls="filter-section-mobile-2" aria-expanded="false">
                                        <span class="font-medium text-zinc-900">Size</span>
                                        <span class="ml-6 flex items-center">
                                            <!-- Expand icon, show/hide based on section open state. -->
                                            <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                                <path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
                                            </svg>
                                            <!-- Collapse icon, show/hide based on section open state. -->
                                            <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                                <path fill-rule="evenodd" d="M4 10a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H4.75A.75.75 0 0 1 4 10Z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                </h3>
                                <!-- Filter section, show/hide based on section state. -->
                                <div class="pt-6" id="filter-section-mobile-2">
                                    <div class="space-y-6">
                                        <div class="flex items-center">
                                            <input id="filter-mobile-size-0" name="size[]" value="2l" type="checkbox" class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-size-0" class="ml-3 min-w-0 flex-1 text-zinc-500">2L</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-size-1" name="size[]" value="6l" type="checkbox" class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-size-1" class="ml-3 min-w-0 flex-1 text-zinc-500">6L</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-size-2" name="size[]" value="12l" type="checkbox" class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-size-2" class="ml-3 min-w-0 flex-1 text-zinc-500">12L</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-size-3" name="size[]" value="18l" type="checkbox" class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-size-3" class="ml-3 min-w-0 flex-1 text-zinc-500">18L</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-size-4" name="size[]" value="20l" type="checkbox" class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-size-4" class="ml-3 min-w-0 flex-1 text-zinc-500">20L</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-size-5" name="size[]" value="40l" type="checkbox" checked class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-size-5" class="ml-3 min-w-0 flex-1 text-zinc-500">40L</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- mobile ends here -->


            <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex items-baseline justify-between border-b border-zinc-200 dark:border-zinc-800 pb-6 pt-24">
                    <h1 class="text-4xl font-bold tracking-tight text-zinc-900 dark:text-white">New Arrivals</h1>

                    <div class="flex items-center">
                        <div class="relative inline-block text-left">
                            <div>
                                <button type="button" class="group inline-flex justify-center text-sm font-medium text-zinc-700 dark:text-white hover:text-zinc-900 dark:hover:text-zinc-300" id="menu-button" aria-expanded="false" aria-haspopup="true">
                                    Sort
                                    <svg class="-mr-1 ml-1 size-5 shrink-0 text-zinc-400 dark:text-white group-hover:text-zinc-500 dark:group-hover:text-zinc-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>

                            <!--
              Dropdown menu, show/hide based on menu state.

              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
                            <div class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white dark:bg-zinc-900 shadow-2xl ring-1 ring-black/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <!--
                  Active: "bg-zinc-100 outline-none", Not Active: ""

                  Selected: "font-medium text-zinc-900", Not Selected: "text-zinc-500"
                -->
                                    <a href="#" class="block px-4 py-2 text-sm font-medium text-zinc-900 dark:text-white" role="menuitem" tabindex="-1" id="menu-item-0">Most Popular</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-zinc-500 dark:text-zinc-300" role="menuitem" tabindex="-1" id="menu-item-1">Best Rating</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-zinc-500 dark:text-zinc-300" role="menuitem" tabindex="-1" id="menu-item-2">Newest</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-zinc-500 dark:text-zinc-300" role="menuitem" tabindex="-1" id="menu-item-3">Price: Low to High</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-zinc-500 dark:text-zinc-300" role="menuitem" tabindex="-1" id="menu-item-4">Price: High to Low</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <section aria-labelledby="products-heading" class="pb-24 pt-6">
                    <h2 id="products-heading" class="sr-only">Products</h2>

                    <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
                        <!-- Filters -->
                        <!-- select 5 most recently made vehicle make name -->
                        <form class="hidden lg:block">
                            <h3 class="sr-only">Categories</h3>
                            <ul role="list" class="space-y-4 border-b border-zinc-200 pb-6 text-sm font-medium text-zinc-900">
                                <li>
                                    <a href="#">Totes</a>
                                </li>
                                <li>
                                    <a href="#">Backpacks</a>
                                </li>
                                <li>
                                    <a href="#">Travel Bags</a>
                                </li>
                                <li>
                                    <a href="#">Hip Bags</a>
                                </li>
                                <li>
                                    <a href="#">Laptop Sleeves</a>
                                </li>
                            </ul>

                            <div class="border-b border-zinc-200 py-6">
                                <h3 class="-my-3 flow-root">
                                    <!-- Expand/collapse section button -->
                                    <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-zinc-400 hover:text-zinc-500" aria-controls="filter-section-0" aria-expanded="false">
                                        <span class="font-medium text-zinc-900">Color</span>
                                        <span class="ml-6 flex items-center">
                                            <!-- Expand icon, show/hide based on section open state. -->
                                            <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                                <path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
                                            </svg>
                                            <!-- Collapse icon, show/hide based on section open state. -->
                                            <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                                <path fill-rule="evenodd" d="M4 10a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H4.75A.75.75 0 0 1 4 10Z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                </h3>
                                <!-- Filter section, show/hide based on section state. -->
                                <div class="pt-6" id="filter-section-0">
                                    <div class="space-y-4">
                                        <div class="flex items-center">
                                            <input id="filter-color-0" name="color[]" value="white" type="checkbox" class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-color-0" class="ml-3 text-sm text-zinc-600">White</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-color-1" name="color[]" value="beige" type="checkbox" class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-color-1" class="ml-3 text-sm text-zinc-600">Beige</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-color-2" name="color[]" value="blue" type="checkbox" checked class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-color-2" class="ml-3 text-sm text-zinc-600">Blue</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-color-3" name="color[]" value="brown" type="checkbox" class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-color-3" class="ml-3 text-sm text-zinc-600">Brown</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-color-4" name="color[]" value="green" type="checkbox" class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-color-4" class="ml-3 text-sm text-zinc-600">Green</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-color-5" name="color[]" value="purple" type="checkbox" class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-color-5" class="ml-3 text-sm text-zinc-600">Purple</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-b border-zinc-200 py-6">
                                <h3 class="-my-3 flow-root">
                                    <!-- Expand/collapse section button -->
                                    <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-zinc-400 hover:text-zinc-500" aria-controls="filter-section-1" aria-expanded="false">
                                        <span class="font-medium text-zinc-900">Category</span>
                                        <span class="ml-6 flex items-center">
                                            <!-- Expand icon, show/hide based on section open state. -->
                                            <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                                <path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
                                            </svg>
                                            <!-- Collapse icon, show/hide based on section open state. -->
                                            <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                                <path fill-rule="evenodd" d="M4 10a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H4.75A.75.75 0 0 1 4 10Z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                </h3>
                                <!-- Filter section, show/hide based on section state. -->
                                <div class="pt-6" id="filter-section-1">
                                    <div class="space-y-4">
                                        <div class="flex items-center">
                                            <input id="filter-category-0" name="category[]" value="new-arrivals" type="checkbox" class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-category-0" class="ml-3 text-sm text-zinc-600">New Arrivals</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-category-1" name="category[]" value="sale" type="checkbox" class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-category-1" class="ml-3 text-sm text-zinc-600">Sale</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-category-2" name="category[]" value="travel" type="checkbox" checked class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-category-2" class="ml-3 text-sm text-zinc-600">Travel</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-category-3" name="category[]" value="organization" type="checkbox" class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-category-3" class="ml-3 text-sm text-zinc-600">Organization</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-category-4" name="category[]" value="accessories" type="checkbox" class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-category-4" class="ml-3 text-sm text-zinc-600">Accessories</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-b border-zinc-200 py-6">
                                <h3 class="-my-3 flow-root">
                                    <!-- Expand/collapse section button -->
                                    <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-zinc-400 hover:text-zinc-500" aria-controls="filter-section-2" aria-expanded="false">
                                        <span class="font-medium text-zinc-900">Size</span>
                                        <span class="ml-6 flex items-center">
                                            <!-- Expand icon, show/hide based on section open state. -->
                                            <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                                <path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
                                            </svg>
                                            <!-- Collapse icon, show/hide based on section open state. -->
                                            <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                                <path fill-rule="evenodd" d="M4 10a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H4.75A.75.75 0 0 1 4 10Z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                </h3>
                                <!-- Filter section, show/hide based on section state. -->
                                <div class="pt-6" id="filter-section-2">
                                    <div class="space-y-4">
                                        <div class="flex items-center">
                                            <input id="filter-size-0" name="size[]" value="2l" type="checkbox" class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-size-0" class="ml-3 text-sm text-zinc-600">2L</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-size-1" name="size[]" value="6l" type="checkbox" class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-size-1" class="ml-3 text-sm text-zinc-600">6L</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-size-2" name="size[]" value="12l" type="checkbox" class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-size-2" class="ml-3 text-sm text-zinc-600">12L</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-size-3" name="size[]" value="18l" type="checkbox" class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-size-3" class="ml-3 text-sm text-zinc-600">18L</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-size-4" name="size[]" value="20l" type="checkbox" class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-size-4" class="ml-3 text-sm text-zinc-600">20L</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-size-5" name="size[]" value="40l" type="checkbox" checked class="size-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-size-5" class="ml-3 text-sm text-zinc-600">40L</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!-- Product grid -->
                        <!-- resources/views/vehicles/index.blade.php -->
                        <div class="container mx-auto px-4 py-8">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                                @forelse ($vehicles as $vehicle)
                                <div class="bg-white border border-zinc-200 rounded-lg shadow dark:bg-zinc-800 dark:border-zinc-700">
                                    <div class="relative h-48 overflow-hidden">
                                        @if($vehicle->images->count() > 0)
                                        <img class="rounded-t-lg w-full h-full object-cover"
                                            src="{{ asset('storage/' . $vehicle->images->first()->path) }}"
                                            alt="{{ $vehicle->make->name }} {{ $vehicle->model->name }}" />
                                        @else
                                        <img class="rounded-t-lg w-full h-full object-cover"
                                            src="{{ asset('images/no-image.jpg') }}"
                                            alt="No image available" />
                                        @endif
                                        <div class="absolute top-2 right-2">
                                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                                {{ $vehicle->condition }}
                                            </span>
                                        </div>
                                    </div>

                                    <div class="p-5">
                                        <div class="flex justify-between items-start mb-2">
                                            <h5 class="text-xl font-bold tracking-tight text-zinc-900 dark:text-white">
                                                {{ $vehicle->make->name }} {{ $vehicle->model->name }}
                                            </h5>
                                            <p class="text-lg font-bold text-blue-600 dark:text-blue-500">
                                                ${{ number_format($vehicle->price, 2) }}
                                            </p>
                                        </div>

                                        <div class="mb-3 space-y-2">
                                            <div class="flex items-center justify-between text-sm text-zinc-700 dark:text-zinc-400">
                                                <span>Year:</span>
                                                <span class="font-medium">{{ $vehicle->year }}</span>
                                            </div>
                                            <div class="flex items-center justify-between text-sm text-zinc-700 dark:text-zinc-400">
                                                <span>Mileage:</span>
                                                <span class="font-medium">{{ number_format($vehicle->mileage) }} km</span>
                                            </div>
                                            <p class="mt-2 text-sm text-zinc-700 dark:text-zinc-400 line-clamp-2">
                                                {{ $vehicle->description }}
                                            </p>
                                        </div>

                                        <div class="flex justify-between items-center">
                                            <a href="{{ route('vehicles.show', $vehicle) }}"
                                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                View Details
                                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                                </svg>
                                            </a>

                                            @if(auth()->check() && auth()->id() === $vehicle->user_id)
                                            <div class="flex space-x-2">
                                                <a href="{{ route('vehicles.edit', $vehicle) }}"
                                                    class="px-3 py-2 text-sm font-medium text-blue-700 hover:text-blue-800 dark:text-blue-500 dark:hover:text-blue-400">
                                                    Edit
                                                </a>
                                                <form action="{{ route('vehicles.destroy', $vehicle) }}" method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        onclick="return confirm('Are you sure you want to delete this vehicle?')"
                                                        class="px-3 py-2 text-sm font-medium text-red-700 hover:text-red-800 dark:text-red-500 dark:hover:text-red-400">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="col-span-full text-center py-12">
                                    <h3 class="text-lg font-medium text-zinc-900 dark:text-white">No vehicles found</h3>
                                    <p class="mt-2 text-zinc-700 dark:text-zinc-400">Be the first to list a vehicle!</p>
                                    @auth
                                    <a href="{{ route('vehicles.create') }}"
                                        class="mt-4 inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800">
                                        Add Vehicle
                                    </a>
                                    @endauth
                                </div>
                                @endforelse
                            </div>

                            @if($vehicles->hasPages())
                            <div class="mt-6">
                                {{ $vehicles->links() }}
                            </div>
                            @endif
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>

    <!-- Show vehicle items
    <div class="grid grid-cols-3">

        sidebar/filter
        <div class="container p-5" style="border: 2px solid red;"></div>

        actual content
        <div class="col-span-2 p-5" style="border: 2px solid green;">
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
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

    </div> -->

    <!-- footer -->
    @include('components.footer')
</body>

</html>