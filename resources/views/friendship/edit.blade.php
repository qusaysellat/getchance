<form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
    action="{{ route('friendships.update', $friendship->id) }}">
    @csrf
    @method('PUT')

    <input name="user1_id" type="hidden" value="{{ $friendship->user1->id }}">
    <input name="user2_id" type="hidden" value="{{ $friendship->user2->id }}">
    <div class="flex flex-wrap">
        <button type="submit"
            class="btn btn-success">
            {{ __('Approve Friendship') }}
        </button>
    </div>
</form>
