<x-app-layout>

    <div class="grid grid-cols-2 p-5">
        <div class="grid gap-4 p-5">
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg" alt="">
            </div>
            <div class="grid grid-cols-5 gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
                </div>
            </div>

        </div>

        <!-- <div class="containe p-5">
            <h1 class="text-black dark:text-white font-bold text-2xl">{{ $vehicle->make->name }} <span class="text-zinc-600 dark:text-zinc-400">{{ $vehicle->model->name }}</span></h1>
            <br>
            <p>{{ $vehicle->description }}</p>
        </div> -->
        <div class="py-6 px-8 max-lg:max-w-2xl">
            <div>
                <h1 class="text-2xl font-extrabold text-zinc-800 text-black dark:text-white">{{ $vehicle->make->name }} <span class="text-zinc-600 dark:text-zinc-400">{{ $vehicle->model->name }}</span></h1>
                <p class="text-sm text-zinc-400 mt-2">@ {{ $vehicle->user->fullname }}</p>
            </div>

            <!-- <div class="flex space-x-1 mt-4">
                <svg class="w-[18px] fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                </svg>
                <svg class="w-[18px] fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                </svg>
                <svg class="w-[18px] fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                </svg>
                <svg class="w-[18px] fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                </svg>
                <svg class="w-[18px] fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                </svg>

                <button type="button" class="px-2.5 py-1.5 bg-zinc-100 text-xs text-zinc-800 rounded-md flex items-center !ml-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 mr-1" fill="currentColor" viewBox="0 0 32 32">
                        <path d="M14.236 21.954h-3.6c-.91 0-1.65-.74-1.65-1.65v-7.201c0-.91.74-1.65 1.65-1.65h3.6a.75.75 0 0 1 .75.75v9.001a.75.75 0 0 1-.75.75zm-3.6-9.001a.15.15 0 0 0-.15.15v7.2a.15.15 0 0 0 .15.151h2.85v-7.501z" data-original="#000000" />
                        <path d="M20.52 21.954h-6.284a.75.75 0 0 1-.75-.75v-9.001c0-.257.132-.495.348-.633.017-.011 1.717-1.118 2.037-3.25.18-1.184 1.118-2.089 2.28-2.201a2.557 2.557 0 0 1 2.17.868c.489.56.71 1.305.609 2.042a9.468 9.468 0 0 1-.678 2.424h.943a2.56 2.56 0 0 1 1.918.862c.483.547.708 1.279.617 2.006l-.675 5.401a2.565 2.565 0 0 1-2.535 2.232zm-5.534-1.5h5.533a1.06 1.06 0 0 0 1.048-.922l.675-5.397a1.046 1.046 0 0 0-1.047-1.182h-2.16a.751.751 0 0 1-.648-1.13 8.147 8.147 0 0 0 1.057-3 1.059 1.059 0 0 0-.254-.852 1.057 1.057 0 0 0-.795-.365c-.577.052-.964.435-1.04.938-.326 2.163-1.71 3.507-2.369 4.036v7.874z" data-original="#000000" />
                        <path d="M4 31.75a.75.75 0 0 1-.612-1.184c1.014-1.428 1.643-2.999 1.869-4.667.032-.241.055-.485.07-.719A14.701 14.701 0 0 1 1.25 15C1.25 6.867 7.867.25 16 .25S30.75 6.867 30.75 15 24.133 29.75 16 29.75a14.57 14.57 0 0 1-5.594-1.101c-2.179 2.045-4.61 2.81-6.281 3.09A.774.774 0 0 1 4 31.75zm12-30C8.694 1.75 2.75 7.694 2.75 15c0 3.52 1.375 6.845 3.872 9.362a.75.75 0 0 1 .217.55c-.01.373-.042.78-.095 1.186A11.715 11.715 0 0 1 5.58 29.83a10.387 10.387 0 0 0 3.898-2.37l.231-.23a.75.75 0 0 1 .84-.153A13.072 13.072 0 0 0 16 28.25c7.306 0 13.25-5.944 13.25-13.25S23.306 1.75 16 1.75z" data-original="#000000" />
                    </svg>
                    87 Reviews
                </button>
            </div> -->

            <div class="mt-8">
                <p class="text-zinc-800 dark:text-zinc-100 text-4xl font-bold">P {{ number_format($vehicle->price, 2) }}</p>
            </div>

            <div class="mt-8">
                <ol>
                    <li class="inline-flex items-center px-4 py-2 text-sm font-medium rounded-full text-zinc-500 dark:text-zinc-400 bg-white dark:bg-zinc-700 hover:text-zinc-800 dark:hover:text-zinc-300 focus:outline-none transition mr-3">Year: {{ $vehicle->year }}</li>
                    <li class="inline-flex items-center px-4 py-2 text-sm font-medium rounded-full text-zinc-500 dark:text-zinc-400 bg-white dark:bg-zinc-700 hover:text-zinc-800 dark:hover:text-zinc-300 focus:outline-none transition mr-3">Mileage: {{ number_format($vehicle->mileage, 2) }} km</li>
                    <li class="inline-flex items-center px-4 py-2 text-sm font-medium rounded-full text-zinc-500 dark:text-zinc-400 bg-white dark:bg-zinc-700 hover:text-zinc-800 dark:hover:text-zinc-300 focus:outline-none transition">Condition: {{ $vehicle->condition }}</li>
                </ol>
            </div>
            <div class="my-8">
                <div>
                    <h3 class="text-xl font-bold text-zinc-800 dark:text-zinc-200">Product Description</h3>
                    <p class="text-sm text-zinc-800 dark:text-zinc-200 mt-4">{{ $vehicle->description }}</p>
                </div>
            </div>

            <div class="grid grid-rows-2">

                <!-- only logged in users should see edit and delete buttons -->
                @can('edit-delete-vehicle', $vehicle)

                <button onclick="window.location.href='/vehicles/{{ $vehicle->id }}/edit'" type="button" class="text-white bg-sky-500 dark:bg-sky-500 hover:bg-sky-700 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-300 font-medium text-sm px-5 py-2.5 me-2 mb-2 dark:bg-zinc-800 dark:hover:bg-sky-700 dark:focus:ring-zinc-700 dark:border-zinc-700">Edit <i class="fa-solid fa-pen ml-2"></i> </button>

                <form method="POST" action="/vehicles/{{ $vehicle->id }}">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="w-full text-white dark:text-white py-2.5 px-5 me-2 mb-2 text-sm font-medium focus:outline-none bg-white dark:bg-zinc-800 border-2 border-zinc-200 hover:bg-red-500 hover:text-white focus:z-10 focus:ring-4 focus:ring-red-500 dark:focus:ring-red-500 dark:bg-zinc-800 dark:text-zinc-400 dark:border-zinc-600 dark:hover:text-white dark:hover:border-transparent dark:hover:bg-red-500">Delete <i class="fa-solid fa-trash ml-2"></i></button>
                </form>

                @endcan

                @cannot('edit-delete-vehicle', $vehicle)

                <button type="button" class="text-white bg-zinc-200 dark:bg-zinc-800 hover:bg-zinc-900 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-300 font-medium text-sm px-5 py-2.5 me-2 mb-2 dark:bg-zinc-800 dark:hover:bg-zinc-700 dark:focus:ring-zinc-700 dark:border-zinc-700">Buy now!</button>

                <button type="button" class="text-white dark:text-white py-2.5 px-5 me-2 mb-2 text-sm font-medium focus:outline-none bg-white dark:bg-zinc-800 border-2 border-zinc-200 hover:bg-zinc-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-zinc-100 dark:focus:ring-zinc-700 dark:bg-zinc-800 dark:text-zinc-400 dark:border-zinc-600 dark:hover:text-white dark:hover:bg-zinc-700">Add to cart</button>

                @endcan
            </div>
        </div>


    </div>

    @include('components.footer');

</x-app-layout>