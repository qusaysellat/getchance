<form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
    action="{{ route('messages.store') }}">
    @csrf

    <div class="flex flex-wrap">
        <label for="content" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
            {{ __('Write new message here') }}:
        </label>

        <textarea id="content" class="form-input w-full @error('content')  border-red-500 @enderror"
            name="content" value="" required autocomplete="write post content here" autofocus>{{ old('content') }}</textarea>

        @error('content')
        <p class="text-red-500 text-xs italic mt-4">
            {{ $message }}
        </p>
        @enderror
    </div>

    <input name="user1_id" type="hidden" value="{{ Auth::user()->id }}">
    <input name="user2_id" type="hidden" value="{{ $user->id }}">

    <div class="flex flex-wrap">
        <button type="submit"
            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
            {{ __('Send Message') }}
        </button>
    </div>
</form>
