<div class="col-md">
    <div class="card bg-dark text-light">
        <div class="card-body text-center">
            <div class="h1 mb-3">
                <i class="bi bi-person-circle"></i>
            </div>
            <div class="h3 mb-3">
                {{ $item->username }}
            </div>
            @if($item->status == 0)
                <p class="text-warning"><i class="bi bi-clock-fill text-warning"></i> not verified</p>
                @if(Auth::user()->usertype == 0)
                    <p><a class="" href="{{ route('users.verify', $item->id) }}">VERIFY ..</a></p>
                @endif
            @else
                <p class="text-success"><i class="bi bi-check-circle-fill text-success"></i> verified</p>
                @if(Auth::user()->usertype == 0)
                    <p><a class="" href="{{ route('users.unverify', $item->id) }}">UNVERIFY ..</a></p>
                @endif
            @endif
            <a class="btn btn-primary" href="{{ route('users.show', $item->id) }}" class="h3">See more</a>
            @if(Auth::user()->id != $item->id)
                <a class="btn btn-info" href="{{ route('messages.index', $item->id) }}"><i class="bi bi-envelope"></i></a>
            @endif
        </div>
    </div>
</div>
