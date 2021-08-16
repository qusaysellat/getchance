<p>The following job position is provided:</p>
<h2>DEPNAME: {{ $job->depname }}</h2>
<h2>POSITON: {{ $job->position }}</h2>
<h3>CATEGORY: {{ $job->category->name }}</h3>
@foreach ($job->skills as $skill)
    <h5>SKILL: {{ $skill->name }}</h5>
@endforeach
<p>DESCRIPTION: {{ $job->description }}</p>
<br>
@if(Auth::user()->id == $job->user->id)
    <a href="{{ route('job_positions.edit', $job->id) }}">EDIT</a>
    <br>
    <br>
    <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                action="{{ route('job_positions.destroy', $job->id)}}">
                @csrf
                @method('DELETE')
                    <button type="submit">
                    {{ __('Delete') }}
                </button>
    </form>
@endif
@if(Auth::user()->usertype == 1)
        @if($job->jobRelationships()->where('user_id', Auth::user()->id)->count() == 0)
        @include('jobrelationship.create')
    @else
        <p>Do you want to delete job relationship?</p>
        @include('jobrelationship.delete')
    @endif
    <br>
@endif
<p>list of people applied:</p>
<ul>
    @foreach ($job->jobRelationships as $relationship )
        <li>{{ $relationship->user->username }}
            @if($relationship->approved==0)
                (NOT APPROVED YET)
            @else
                (APPROVED)
            @endif
            <br>
            @if(Auth::user()->usertype == 2)
                @if(Auth::user()->id == $job->user->id)
                    <p>EDIT This Application</p>
                    @include('jobrelationship.edit')
                    <p>DELETE This Application</p>
                    @include('jobrelationship.delete')
                    <br>
                @endif
                <br>
            @endif
        </li>
    @endforeach
</ul>
<br><br>
