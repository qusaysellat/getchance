@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Edit Resume') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ route('resumes.update', $resume->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="flex flex-wrap">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Full Name') }}:
                        </label>

                        <input id="name" type="text" class="form-input w-full @error('name')  border-red-500 @enderror"
                            name="name" value="{{ $resume->name }}" required autocomplete="name" autofocus>

                        @error('name')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="dob" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Date of Birth') }}:
                        </label>

                        <input id="dob" type="date" class="form-input w-full @error('dob')  border-red-500 @enderror"
                            name="dob" value="{{ $resume->dob }}" required autocomplete="dob" autofocus>

                        @error('dob')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="gender" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Gender') }}:
                        </label>

                        <select name="gender" id="gender"  class="form-input w-full">
                            <option value="0" @if($resume->gender==0)
                                {{ 'selected' }}
                            @endif> Male </option>
                            <option value="1" @if($resume->gender==1)
                                {{ 'selected' }}
                            @endif> Female </option>
                        </select>

                        @error('gender')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="nationality" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Nationality') }}:
                        </label>

                        <input id="nationality" type="text" class="form-input w-full @error('nationality')  border-red-500 @enderror"
                            name="nationality" value="{{ $resume->nationality }}" required autocomplete="nationality" autofocus>

                        @error('nationality')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="address" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Address') }}:
                        </label>

                        <input id="address" type="text" class="form-input w-full @error('address')  border-red-500 @enderror"
                            name="address" value="{{ $resume->address }}" required autocomplete="address" autofocus>

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
                            name="phone" value="{{ $resume->phone }}" required autocomplete="phone" autofocus>

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
                            name="email" value="{{ $resume->email }}" required autocomplete="email" autofocus>

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
                            name="website" value="{{ $resume->website }}" required autocomplete="website" autofocus>

                        @error('website')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="summary" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Summary') }}:
                        </label>

                        <textarea id="summary" class="form-input w-full @error('summary')  border-red-500 @enderror"
                            name="summary" value="" required autocomplete="write resume summary here" autofocus>{{ $resume->summary }}</textarea>

                        @error('summary')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="education" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Education') }}:
                        </label>

                        <textarea id="education" class="form-input w-full @error('education')  border-red-500 @enderror"
                            name="education" value="" required autocomplete="write resume education here" autofocus>{{ $resume->education }}</textarea>

                        @error('education')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="experience" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Experience') }}:
                        </label>

                        <textarea id="experience" class="form-input w-full @error('experience')  border-red-500 @enderror"
                            name="experience" value="" required autocomplete="write resume experience here" autofocus>{{ $resume->experience }}</textarea>

                        @error('experience')
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
                            <a href="{{ route('resumes.show', $resume->id) }}">cancel</a>
                        </p>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection
