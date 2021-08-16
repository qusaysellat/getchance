@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Edit Contact') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ route('contacts.update', $contact->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="flex flex-wrap">
                        <label for="address" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Address') }}:
                        </label>

                        <input id="address" type="text" class="form-input w-full @error('address')  border-red-500 @enderror"
                            name="address" value="{{ $contact->address }}" required autocomplete="address" autofocus>

                        @error('address')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="phone" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Phone') }}:
                        </label>

                        <input id="phone" type="text" class="form-input w-full @error('phone')  border-red-500 @enderror"
                            name="phone" value="{{ $contact->phone }}" required autocomplete="phone" autofocus>

                        @error('phone')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Email') }}:
                        </label>

                        <input id="email" type="text" class="form-input w-full @error('email')  border-red-500 @enderror"
                            name="email" value="{{ $contact->email }}" required autocomplete="email" autofocus>

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="website" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Website') }}:
                        </label>

                        <input id="website" type="text" class="form-input w-full @error('website')  border-red-500 @enderror"
                            name="website" value="{{ $contact->website }}" required autocomplete="website" autofocus>

                        @error('website')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                            {{ __('Update') }}
                        </button>

                        <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                            <a href="{{ route('contacts.show', $contact->id) }}">cancel</a>
                        </p>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection
