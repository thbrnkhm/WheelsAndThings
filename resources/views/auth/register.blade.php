<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- fullname -->
        <div class="mt-4">
            <x-input-label for="fullname" :value="__('FullName')" />
            <x-text-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" :value="old('fullname')" required autofocus />
            <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
        </div>

        <!-- surname -->
        <div class="mt-4">
            <x-input-label for="surname" :value="__('Surname')" />
            <x-text-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required autofocus />
            <x-input-error :messages="$errors->get('surname')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                type="password"
                name="password"
                required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>

        <!-- check for any validation errors and display them -->
        <div class="mt-2 bg-red-300 dark:bg-red-300">
            @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                <li class="text-red-700 dark:text-red-700">{{ $error }}</li>
                @endforeach
            </ul>
            @endif
        </div>
    </form>
</x-guest-layout>