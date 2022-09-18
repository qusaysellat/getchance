<form method="POST" action="{{ route('study_relationships.destroy', $program->studyRelationships()->where('study_program_id', $program->id)->where('user_id', Auth::user()->id)->first()->id)}}">
    @csrf
    @method('DELETE')
        <button type="submit" class="btn btn-danger">
            {{ __('Delete') }}
        </button>
</form>
