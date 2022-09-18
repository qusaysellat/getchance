@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="container">
        <div class="container">
            <section class="p-3 flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="h1 text-center">
                    {{ __('Create New Post') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ route('posts.store') }}">
                    @csrf
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <div class="mb-3">
                            <label for="title" class="form-label">
                                {{ __('Post Title') }}:
                            </label>

                            <input id="title" type="text" class="form-control @error('title')  border-red-500 @enderror"
                                name="title" value="{{ old('title') }}" required autocomplete="title" >
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">
                                {{ __('Post Content') }}:
                            </label>

                            <textarea id="content" rows="10" class="form-control @error('content')  border-red-500 @enderror"
                                name="content" value="" required autocomplete="write post content here" >{{ old('content') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="posttype" class="form-label">
                                {{ __('Select Posttype') }}
                            </label>

                            <select name="posttype" id="posttype"  class="form-select">
                                <option value="1" selected> Not Applicable </option>
                                <option value="2"> Applicable </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="category_id" class="form-label">
                                {{ __('Select Category') }}
                            </label>

                            <select name="category_id" id="category_id"  class="form-select">
                                @foreach ($categories as $category )
                                    <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="skill_1" class="form-label">
                                {{ __('Select First Skill') }}
                            </label>

                            <select name="skill_1" id="Skill_1"  class="form-select">
                                @foreach ($skills as $skill )
                                    <option value="{{ $skill->id }}"> {{ $skill->name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="skill_2" class="form-label">
                                {{ __('Select Second Skill') }}
                            </label>

                            <select name="skill_2" id="Skill_2"  class="form-select">
                                @foreach ($skills as $skill )
                                    <option value="{{ $skill->id }}"> {{ $skill->name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="skill_3" class="form-label">
                                {{ __('Select Third Skill') }}
                            </label>

                            <select name="skill_3" id="Skill_3"  class="form-select">
                                @foreach ($skills as $skill )
                                    <option value="{{ $skill->id }}"> {{ $skill->name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            @include("post.errors")
                        </div>
                        <input name="user_id" type="hidden" value="{{ Auth::user()->id }}">
                        <div class="mb-3">
                            <button type="submit"
                                class="btn btn-lg btn-primary">
                                {{ __('Create') }}
                            </button>

                            <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">

                            </p>
                        </div>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection
