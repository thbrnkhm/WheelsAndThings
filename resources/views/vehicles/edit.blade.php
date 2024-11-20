<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-2xl text-zinc-800 dark:text-zinc-200">
            Call 'em mista edita ᕙ(⇀‸↼‶)ᕗ</h1>
    </x-slot>

    <div class="container-fluid p-10 bg-white dark:bg-zinc-900">
        <form method="POST" action="/vehicles">
            @csrf
            <!-- Vehicle Make -->
            <label for="make" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Vehicle Make</label>
            <input
                type="text"
                id="make"
                name="make"
                class="w-full mb-4 border rounded p-2 bg-white dark:bg-zinc-800 border-zinc-300 dark:border-zinc-700 dark:text-white dark:placeholder-zinc-400"
                placeholder="e.g., Mercedes-Benz, BMW, Audi, Toyota, etc."
                value="{{ $vehicle->make->name }}">
            <x-input-error :messages="$errors->get('make')" class="mt-2" />

            <!-- Vehicle Model -->
            <label for="model" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Vehicle Model</label>
            <input
                type="text"
                id="model"
                name="model"
                class="w-full mb-4 border rounded p-2 bg-white dark:bg-zinc-800 border-zinc-300 dark:border-zinc-700 dark:text-white dark:placeholder-zinc-400"
                placeholder="e.g., GLE 63 S, M5 CS, RSQ8, Corolla Quest, etc."
                value="{{ $vehicle->model->name }}">
            <x-input-error :messages="$errors->get('model')" class="mt-2" />

            <!-- Description -->
            <label
                for="description"
                class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">
                Description
            </label>
            <textarea
                id="description"
                rows="4"
                name="description"
                class="block w-full mb-4 border rounded p-2 bg-white dark:bg-zinc-800 border-zinc-300 dark:border-zinc-700 dark:text-white dark:placeholder-zinc-400"
                placeholder="Provide a detailed description...">{{ old('description', $vehicle->description) }}
            </textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />

            <!-- Image Upload -->
            <label
                class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white"
                for="images">
                Upload Images
            </label>
            <input
                type="file"
                id="images"
                name="images"
                multiple
                class="block w-full  text-sm border rounded-lg p-2 bg-gray-50 dark:bg-zinc-800 dark:border-zinc-600 dark:text-gray-400 dark:placeholder-gray-400"
                value="{{ $vehicle->images->first()->path }}">
            <p class="mb-4 text-sm text-zinc-400 dark:text-zinc-500">updating this will replace all your existing images</p>
            <x-input-error :messages="$errors->get('images')" class="mt-2" />

            <!-- Price and Mileage -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div>
                    <label
                        for="price"
                        class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">
                        Price
                    </label>
                    <div class="flex items-center mb-4 rounded bg-white dark:bg-zinc-800 ">
                        <!-- Currency Sign -->
                        <span class="px-3 text-black dark:text-white bg-zinc-100 dark:bg-zinc-800">BPW </span>
                        <!-- Input Field -->
                        <input
                            type="text"
                            id="price"
                            name="price"
                            class="w-full border rounded p-2 bg-white dark:bg-zinc-800 border-zinc-300 dark:border-zinc-700 dark:text-white dark:placeholder-zinc-400 "
                            placeholder="Enter price, e.g., 150000 "
                            value="{{ ($vehicle->price) }}">
                        <x-input-error :messages="$errors->get('price')" class="mt-2" />
                    </div>
                </div>

                <div>
                    <label
                        for="mileage"
                        class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">
                        Mileage (km)
                    </label>
                    <input
                        type="text"
                        id="mileage"
                        name="mileage"
                        class="w-full mb-4 border rounded p-2 bg-white dark:bg-zinc-800 border-zinc-300 dark:border-zinc-700 dark:text-white dark:placeholder-zinc-400 "
                        placeholder="Enter mileage"
                        value="{{ ($vehicle->mileage) }}">
                    <x-input-error :messages="$errors->get('mileage')" class="mt-2" />
                </div>
            </div>

            <!-- Year and Condition -->
            <div class="grid md:grid-cols-2 md:gap-6">
                <div>
                    <label
                        for="year"
                        class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">
                        Year
                    </label>
                    <input
                        type="number"
                        name="year"
                        id="year"
                        min="1900"
                        max="2099"
                        step="1"
                        class="w-full mb-4 border rounded p-2 bg-white dark:bg-zinc-800 border-zinc-300 dark:border-zinc-700 dark:text-white dark:placeholder-zinc-400"
                        placeholder="e.g., 2023"
                        value="{{ ($vehicle->year) }}">
                    <x-input-error :messages="$errors->get('year')" class="mt-2" />
                </div>
                <div>
                    <label
                        for="condition"
                        class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">
                        Condition
                    </label>
                    <select id="condition" name="condition" class="w-full mb-4 border rounded p-2 bg-gray-50 dark:bg-zinc-800 dark:border-zinc-600 dark:text-gray-400 dark:placeholder-gray-400">
                        <option value="{{ $vehicle->condition }}" selected>Selected: {{ $vehicle->condition }}</option>
                        <option value="New">New</option>
                        <option value="Used">Used</option>
                        <option value="Certified Pre-Owned">Certified Pre-Owned</option>
                    </select>
                    <x-input-error :messages="$errors->get('condition')" class="mt-2" />
                </div>
            </div>

            <!-- Update Button -->
            <div class="mt-6 flex justify-end gap-x-6">
                <a href="/vehicles/{{ $vehicle->id }}" class="text-white py-2 px-4">Cancel</a>
                <button type="submit" class="bg-blue-700 text-white rounded-full py-2 px-4">Update</button>
            </div>

        </form>
    </div>
</x-app-layout>