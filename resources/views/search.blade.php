<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f494d78729.js" crossorigin="anonymous"></script>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.3/dist/cdn.min.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="resources\css\welcome.css">
</head>

<body class="bg-white dark:bg-zinc-900 flex flex-col min-h-screen">

    @include('layouts.navigation')

    <main class="flex-grow">
        <div class="container-fluid bg-white dark:bg-zinc-900 p-10">
            <h2 class="text-2xl font-semibold text-zinc-800 dark:text-white text-center">
                Search Results for "{{ $query }}"
            </h2>

            <!-- Display Vehicles -->
            @if($vehicles->isNotEmpty())
            <div class="h-full">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($vehicles as $vehicle)
                    <!-- Vehicle Card -->
                    <div class="col" id="vehicle-card">
                        <a href="{{ route('vehicles.show', $vehicle->id) }}" class="block w-full h-96 max-w-sm bg-white border border-zinc-200 rounded-lg shadow hover:border-blue-200 dark:bg-zinc-800 dark:border-zinc-700">
                            <!-- Vehicle Image -->
                            @if ($vehicle->images->isNotEmpty())
                            <img class="bg-zinc-200 rounded-t-lg w-full h-48 object-cover"
                                src="{{ asset('storage/vehicle_images/' . $vehicle->images->first()->path) }}"
                                alt="{{ $vehicle->make->name }} {{ $vehicle->model->name }}">
                            @endif

                            <!-- Vehicle Details -->
                            <div class="p-5">
                                <small class="text-black dark:text-zinc-500">@ {{ $vehicle->user->fullname }}</small>
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
                    @endforeach
                </div>
            </div>
            @else
            <!-- No Results Found -->
            <p class="text-zinc-700 dark:text-zinc-300 text-center py-8">No results found for "{{ $query }}".</p>
            @endif
        </div>
    </main>

    @include('components.footer')
</body>

</html>