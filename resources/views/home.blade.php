@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Users
            </header>

            <div class="w-full p-6">
                <p class="text-gray-700">
                    List of Users in This Website
                </p>
            </div>
            <div class="w-full p-6">
                <h1>LIST OF USERS OF TYPE "PERSON" IN THIS WEBSITE</h1>
                @foreach ($people as $item)
                    @include('user.showItem')
                @endforeach
                <br><br>
                <h1>LIST OF USERS OF TYPE "COMPANY" IN THIS WEBSITE</h1>
                @foreach ($companies as $item)
                    @include('user.showItem')
                @endforeach
                <br><br>
                <h1>LIST OF USERS OF TYPE "EDUCATIONAL" IN THIS WEBSITE</h1>
                @foreach ($educationals as $item)
                    @include('user.showItem')
                @endforeach
            </div>
        </section>

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Posts
            </header>

            <div class="w-full p-6">
                <p class="text-gray-700">
                    List of Posts in This Website
                </p>
            </div>
            <div class="w-full p-6">
                @foreach ($posts as $post)
                    @include('post.showItem')
                @endforeach
            </div>
        </section>
    </div>
</main>
@endsection
