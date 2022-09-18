<div class="container border-bottom border-info">
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Company Name:
        </div>
        <div class="h3 col-md">
            <a href="{{ route('users.show', $job->user->id) }}" class="h3">{{ $job->user->username }}</a>
        </div>
    </div>
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Department Name:
        </div>
        <div class="h3 col-md">
            {{ $job->depname }}
        </div>
    </div>
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Position:
        </div>
        <div class="h3 col-md">
            {{ $job->position }}
        </div>
    </div>
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Job description:
        </div>
        <div class="h3 col-md">
            {{ $job->description }}
        </div>
    </div>
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Category:
        </div>
        <div class="h3 col-md">
            {{ $job->category->name }}
        </div>
    </div>
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Skills:
        </div>
        <div class="h3 col-md">
            @foreach ($job->skills as $skill)
                {{ $skill->name }} <br/>
            @endforeach
        </div>
    </div>
    <div class="alert alert-secondary">
        <p class="text-info">Number of people who worked in this job: <span class="badge bg-primary"> {{ $job->jobRelationships->count()}} </span></p>
        <div class="row row-cols-md-4 row-cols-lg-6">
            @foreach ($job->jobRelationships as $relationship )
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
