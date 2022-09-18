@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="container">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="p-5 flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
            <div class="alert alert-secondary text-center">
                <h1>Control Panel</h1>
            </div>
            <div class="">
                <a class="" href="/categories">Manage Categories</a>
                <br>
                <a class="" href="/skills">Manage Skills</a>
            </div>
        </section>

        <section class="p-5 flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
            <div class="alert alert-secondary text-center">
                <h1>Statistics</h1>
            </div>
            <div class="">
                <div class="row row-cols-md-2">
                    <div class="col-md">
                        Number of Users:
                    </div>
                    <div class="col-md">
                        {{ $data['number_of_users'] }}
                    </div>
                </div>
                <div class="row row-cols-md-2">
                    <div class="col-md">
                        Number of Posts:
                    </div>
                    <div class="col-md">
                        {{ $data['number_of_posts'] }}
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
