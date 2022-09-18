<div class="container border-bottom border-info">
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Program Name:
        </div>
        <div class="h3 col-md">
            {{ $program->progname }}
        </div>
    </div>
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Program Level:
        </div>
        <div class="h3 col-md">
            {{ $program->level }}
        </div>
    </div>
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Program duration (months):
        </div>
        <div class="h3 col-md">
            {{ $program->duration }}
        </div>
    </div>
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Program description:
        </div>
        <div class="h3 col-md">
            {{ $program->description }}
        </div>
    </div>
    @if(Auth::user()->id == $program->user->id)
        <a class="btn btn-warning text-light" href="{{ route('study_programs.edit', $program->id) }}">EDIT</a>
        <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ route('study_programs.destroy', $program->id)}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">
                        {{ __('Delete') }}
                    </button>
        </form>
    @endif
    @if(Auth::user()->usertype == 1)
        @if($program->studyRelationships()->where('user_id', Auth::user()->id)->count() == 0)
            @include('studyrelationship.create')
        @else
            <p>Do you want to delete study relationship?</p>
            @include('studyrelationship.deleteUserSide')
        @endif
        <br>
    @endif
    <div class="alert alert-secondary">
        <p class="text-info">Number of people who joined the program: <span class="badge bg-primary"> {{ $program->studyRelationships->count()}} </span></p>
        <div class="row row-cols-md-4 row-cols-lg-6">
            @foreach ($program->studyRelationships as $relationship )
                        <div class="col">
                            <a href="{{ route('users.show', $relationship->user->id) }}">{{ $relationship->user->username }}</a>
                            @if($relationship->approved == 0)
                                <p><span class="inline badge bg-warning">Not approved yet</span></p>
                            @else
                                <p><span class="inline badge bg-success">Approved</span></p>
                                <p><span class="inline badge bg-info">Rating: {{ $relationship->rating }}, {{ $relationship->comment }}</span></p>
                                <p><span class="inline badge bg-secondary">{{ $relationship->start }} to {{ $relationship->finish }}</span></p>
                            @endif
                            @if(Auth::user()->usertype == 3)
                                @if(Auth::user()->id == $program->user->id)

                                    @include('studyrelationship.edit')

                                    @include('studyrelationship.delete')

                                @endif

                            @endif
                        </div>
            @endforeach
        </div>
    </div>
</div>

