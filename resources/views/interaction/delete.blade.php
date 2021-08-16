<form method="POST" action="{{ route('interactions.destroy', $post->id)}}">
    @csrf
    @method('DELETE')
        <button type="submit">
            {{ __('Delete Interaction') }}
        </button>
</form>
