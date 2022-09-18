<div class="container border-bottom border-info">
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Educational Name:
        </div>
        <div class="h3 col-md">
            <a href="{{ route('users.show', $program->user->id) }}" class="h3">{{ $program->user->username }}</a>
        </div>
    </div>
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
                        </div>
            @endforeach
        </div>
    </div>
</div>
