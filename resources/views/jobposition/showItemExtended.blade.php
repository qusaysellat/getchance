<div class="container border-bottom border-info">
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
    @if(Auth::user()->usertype == 2)
        @if(Auth::user()->id == $job->user->id)
            <a href="{{ route('job_positions.edit', $job->id) }}" class="btn btn-warning text-light">Edit</a>
            <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                        action="{{ route('job_positions.destroy', $job->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            Delete
                        </button>
            </form>
        @endif
    @endif
    @if(Auth::user()->usertype == 1)
        @if($job->jobRelationships()->where('user_id', Auth::user()->id)->count() == 0)
            @include('jobrelationship.create')
        @else
            <p>Do you want to delete job relationship?</p>
            @include('jobrelationship.deleteUserSide')
        @endif
        <br>
    @endif
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
                            @if(Auth::user()->usertype == 2)
                                @if(Auth::user()->id == $job->user->id)

                                    @include('jobrelationship.edit')

                                    @include('jobrelationship.delete')

                                @endif

                            @endif
                        </div>
            @endforeach
        </div>
    </div>
</div>

