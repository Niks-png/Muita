
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-input-label for="username" :value="__('username')" class="text-white" />
            <x-text-input id="username" class="block mt-2 w-full hover:border-red-500" type="username" name="username" :value="old('username')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <div class="flex justify-between items-center">
                <x-input-label for="password" :value="__('Password')" class="text-white" />
                <a class="underline text-sm text-gray-600 dark:text-white hover:text-red-500 rounded-md focus:outline-none" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            </div>

            <x-text-input id="password" class="block mt-1 w-full hover:border-red-500"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-white">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-4">
            
            <a class="underline text-sm text-white hover:text-red-500 rounded-md focus:outline-none" href="{{ route('register') }}">
                {{ __('New user?') }}
            </a>
    <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        
        </div>
    </form>
</x-guest-layout>