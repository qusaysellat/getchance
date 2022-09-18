<div class="container">
    @if(Auth::user()->usertype == 1)
        @if(($user->id != Auth::user()->id) and ($user->areFriends(Auth::user()) == false))
            @include('friendship.create')
        @endif
    @endif
    <div class="alert alert-secondary">
        <div class="row row-cols-md-2 row-cols-lg-4">
            @foreach ($user->toFriendships as $friendship )
                <div class="col">
                    @if($friendship->approved == 1)
                        <a class="h3" href="{{ route('users.show', $friendship->user2->id) }}"><span class="inline badge bg-success">{{ $friendship->user2->username }}</span></a>
                    @else
                        <a class="h3" href="{{ route('users.show', $friendship->user2->id) }}"><span class="inline badge bg-warning">{{ $friendship->user2->username }} (needs approval)</span></a>
                    @endif
                    @if(Auth::user()->usertype == 1)
                        @if ($friendship->user2->id == Auth::user()->id)
                            @if ($friendship->approved == 0)
                                @include('friendship.edit')
                            @endif
                            @include('friendship.delete')
                        @endif
                        @if ($friendship->user1->id == Auth::user()->id)
                            @include('friendship.delete')
                        @endif
                    @endif
                </div>
            @endforeach
            @foreach ($user->fromFriendships as $friendship )
                <div class="col">
                    @if($friendship->approved == 1)
                        <a class="h3" href="{{ route('users.show', $friendship->user1->id) }}"><span class="inline badge bg-success">{{ $friendship->user1->username }}</span></a>
                    @else
                        <a class="h3" href="{{ route('users.show', $friendship->user1->id) }}"><span class="inline badge bg-warning">{{ $friendship->user1->username }} (needs approval)</span></a>
                    @endif
                    @if(Auth::user()->usertype == 1)
                        @if ($friendship->user2->id == Auth::user()->id)
                            @if ($friendship->approved == 0)
                                @include('friendship.edit')
                            @endif
                            @include('friendship.delete')
                        @endif
                        @if ($friendship->user1->id == Auth::user()->id)
                            @include('friendship.delete')
                        @endif
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</div>
