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
                    $resume = $user->resume;
                @endphp
                @include('resume.showItem')
                <div class="alert alert-info mt-5">
                    <h2>
                        Education:
                    </h2>
                </div>
                @foreach ($user->studyRelationshipsOfPerson as $studyRelationship)
                    @if(true /*$studyRelationship->approved == 1*/)
                        @php
                            $program = $studyRelationship->studyProgram;
                        @endphp
                        @include('studyprogram.showItem')
                    @endif
                @endforeach
                <div class="alert alert-info mt-5">
                    <h2>
                        Experience:
                    </h2>
                </div>
                @foreach ($user->jobRelationshipsOfPerson as $jobRelationship)
                    @if(true /*$jobRelationship->approved == 1*/)
                        @php
                            $job = $jobRelationship->jobPosition;
                        @endphp
                        @include('jobposition.showItem')
                    @endif
                @endforeach

                <div class="alert alert-info mt-5">
                    <h2>
                        Friendships:
                    </h2>
                </div>
                @include('friendship.showFriends')

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
