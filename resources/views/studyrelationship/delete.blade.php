<form method="POST" action="{{ route('study_relationships.destroy', $program->studyRelationships()->where('study_program_id', $program->id)->first()->id)}}">
    @csrf
    @method('DELETE')
        <button type="submit">
            {{ __('Delete') }}
        </button>
</form>
