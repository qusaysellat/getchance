@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="container">
        <div class="container">
            <section class="p-3 flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="h-1 text-center">
                    {{ __('Please Authenticate Yourself') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <div class="mb-3">
                            <label for="email" class="form-label">
                                {{ __('E-Mail Address') }}:
                            </label>

                            <input id="email" type="email"
                                class="form-control @error('email') border-red-500 @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" >

                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">
                                {{ __('Password') }}:
                            </label>

                            <input id="password" type="password"
                                class="form-control @error('password') border-red-500 @enderror" name="password"
                                required>

                        </div>

                        <div class="mb-3">
                            @error('email')
                            <p class="text-red-500 text-xs italic mt-4">
                                <span class="text-danger">{{ $message }}</span>
                            </p>
                            @enderror
                            @error('password')
                            <p class="text-red-500 text-xs italic mt-4">
                                <span class="text-danger">{{ $message }}</span>
                            </p>
                            @enderror
                        </div>

                        <div class="mb-3 form-check">
                            <label class="inline-flex items-center text-sm text-gray-700" for="remember">
                                <input type="checkbox" name="remember" id="remember" class="form-checkbox"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <span class="ml-2">{{ __('Remember Me') }}</span>
                            </label>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit"
                            class="btn btn-lg btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <br/>
                        <div class="mb-3">
                            @if (Route::has('password.request'))
                            <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                                {{ __("Forgot Your Password?") }}
                                <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="{{ route('password.request') }}">
                                    {{ __('Click Here') }}
                                </a>
                            </p>
                            @endif
                        </div>
                        <div class="mb-3">
                            @if (Route::has('register'))
                            <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                                {{ __("Don't have an account?") }}
                                <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="{{ route('register') }}">
                                    {{ __('Register') }}
                                </a>
                            </p>
                            @endif
                        </div>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection
