@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('New Job Position') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ route('job_positions.store') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="depname" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Depname') }}:
                        </label>

                        <input id="depname" type="text" class="form-input w-full @error('depname')  border-red-500 @enderror"
                            name="depname" value="{{ old('depname') }}" required autocomplete="depname" autofocus>

                        @error('depname')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="position" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Position') }}:
                        </label>

                        <input id="position" type="text" class="form-input w-full @error('position')  border-red-500 @enderror"
                            name="position" value="{{ old('position') }}" required autocomplete="position" autofocus>

                        @error('position')
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
                            name="description" value="" required autocomplete="write job position description here" autofocus>{{ old('description') }}</textarea>

                        @error('description')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="category_id" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Select Category') }}
                        </label>

                        <select name="category_id" id="category_id"  class="form-input w-full">
                            @foreach ($categories as $category )
                                <option value="{{ $category->id }}"> {{ $category->name }} </option>
                            @endforeach
                        </select>

                        @error('category_id')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="skill_1" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Select First Skill') }}
                        </label>

                        <select name="skill_1" id="Skill_1"  class="form-input w-full">
                            @foreach ($skills as $skill )
                                <option value="{{ $skill->id }}"> {{ $skill->name }} </option>
                            @endforeach
                        </select>

                        @error('skill_1')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="skill_2" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Select Second Skill') }}
                        </label>

                        <select name="skill_2" id="Skill_2"  class="form-input w-full">
                            @foreach ($skills as $skill )
                                <option value="{{ $skill->id }}"> {{ $skill->name }} </option>
                            @endforeach
                        </select>

                        @error('skill_2')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="skill_3" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Select Third Skill') }}
                        </label>

                        <select name="skill_3" id="Skill_3"  class="form-input w-full">
                            @foreach ($skills as $skill )
                                <option value="{{ $skill->id }}"> {{ $skill->name }} </option>
                            @endforeach
                        </select>

                        @error('skill_3')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    {{-- <input name="user_id" type="hidden" value="{{ Auth::user()->id }}"> --}}
                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                            {{ __('Create') }}
                        </button>

                        <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                            <a href="{{ route('job_positions.index') }}">cancel</a>
                        </p>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection
