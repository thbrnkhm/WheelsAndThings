<div class="col" id="vehicle-card">
    <a href="{{ route('vehicles.show', $vehicle->id) }}" class="block w-full h-96 max-w-sm bg-white border border-zinc-200 rounded-lg shadow hover:border-blue-200 dark:bg-zinc-800 dark:border-zinc-700">
        <!-- Vehicle Image -->
        <img class="rounded-t-lg w-full h-48 object-cover"
            src="{{ $vehicle->images->first()->path }}"
            alt="{{ $vehicle->make->name }} {{ $vehicle->model->name }}">

        <!-- Vehicle Details -->
        <div class="p-5">
            <small class="text-black dark:text-zinc-500">{{ $vehicle->user->fullname }}</small>
            <h5 class="mb-2 text-xl font-bold tracking-tight text-zinc-900 dark:text-white">
                {{ $vehicle->year }} {{ $vehicle->make->name }}
                <span class="text-zinc-300 dark:text-zinc-500">{{ $vehicle->model->name }}</span>
            </h5>
            <p class="text-sm text-zinc-500 dark:text-zinc-400 mb-3">
                <span>Price:</span> <strong>P {{ number_format($vehicle->price, 2) }}</strong><br>
                <span>Mileage:</span> <strong>{{ number_format($vehicle->mileage, 2) }} km</strong><br>
                <span>Condition:</span> <strong>{{ ucfirst($vehicle->condition) }}</strong>
            </p>
        </div>
    </a>
</div>