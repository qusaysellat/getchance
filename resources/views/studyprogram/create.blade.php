@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="container">
        <div class="container">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="h1 text-center">
                    {{ __('New Study Program') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ route('study_programs.store') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="progname" class="form-label">
                            {{ __('Program Name') }}:
                        </label>

                        <input id="progname" type="text" class="form-control @error('progname')  border-red-500 @enderror"
                            name="progname" value="{{ old('progname') }}" required autocomplete="progname" >

                        @error('progname')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="level" class="form-label">
                            {{ __('Level') }}:
                        </label>

                        <input id="level" type="text" class="form-control @error('level')  border-red-500 @enderror"
                            name="level" value="{{ old('level') }}" required autocomplete="level" >

                        @error('level')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="duration" class="form-label">
                            {{ __('Duration (months)') }}
                        </label>

                        <input id="duration" type="text" class="form-control @error('duration')  border-red-500 @enderror"
                            name="duration" value="{{ old('duration') }}" required autocomplete="duration" >

                        @error('duration')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="description" class="form-label">
                            {{ __('Description') }}:
                        </label>

                        <textarea id="description" class="form-control @error('description')  border-red-500 @enderror"
                            name="description" value="" required autocomplete="write study program description here" >{{ old('description') }}</textarea>

                        @error('description')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="btn btn-primary">
                            {{ __('Create') }}
                        </button>
                    </div>
                </form>
            </section>
        </div>
    </div>
</main>
@endsection
