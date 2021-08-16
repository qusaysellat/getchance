<form method="POST" action="{{ route('friendships.destroy', $friendship->id)}}">
    @csrf
    @method('DELETE')
        <button type="submit">
            {{ __('Delete Friendship') }}
        </button>
</form>
