@extends('layouts.app')

@section('content')
<main class="">
    <div class="">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="p-5">
            <div class="container">
                <div class="alert alert-secondary">
                    <i class="h1 bi bi-person-circle"></i>
                    <h1>{{ $user->username }}</h1>
                    @if(Auth::user()->id != $user->id)
                        <a class="mt-3 btn btn-primary" href="{{ route('messages.index', $user->id) }}">Send Message</a>
                    @endif
                </div>
                @php
                    $contact = $user->contact;
                @endphp
                @include('contact.showItem')
                <div class="alert alert-info mt-5">
                    <h2>
                        Job positions provided by this company:
                        @if(Auth::user()->id == $user->id)
                            <a href="{{ route('job_positions.create') }}" class="btn btn-lg btn-primary"><i class="bi bi-plus-lg"></i> Create New Job Position</a>
                        @endif
                    </h2>
                </div>
                @foreach ($user->jobPositions as $job )
                    @include('jobposition.showItemExtended')
                @endforeach
                <div class="alert alert-info mt-5">
                    <h2>
                        Posts:
                    </h2>
                </div>
                @if(Auth::user()->id == $user->id)
                    <div class="p-2">
                        <a class="btn btn-primary btn-block" href="{{ route('posts.create')}}"><i class="bi bi-plus-lg"></i> Create new Post</a>
                    </div>
                @endif
                @foreach ($user->posts as $post)
                    `@include('post.showItem')
                @endforeach
            </div>
        </section>
    </div>
</main>
@endsection
