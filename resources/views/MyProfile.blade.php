@extends('main')

@section('judul_halaman', 'Halaman MyProfile')

@section('content')

<style>
    .card {
        border: 2px solid black;
        border-width: 3px;
        width: 1100px;
        border-radius: 20px;
        margin-top: 50px;
    }

    /* Custom styling for form control with red border */
    .form-control {
        border: 1px solid #ced4da;
        border-color: red !important;
        border-radius: 0.25rem;
        padding: 0.375rem 0.75rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    /* Custom styling to align the form control */
    .form-label {
        display: block;
        margin-bottom: 0.5rem;
    }

    .form-input {
        display: block;
        width: 100%;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

</style>

<div class="container" style="margin-top:110px; margin-bottom:30px">
    <div class="row mt-5">
        <div class="col-md-8" style="padding-bottom: 4cm;">
            <div class="card">
                <div class="card-body"
                    style="margin-left:100px; margin-right:100px; margin-top:30px; margin-bottom:30px;">
                    <div class="form-group;">
                        <h4 class="font-weight-bold">My Profile</h4>
                        <p class="font-weight-light;" style="font-size: small;">Manage your profile information to
                            control, protect and secure your account
                        </p>
                    </div>
                    <div class="progress" style="height: 1px">
                        <div class="progress-bar bg-dark" style="width:100%"></div>
                    </div>

                    <form class="form rounded-circle" action="/landingpage/myprofileUpdate" method="post"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    </form>

                    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                        @csrf
                    </form>

                    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                        @csrf
                        @method('patch')
                        {{-- Username --}}
                        <div>
                            <label for="umumUsername" class="form-label">{{ __('Username') }}</label>
                            <input id="umumUsername" name="umumUsername" type="text" class="mt-1 block w-full"
                                value="{{ old('umumUsername', $user->umumUsername) }}" required autocomplete="username" readonly/>
                            @error('umumUsername')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Name --}}
                        <div>
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input id="name" name="name" type="text" class="mt-1 block w-full"
                                value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" readonly/>
                            @error('name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Email --}}
                        <div>
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input id="email" name="email" type="email" class="mt-1 block w-full"
                                value="{{ old('email', $user->email) }}" required autocomplete="email" readonly/>
                            @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror

                            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                            <div>
                                <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                    {{ __('Your email address is unverified.') }}

                                    <button form="send-verification"
                                        class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                        {{ __('Click here to re-send the verification email.') }}
                                    </button>
                                </p>

                                @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                                @endif
                            </div>
                            @endif
                        </div>

                        {{-- Phone number --}}
                        <div>
                            <label for="umumPhone" class="form-label">{{ __('Phone') }}</label>
                            <input id="umumPhone" name="umumPhone" type="text" class="mt-1 block w-full"
                                value="{{ old('umumPhone', $user->umumPhone) }}" required autocomplete="phone" readonly/>
                            @error('umumPhone')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- City --}}
                        <div>
                            <label for="umumCity" class="form-label">{{ __('City') }}</label>
                            <input id="umumCity" name="umumCity" type="text" class="mt-1 block w-full"
                                value="{{ old('umumCity', $user->umumCity) }}" required autocomplete="city" readonly/>
                            @error('umumCity')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="umumDOB" class="form-label">{{ __('Date of Birth') }}</label>
                            <input id="umumDOB" name="umumDOB" type="text" class="mt-1 block w-full"
                                value="{{ old('umumDOB', $user->umumDOB) }}" required autocomplete="city" readonly/>
                            @error('umumDOB')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
