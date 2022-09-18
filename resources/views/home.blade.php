@extends('layouts.app')

@section('content')
<main class="">
    <div class="">

        @if (session('status'))
            <div class="" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="p-5">
            <div class="container m-1 mb-5">
                <div class="alert alert-primary">
                    <h1>People</h1>
                </div>
                <div class="row row-cols-md-3 row-cols-lg-5 text-center g-4">
                    @foreach ($people as $item)
                        @include('user.showItem')
                    @endforeach
                </div>
            </div>
            <div class="container m-1 mb-5">
                <div class="alert alert-primary">
                    <h1>Companies</h1>
                </div>
                <div class="row row-cols-md-3 row-cols-lg-5 text-center g-4">
                    @foreach ($companies as $item)
                        @include('user.showItem')
                    @endforeach
                </div>
            </div>
            <div class="container m-1 mb-5">
                <div class="alert alert-primary">
                    <h1>Educationals</h1>
                </div>
                <div class="row row-cols-md-3 row-cols-lg-5 text-center g-4">
                    @foreach ($educationals as $item)
                        @include('user.showItem')
                    @endforeach
                </div>
            </div>
            <div class="container m-1 mb-5">
                <div class="alert alert-info">
                    <h1>Users Posted in This Website</h1>
                </div>
                <div class="row text-center g-4">
                    @foreach ($posts as $post)
                        @include('post.showItem')
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
