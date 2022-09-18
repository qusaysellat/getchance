<form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
    action="{{ route('messages.store') }}">
    @csrf

    <div class="flex flex-wrap">
        <label for="content" class="form-label">
            {{ __('Write new message here') }}:
        </label>

        <textarea rows="5" id="content" class="form-control @error('content')  border-red-500 @enderror"
            name="content" value="" required autocomplete="write post content here" >{{ old('content') }}</textarea>

        @error('content')
        <p class="text-red-500 text-xs italic mt-4">
            <span class="text-danger">{{ $message }}</span>
        </p>
        @enderror
    </div>

    <input name="user1_id" type="hidden" value="{{ Auth::user()->id }}">
    <input name="user2_id" type="hidden" value="{{ $user->id }}">

    <div class="flex flex-wrap mb-3">
        <button type="submit"
            class="btn btn-primary">
            {{ __('Send Message') }}
        </button>
    </div>
</form>
