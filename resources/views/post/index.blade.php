@extends('layouts.app')

@section('content')
<main class="">
    <div class="">
        <section class="p-5">
            <div class="container m-1 mb-5">
                <div class="alert alert-info">
                    <h1>My Posts</h1>
                </div>
                <div class="p-2">
                    <a class="btn btn-primary btn-block" href="{{ route('posts.create')}}"><i class="bi bi-plus-lg"></i> Create new Post</a>
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
