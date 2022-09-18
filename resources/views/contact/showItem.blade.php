<div class="container border-bottom border-info">
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Address:
        </div>
        <div class="h3 col-md">
            {{ $contact->address }}
        </div>
    </div>
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Phone:
        </div>
        <div class="h3 col-md">
            {{ $contact->phone }}
        </div>
    </div>
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Email:
        </div>
        <div class="h3 col-md">
            {{ $contact->email }}
        </div>
    </div>
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Website:
        </div>
        <div class="h3 col-md">
            {{ $contact->website }}
        </div>
    </div>
    @if(Auth::user()->id == $contact->user->id)
        <div class="row">
            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning">Edit Contact</a>
        </div>
    @endif
</div>
