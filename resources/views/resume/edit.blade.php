@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="container">
        <div class="container">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="h1 text-center">
                    {{ __('Edit Resume') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ route('resumes.update', $resume->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="flex flex-wrap">
                        <label for="name" class="form-label">
                            {{ __('Full Name') }}:
                        </label>

                        <input id="name" type="text" class="form-control @error('name')  border-red-500 @enderror"
                            name="name" value="{{ $resume->name }}" required autocomplete="name" >

                        @error('name')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="dob" class="form-label">
                            {{ __('Date of Birth') }}:
                        </label>

                        <input id="dob" type="date" class="form-control @error('dob')  border-red-500 @enderror"
                            name="dob" value="{{ $resume->dob }}" required autocomplete="dob" >

                        @error('dob')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="gender" class="form-label">
                            {{ __('Gender') }}:
                        </label>

                        <select name="gender" id="gender"  class="form-select">
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
                        <label for="nationality" class="form-label">
                            {{ __('Nationality') }}:
                        </label>

                        <input id="nationality" type="text" class="form-control @error('nationality')  border-red-500 @enderror"
                            name="nationality" value="{{ $resume->nationality }}" required autocomplete="nationality" >

                        @error('nationality')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="address" class="form-label">
                            {{ __('Address') }}:
                        </label>

                        <input id="address" type="text" class="form-control @error('address')  border-red-500 @enderror"
                            name="address" value="{{ $resume->address }}" autocomplete="address" >

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
                            name="phone" value="{{ $resume->phone }}" autocomplete="phone" >

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
                            name="email" value="{{ $resume->email }}" autocomplete="email" >

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
                            name="website" value="{{ $resume->website }}" autocomplete="website" >

                        @error('website')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="summary" class="form-label">
                            {{ __('Summary') }}:
                        </label>

                        <textarea id="summary" class="form-control @error('summary')  border-red-500 @enderror"
                            name="summary" value="" autocomplete="write resume summary here" >{{ $resume->summary }}</textarea>

                        @error('summary')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="education" class="form-label">
                            {{ __('Education') }}:
                        </label>

                        <textarea id="education" class="form-control @error('education')  border-red-500 @enderror"
                            name="education" value="" autocomplete="write resume education here" >{{ $resume->education }}</textarea>

                        @error('education')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="experience" class="form-label">
                            {{ __('Experience') }}:
                        </label>

                        <textarea id="experience" class="form-control @error('experience')  border-red-500 @enderror"
                            name="experience" value="" autocomplete="write resume experience here" >{{ $resume->experience }}</textarea>

                        @error('experience')
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
