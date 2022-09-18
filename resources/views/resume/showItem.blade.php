<div class="container border-bottom border-info">
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Full name:
        </div>
        <div class="h3 col-md">
            {{ $resume->name }}
        </div>
    </div>
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Date of birth:
        </div>
        <div class="h3 col-md">
            {{ $resume->dob }}
        </div>
    </div>
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Gender:
        </div>
        <div class="h3 col-md">
            {{ ($resume->gender==0)? 'Male' : 'Female' }}
        </div>
    </div>
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Nationality:
        </div>
        <div class="h3 col-md">
            {{ $resume->nationality }}
        </div>
    </div>
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Address:
        </div>
        <div class="h3 col-md">
            {{ $resume->address }}
        </div>
    </div>
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Phone:
        </div>
        <div class="h3 col-md">
            {{ $resume->phone }}
        </div>
    </div>
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Email:
        </div>
        <div class="h3 col-md">
            {{ $resume->email }}
        </div>
    </div>
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Website:
        </div>
        <div class="h3 col-md">
            {{ $resume->website }}
        </div>
    </div>
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Summary:
        </div>
        <div class="h3 col-md">
            {{ $resume->summary }}
        </div>
    </div>
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Education Summary:
        </div>
        <div class="h3 col-md">
            {{ $resume->education }}
        </div>
    </div>
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Experience Summary:
        </div>
        <div class="h3 col-md">
            {{ $resume->experience }}
        </div>
    </div>
    @if(Auth::user()->id == $resume->user->id)
        <div class="row">
            <a href="{{ route('resumes.edit', $resume->id) }}" class="btn btn-warning">Edit Resume</a>
        </div>
    @endif
</div>

