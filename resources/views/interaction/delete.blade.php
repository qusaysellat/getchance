<form method="POST" action="{{ route('interactions.destroy', $post->id)}}">
    @csrf
    @method('DELETE')
        <button type="submit"  class="btn btn-danger">
            {{ __('Delete Interaction') }}
        </button>
</form>
