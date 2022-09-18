@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="container">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <section class="container p-5 flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
            <div class="alert alert-secondary text-center">
                <h1>Categories</h1>
            </div>
            <div class="container border-bottom border-primary mb-3 pb-3">
                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ route('categories.store') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="name" class="form-label">
                            {{ __('Create new category') }}:
                        </label>

                        <input id="name" type="text" class="form-control @error('name')  border-red-500 @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" >

                        @error('name')
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
            </div>
            <div class="">
                @foreach ($categories as $category)
                    @include('admin.category.showItem')
                @endforeach
            </div>
        </section>
    </div>
</main>
@endsection
