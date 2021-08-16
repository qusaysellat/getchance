<p>The following study program is provided:</p>
<h2>PROGNAME: {{ $program->progname }}</h2>
<h2>LEVEL: {{ $program->level }}</h2>
<h2>DURATION: {{ $program->duration }} months</h2>
<h2>DESCRIPTION: {{ $program->description }}</h2>
<br>
@if(Auth::user()->id == $program->user->id)
    <a href="{{ route('study_programs.edit', $program->id) }}">EDIT</a>
    <br>
    <br>
    <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                action="{{ route('study_programs.destroy', $program->id)}}">
                @csrf
                @method('DELETE')
                <button type="submit">
                    {{ __('Delete') }}
                </button>
    </form>
@endif
@if(Auth::user()->usertype == 1)
    @if($program->studyRelationships()->where('user_id', Auth::user()->id)->count() == 0)
        @include('studyrelationship.create')
    @else
        <p>Do you want to delete study relationship?</p>
        @include('studyrelationship.delete')
    @endif
    <br>
@endif
<p>list of people applied:</p>
<ul>
    @foreach ($program->studyRelationships as $relationship )
        <li>{{ $relationship->user->username }}
            @if($relationship->approved == 0)
                (NOT APPROVED YET)
            @else
                (APPROVED)
            @endif
            <br>
            @if(Auth::user()->usertype == 3)
                @if(Auth::user()->id == $program->user->id)
                    <p>EDIT This Application</p>
                    @include('studyrelationship.edit')
                    <p>DELETE This Application</p>
                    @include('studyrelationship.delete')
                    <br>
                @endif
                <br>
            @endif
        </li>
    @endforeach
</ul>
<br><br>
