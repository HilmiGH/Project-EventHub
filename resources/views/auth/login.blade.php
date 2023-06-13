<x-guest-layout>

    <style>
        .card {
            border: 3px solid rgb(0, 0, 0);
        }
    </style>

    <div class="container"  style="margin-top: 2.7cm">
        <div class="row">
            <div class="col-lg"></div>
            <div class="col-lg">
                <h3 style="font-size: larger; font-family: serif; font-weight: bold; text-align: right; margin-top:90px">
                    Hi There Welcome to</h3>
            </div>
            <div class="col-lg">
                <img src="img/eventhub.png"style="width:300px;height:180px">
            </div>
            <div class="col-lg"></div>
        </div>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="container">
        <div class="card">
            <h3
                style="font-size: larger;font-family: serif;font-weight: bold; text-align: center;margin-top: 50px;margin-bottom: 0px;">
                Log In to Event Hub</h3>
            <h3 style="font-size: medium;font-family: serif;text-align: center;color:gray;">Enter your username and
                password below</h3>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <label class="custom-label" for="email">Email</label>
                        <x-text-input id="email" class="form-control custom-input" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" placeholder="Enter your email in here"/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <label class="custom-label" for="password">Password</label>

                        <x-text-input id="password" class="form-control custom-input" type="password" name="password" required
                            autocomplete="current-password" placeholder="Enter your correct password in here"/>

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <button type="submit" class="btn btn-danger custom-button">{{ __('Sign In') }}</button>
                    <p class="custom-text">
                        Dont have an account? <a href="/register">Sign up first</a>.
                    </p>
                </form>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    {{-- <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> --}}
</x-guest-layout>
