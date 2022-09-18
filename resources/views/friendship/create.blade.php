<form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
    action="{{ route('friendships.store') }}">
    @csrf
    <input name="user1_id" type="hidden" value="{{ Auth::user()->id }}">
    <input name="user2_id" type="hidden" value="{{ $user->id }}">

    <div class="flex flex-wrap">
        <button type="submit"
            class="btn btn-primary">
            {{ __('Send Friendship') }}
        </button>
    </div>
</form>
