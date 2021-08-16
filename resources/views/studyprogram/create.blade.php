@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('New Study Program') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ route('study_programs.store') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="progname" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Progname') }}:
                        </label>

                        <input id="progname" type="text" class="form-input w-full @error('progname')  border-red-500 @enderror"
                            name="progname" value="{{ old('progname') }}" required autocomplete="progname" autofocus>

                        @error('progname')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="level" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Level') }}:
                        </label>

                        <input id="level" type="text" class="form-input w-full @error('level')  border-red-500 @enderror"
                            name="level" value="{{ old('level') }}" required autocomplete="level" autofocus>

                        @error('level')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="duration" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Duration (months)') }}
                        </label>

                        <input id="duration" type="text" class="form-input w-full @error('duration')  border-red-500 @enderror"
                            name="duration" value="{{ old('duration') }}" required autocomplete="duration" autofocus>

                        @error('duration')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="description" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Description') }}:
                        </label>

                        <textarea id="description" class="form-input w-full @error('description')  border-red-500 @enderror"
                            name="description" value="" required autocomplete="write study program description here" autofocus>{{ old('description') }}</textarea>

                        @error('description')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    {{-- <input name="user_id" type="hidden" value="{{ Auth::user()->id }}">  --}}
                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                            {{ __('Create') }}
                        </button>

                        <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                            <a href="{{ route('study_programs.index') }}">cancel</a>
                        </p>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection
