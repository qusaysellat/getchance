@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Edit Post') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ route('posts.update', $post->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="flex flex-wrap">
                        <label for="title" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Post Title') }}:
                        </label>

                        <input id="title" type="text" class="form-input w-full @error('title')  border-red-500 @enderror"
                            name="title" value="{{ $post->title }}" required autocomplete="title" autofocus>

                        @error('title')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="content" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Post Content') }}:
                        </label>

                        <textarea id="content" class="form-input w-full @error('content')  border-red-500 @enderror"
                            name="content" value="" required autocomplete="write post content here" autofocus>{{ $post->content }}</textarea>

                        @error('content')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="posttype" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Select Posttype') }}
                        </label>

                        <select name="posttype" id="posttype"  class="form-input w-full">
                            <option value="1" @if($post->posttype==1)
                                {{ 'selected' }}
                            @endif> Not Applicable </option>
                            <option value="2" @if($post->posttype==2)
                                {{ 'selected' }}
                            @endif> Applicable </option>
                        </select>

                        @error('posttype')
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
                                <option value="{{ $category->id }}" @if($post->category->id==$category->id)
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
                        <label for="skill_1" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Select First Skill') }}
                        </label>

                        <select name="skill_1" id="Skill_1"  class="form-input w-full">
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
                        <label for="skill_2" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Select Second Skill') }}
                        </label>

                        <select name="skill_2" id="Skill_2"  class="form-input w-full">
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
                        <label for="skill_3" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Select Third Skill') }}
                        </label>

                        <select name="skill_3" id="Skill_3"  class="form-input w-full">
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
                    <input name="user_id" type="hidden" value="{{ Auth::user()->id }}">
                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                            {{ __('Edit') }}
                        </button>

                        <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">

                        </p>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection
