<x-app-layout>
    <x-slot name="header">
        <div x-data="{ openModal: false }" class="flex justify-between">

            @if ($vehicles->isEmpty())
            <h1 class="font-semibold text-2xl text-zinc-800 dark:text-zinc-200">
                wow... so empty... ಥ‿ಥ </h1>
            @else
            <h1 class="font-semibold text-2xl text-zinc-800 dark:text-zinc-200">
                Create, Edit and Delete </h1>
            @endif

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
                        <form method="POST" action="/vehicles" enctype="multipart/form-data">
                            @csrf
                            <!-- Vehicle Make -->
                            <label for="make" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Vehicle Make</label>
                            <select name="make" class="w-full mb-4 border rounded p-2 bg-zinc-50 dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-400 dark:placeholder-zinc-400">
                                <option value="">Select a Make</option>
                                <option value="Acura">Acura</option>
                                <option value="Alfa Romeo">Alfa Romeo</option>
                                <option value="Aston Martin">Aston Martin</option>
                                <option value="Audi">Audi</option>
                                <option value="Bentley">Bentley</option>
                                <option value="BMW">BMW</option>
                                <option value="Buick">Buick</option>
                                <option value="Cadillac">Cadillac</option>
                                <option value="Chevrolet">Chevrolet</option>
                                <option value="Chrysler">Chrysler</option>
                                <option value="Citroën">Citroën</option>
                                <option value="Dacia">Dacia</option>
                                <option value="Daewoo">Daewoo</option>
                                <option value="Dodge">Dodge</option>
                                <option value="Ferrari">Ferrari</option>
                                <option value="Fiat">Fiat</option>
                                <option value="Ford">Ford</option>
                                <option value="Genesis">Genesis</option>
                                <option value="GMC">GMC</option>
                                <option value="Honda">Honda</option>
                                <option value="Hyundai">Hyundai</option>
                                <option value="Infiniti">Infiniti</option>
                                <option value="Jaguar">Jaguar</option>
                                <option value="Jeep">Jeep</option>
                                <option value="Kia">Kia</option>
                                <option value="Lamborghini">Lamborghini</option>
                                <option value="Land Rover">Land Rover</option>
                                <option value="Lexus">Lexus</option>
                                <option value="Lincoln">Lincoln</option>
                                <option value="Lotus">Lotus</option>
                                <option value="Maserati">Maserati</option>
                                <option value="Mazda">Mazda</option>
                                <option value="McLaren">McLaren</option>
                                <option value="Mercedes-Benz">Mercedes-Benz</option>
                                <option value="MG">MG</option>
                                <option value="Mini">Mini</option>
                                <option value="Mitsubishi">Mitsubishi</option>
                                <option value="Nissan">Nissan</option>
                                <option value="Opel">Opel</option>
                                <option value="Peugeot">Peugeot</option>
                                <option value="Porsche">Porsche</option>
                                <option value="Ram">Ram</option>
                                <option value="Renault">Renault</option>
                                <option value="Rolls-Royce">Rolls-Royce</option>
                                <option value="Seat">Seat</option>
                                <option value="Skoda">Skoda</option>
                                <option value="Smart">Smart</option>
                                <option value="Subaru">Subaru</option>
                                <option value="Suzuki">Suzuki</option>
                                <option value="Tesla">Tesla</option>
                                <option value="Toyota">Toyota</option>
                                <option value="Volkswagen">Volkswagen</option>
                                <option value="Volvo">Volvo</option>
                            </select>
                            <x-input-error :messages="$errors->get('make')" class="mt-2" />
                            <!-- <input type="text" id="make" name="make" class="w-full mb-4 border rounded p-2 bg-white dark:bg-zinc-700 border-zinc-300 dark:border-zinc-700 dark:text-white dark:placeholder-zinc-400" placeholder="e.g., Mercedes-Benz, BMW, Audi, Toyota, etc.">
                            <x-input-error :messages="$errors->get('make')" class="mt-2" /> -->

                            <!-- Vehicle Model -->
                            <label for="model" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Vehicle Model</label>
                            <input type="text" id="model" name="model" class="w-full mb-4 border rounded p-2 bg-white dark:bg-zinc-700 border-zinc-300 dark:border-zinc-700 dark:text-white dark:placeholder-zinc-400" placeholder="e.g., GLE 63 S, M5 CS, RSQ8, Corolla Quest, etc.">
                            <x-input-error :messages="$errors->get('model')" class="mt-2" />

                            <!-- Description -->
                            <label for="description" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Description</label>
                            <textarea id="description" rows="4" name="description" class="block w-full mb-4 border rounded p-2 bg-white dark:bg-zinc-700 border-zinc-300 dark:border-zinc-700 dark:text-white dark:placeholder-zinc-400" placeholder="Provide a detailed description..."></textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />

                            <!-- Image Upload -->
                            <label class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white" for="images">Upload Images (5 images required)</label>
                            <input
                                type="file"
                                id="images"
                                name="images[]"
                                multiple
                                class="block w-full mb-4 text-sm border rounded-lg p-2 bg-zinc-50 dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-400 dark:placeholder-zinc-400"
                                accept="image/jpeg,image/png,image/jpg,image/webp">
                            <x-input-error :messages="$errors->get('images')" class="mt-2" />

                            <!-- Price and Mileage -->
                            <div class="grid md:grid-cols-2 md:gap-6">
                                <div>
                                    <label for="price" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Price</label>
                                    <div class="flex items-center mb-4 rounded bg-white dark:bg-zinc-700 ">
                                        <!-- Currency Sign -->
                                        <span class="px-3 text-black dark:text-white bg-zinc-100 dark:bg-zinc-800">BPW </span>
                                        <!-- Input Field -->
                                        <input
                                            type="text"
                                            id="price"
                                            name="price"
                                            class="w-full border rounded p-2 bg-white dark:bg-zinc-700 border-zinc-300 dark:border-zinc-700 dark:text-white dark:placeholder-zinc-400 "
                                            placeholder="Enter price, e.g., 150000 ">
                                        <x-input-error :messages="$errors->get('price')" class="mt-2" />
                                    </div>
                                </div>

                                <div>
                                    <label for="mileage" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Mileage</label>
                                    <input type="text" id="mileage" name="mileage" class="w-full mb-4 border rounded p-2 bg-white dark:bg-zinc-700 border-zinc-300 dark:border-zinc-700 dark:text-white dark:placeholder-zinc-400 " placeholder="Enter mileage">
                                    <x-input-error :messages="$errors->get('mileage')" class="mt-2" />
                                </div>
                            </div>

                            <!-- Year and Condition -->
                            <div class="grid md:grid-cols-2 md:gap-6">
                                <div>
                                    <label for="year" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Year</label>
                                    <input type="number" name="year" id="year" min="1900" max="2099" step="1" class="w-full mb-4 border rounded p-2 bg-white dark:bg-zinc-700 border-zinc-300 dark:border-zinc-700 dark:text-white dark:placeholder-zinc-400" placeholder="e.g., 2023">
                                    <x-input-error :messages="$errors->get('year')" class="mt-2" />
                                </div>
                                <div>
                                    <label for="condition" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Condition</label>
                                    <select id="condition" name="condition" class="w-full mb-4 border rounded p-2 bg-zinc-50 dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-400 dark:placeholder-zinc-400">
                                        <option value="New">New</option>
                                        <option value="Used">Used</option>
                                        <option value="Certified Pre-Owned">Certified Pre-Owned</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('condition')" class="mt-2" />
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
    <div class="container-fluid">

        <!-- Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-5">

            @foreach($vehicles as $vehicle)
            <x-vehicle-card :vehicle="$vehicle" />
            @endforeach

        </div>

        <div class="p-5">
            {{ $vehicles->links() }}
        </div>
    </div>
</x-app-layout>