<form method="POST" action="{{ route('friendships.destroy', $friendship->id)}}">
    @csrf
    @method('DELETE')
        <button type="submit" class="btn btn-danger">
            {{ __('Delete Friendship') }}
        </button>
</form>
