<form method="POST" action="{{ route('job_relationships.destroy', $job->jobRelationships()->where('job_position_id', $job->id)->first()->id)}}">
    @csrf
    @method('DELETE')
        <button type="submit" class="btn btn-danger">
            {{ __('Delete') }}
        </button>
</form>
