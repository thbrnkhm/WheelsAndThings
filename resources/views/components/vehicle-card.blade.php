<div class="col" id="vehicle-card">
    <div class="w-full h-96 max-w-sm bg-white border border-zinc-200 rounded-lg shadow dark:bg-zinc-800 dark:border-zinc-700">
        <!-- Vehicle Image -->
        <a href="#">
            <img class="rounded-t-lg w-full h-48 object-cover" src="{{ $vehicle->images ?? 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfsofUc8HWpRHGJaa-SPPa4IzyrhodKFKZfA&s' }}" alt="{{ $vehicle->make->name }} {{ $vehicle->model->name }}">
        </a>

        <!-- Vehicle Details -->
        <div class="p-5">
        <small class="text-black dark:text-zinc-500">{{ $vehicle->user->fullname }}</small>
            <a href="#">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-zinc-900 dark:text-white">
                    {{ $vehicle->make->name ?? 'Unknown Make' }} <span class="text-zinc-300 dark:text-zinc-500">{{ $vehicle->model->name ?? 'Unknown Model' }}</span> 
                </h5>
            </a>
            <!-- <p class="mb-3 font-normal text-zinc-700 dark:text-zinc-400">
                {{ $vehicle->description }}
            </p> -->
            
            <p class="text-sm text-zinc-500 dark:text-zinc-400 mb-3">
                <span>Price:</span> <strong>${{ number_format($vehicle->price, 2) }}</strong><br>
                <span>Mileage:</span> <strong>{{ $vehicle->mileage }} km</strong><br>
                <span>Condition:</span> <strong>{{ ucfirst($vehicle->condition) }}</strong>
            </p>
        </div>
    </div>
</div>