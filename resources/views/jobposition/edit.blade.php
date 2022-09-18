@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="container">
        <div class="container">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="h1 text-center">
                    {{ __('EDIT Job Position') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ route('job_positions.update', $jobPosition->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="flex flex-wrap">
                        <label for="depname" class="form-label">
                            {{ __('Department Name') }}:
                        </label>

                        <input id="depname" type="text" class="form-control @error('depname')  border-red-500 @enderror"
                            name="depname" value="{{ $jobPosition->depname }}" required autocomplete="depname" >

                        @error('depname')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="position" class="form-label">
                            {{ __('Position') }}:
                        </label>

                        <input id="position" type="text" class="form-control @error('position')  border-red-500 @enderror"
                            name="position" value="{{ $jobPosition->position }}" required autocomplete="position" >

                        @error('position')
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
                            name="description" value="" required autocomplete="write job position description here" >{{ $jobPosition->description }}</textarea>

                        @error('description')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="category_id" class="form-label">
                            {{ __('Select Category') }}
                        </label>

                        <select name="category_id" id="category_id"  class="form-select">
                            @foreach ($categories as $category )
                                <option value="{{ $category->id }}" @if($jobPosition->category->id==$category->id)
                                    {{ 'selected' }}
                                @endif> {{ $category->name }} </option>
                            @endforeach
                        </select>

                        @error('category_id')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="skill_1" class="form-label">
                            {{ __('Select First Skill') }}
                        </label>

                        <select name="skill_1" id="Skill_1"  class="form-select">
                            @foreach ($skills as $skill )
                                <option value="{{ $skill->id }}" @if($data[1]==$skill->id)
                                    {{ 'selected' }}
                                @endif> {{ $skill->name }} </option>
                            @endforeach
                        </select>

                        @error('skill_1')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="skill_2" class="form-label">
                            {{ __('Select Second Skill') }}
                        </label>

                        <select name="skill_2" id="Skill_2"  class="form-select">
                            @foreach ($skills as $skill )
                                <option value="{{ $skill->id }}" @if($data[2]==$skill->id)
                                    {{ 'selected' }}
                                @endif> {{ $skill->name }} </option>
                            @endforeach
                        </select>

                        @error('skill_2')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="skill_3" class="form-label">
                            {{ __('Select Third Skill') }}
                        </label>

                        <select name="skill_3" id="Skill_3"  class="form-select">
                            @foreach ($skills as $skill )
                                <option value="{{ $skill->id }}" @if($data[3]==$skill->id)
                                    {{ 'selected' }}
                                @endif> {{ $skill->name }} </option>
                            @endforeach
                        </select>

                        @error('skill_3')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="btn btn-warning">
                            {{ __('Update') }}
                        </button>
                    </div>
                </form>
            </section>
        </div>
    </div>
</main>
@endsection
