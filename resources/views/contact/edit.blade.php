@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="container">
        <div class="container">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="h1 text-center">
                    {{ __('Edit Contact') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ route('contacts.update', $contact->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="flex flex-wrap">
                        <label for="address" class="form-label">
                            {{ __('Address') }}:
                        </label>

                        <input id="address" type="text" class="form-control @error('address')  border-red-500 @enderror"
                            name="address" value="{{ $contact->address }}" autocomplete="address" >

                        @error('address')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="phone" class="form-label">
                            {{ __('Phone') }}:
                        </label>

                        <input id="phone" type="text" class="form-control @error('phone')  border-red-500 @enderror"
                            name="phone" value="{{ $contact->phone }}" autocomplete="phone" >

                        @error('phone')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="email" class="form-label">
                            {{ __('Email') }}:
                        </label>

                        <input id="email" type="text" class="form-control @error('email')  border-red-500 @enderror"
                            name="email" value="{{ $contact->email }}" autocomplete="email" >

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="website" class="form-label">
                            {{ __('Website') }}:
                        </label>

                        <input id="website" type="text" class="form-control @error('website')  border-red-500 @enderror"
                            name="website" value="{{ $contact->website }}" autocomplete="website" >

                        @error('website')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="btn btn-primary">
                            {{ __('Update') }}
                        </button>
                    </div>
                </form>
            </section>
        </div>
    </div>
</main>
@endsection
