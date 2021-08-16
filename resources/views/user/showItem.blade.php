<br>
<h2>
    {{ $item->username }}
</h2>
<a href="{{ route('users.show', $item->id) }}">SEE MORE ..</a>
<br>
@if(Auth::user()->id != $item->id)
    <a href="{{ route('messages.index', $item->id) }}">SEND MESSAGE ..</a>
@else
    <a href="{{ route('notifications.index') }}">SEE NOTIFICATIONS ..</a>
@endif
@if(Auth::user()->usertype == 0)
<br>
    @if($item->status == 0)
        <a href="{{ route('users.verify', $item->id) }}">VERIFY ..</a>
    @else
        <a href="{{ route('users.unverify', $item->id) }}">UNVERIFY ..</a>
    @endif
@endif
<br>
