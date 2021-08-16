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
                Welcome {{ Auth::user()->username }}
            </header>
            <div class="w-full p-6">
                <h1>See info of user {{ $user->username }}</h1>
                <br>
                @php
                    $resume = $user->resume;
                @endphp
                @include('resume.showItem')
                @foreach ($user->studyRelationshipsOfPerson as $studyRelationship)
                    @if($studyRelationship->approved == 1)
                        @php
                            $program = $studyRelationship->studyProgram;
                        @endphp
                        @include('studyprogram.showItem')
                    @endif
                @endforeach
                @foreach ($user->jobRelationshipsOfPerson as $jobRelationship)
                    @if($jobRelationship->approved == 1)
                        @php
                            $job = $jobRelationship->jobPosition;
                        @endphp
                        @include('jobposition.showItem')
                    @endif
                @endforeach
                @if(Auth::user()->usertype == 1)
                    @if(($user->id != Auth::user()->id) and ($user->areFriends(Auth::user()) == false))
                        @include('friendship.create')
                    @endif
                @endif
                @foreach ($user->toFriendships as $friendship )
                    @if($friendship->approved == 1)
                        <h2>this user is a friend of : {{ $friendship->user2->username }}</h2>
                    @endif
                    @if(Auth::user()->usertype == 1)
                        @if ($friendship->user2->id == Auth::user()->id)
                            @if ($friendship->approved == 0)
                                @include('friendship.edit')
                            @endif
                            @include('friendship.delete')
                        @endif
                    @endif
                @endforeach
                @foreach ($user->fromFriendships as $friendship )
                    @if($friendship->approved == 1)
                        <h2>this user is a friend of : {{ $friendship->user1->username }}</h2>
                    @endif
                    @if(Auth::user()->usertype == 1)
                        @if ($friendship->user1->id == Auth::user()->id)
                            @include('friendship.delete')
                        @endif
                    @endif
                @endforeach
            </div>
        </section>
    </div>
</main>
@endsection
