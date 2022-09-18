@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="container">
        <div class="container">
            <section class="p-3 flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="h-1 text-center">
                    {{ __('Please Fill The Fields With Your Information') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ route('register') }}">
                    @csrf
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <div class="mb-3">
                            <label for="username" class="form-label">
                                {{ __('Username') }}:
                            </label>

                            <input id="name" type="text"
                                class="form-control @error('username') border-red-500 @enderror" name="username"
                                value="{{ old('username') }}" required autocomplete="username">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">
                                {{ __('E-Mail Address') }}:
                            </label>

                            <input id="email" type="email"
                                class="form-control @error('email') border-red-500 @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">
                                {{ __('Password') }}:
                            </label>

                            <input id="password" type="password"
                                class="form-control @error('password') border-red-500 @enderror" name="password"
                                required autocomplete="new-password">
                        </div>

                        <div class="mb-3">
                            <label for="password-confirm" class="form-label">
                                {{ __('Confirm Password') }}:
                            </label>

                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="mb-3">
                            <label for="usertype" class="form-label">
                                {{ __('Select Usertype') }}
                            </label>

                            <select name="usertype" id="usertype"  class="form-select">
                                <option value="1" selected> Person </option>
                                <option value="2"> Company </option>
                                <option value="3"> Education </option>
                            </select>
                        </div>

                        <div class="mb-3">
                            @error('username')
                            <p class="text-red-500 text-xs italic mt-4">
                                <span class="text-danger">{{ $message }}</span>
                            </p>
                            @enderror
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
                            @error('usertype')
                            <p class="text-red-500 text-xs italic mt-4">
                                <span class="text-danger">{{ $message }}</span>
                            </p>
                            @enderror
                        </div>

                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit"
                                class="btn btn-lg btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>

                        <div class="mb-3">
                            <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                                {{ __('Already have an account?') }}
                                <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="{{ route('login') }}">
                                    {{ __('Login') }}
                                </a>
                            </p>
                        </div>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection
