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
                        Study programs provided by this educational:
                        @if(Auth::user()->id == $user->id)
                            <a href="{{ route('study_programs.create') }}" class="btn btn-lg btn-primary"><i class="bi bi-plus-lg"></i> Create New Study Program</a>
                        @endif
                    </h2>
                </div>
                @foreach ($user->studyPrograms as $program )
                    @include('studyprogram.showItemExtended')
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
