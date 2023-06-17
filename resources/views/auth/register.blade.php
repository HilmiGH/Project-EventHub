<x-guest-layout>

    <div class="container" style="margin-top: 1cm">
        <div class="row">
            <div class="col-12 text-center mt-5 pt-5">
                <h3 style="font-size: larger;font-family: serif;font-weight: bold;">Sign up to Event Hub as</h3>
                <h3 style="font-size: medium;font-family: serif;text-align: center;color:gray;">Enter your username and
                    password below</h3>
            </div>
        </div>
    </div>

    <div class="container" style="margin-bottom: 7rem">
        <div class="input">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mt-4">
                    <label class="custom-label" for="name">Name</label>
                    <x-text-input id="name" class="form-control custom-input" type="text" name="name"
                    :value="old('name')" required autofocus autocomplete="name" placeholder="Enter your name here"/>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <label class="custom-label" for="email">Email</label>
                    <x-text-input id="email" class="form-control custom-input" type="email" name="email"
                        :value="old('email')" required autocomplete="username" placeholder="Enter your email in here" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label class="custom-label" for="password">Password</label>
                    <x-text-input id="password" class="form-control custom-input" type="password" name="password"
                        required autocomplete="new-password" placeholder="Enter your correct password in here" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <label class="custom-label" for="password_confirmation">Password Confirmation</label>
                    <x-text-input id="password_confirmation" class="form-control custom-input" type="password"
                        name="password_confirmation" required autocomplete="new-password"
                        placeholder="Enter your correct password in here" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div>
                    <button type="submit" class="btn btn-danger custom-button">{{ __('Sign Up') }}</button>
                    <p class="custom-text">
                        Already have an account? <a href="/login">Login</a>.
                    </p>
                </div>

        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    {{-- <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form> --}}
</x-guest-layout>
