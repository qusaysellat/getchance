<form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
    action="{{ route('study_relationships.update', $relationship->id) }}">
    @csrf
    @method('PUT')

    <div class="flex flex-wrap">
        <label for="start" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
            {{ __('Start of Study') }}:
        </label>

        <input id="start" type="date" class="form-input w-full @error('start')  border-red-500 @enderror"
            name="start" value="{{ $relationship->start }}" required autocomplete="start" >

        @error('start')
        <p class="text-red-500 text-xs italic mt-4">
            {{ $message }}
        </p>
        @enderror
    </div>
    <div class="flex flex-wrap">
        <label for="finish" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
            {{ __('Finish of Study') }}:
        </label>

        <input id="finish" type="date" class="form-input w-full @error('finish')  border-red-500 @enderror"
            name="finish" value="{{ $relationship->finish }}" required autocomplete="finish" >

        @error('finish')
        <p class="text-red-500 text-xs italic mt-4">
            {{ $message }}
        </p>
        @enderror
    </div>
    <div class="flex flex-wrap">
        <label for="approved" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
            {{ __('Approved?') }}:
        </label>

        <select name="approved" id="approved"  class="form-input w-full">
            <option value="1" @if($relationship->approved==1)
                {{ 'selected' }}
            @endif> YES </option>
            <option value="0" @if($relationship->approved==0)
                {{ 'selected' }}
            @endif> NO </option>
        </select>

        @error('approved')
        <p class="text-red-500 text-xs italic mt-4">
            {{ $message }}
        </p>
        @enderror
    </div>
    <div class="flex flex-wrap">
        <label for="rating" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
            {{ __('rating of Study (1 to 10)') }}:
        </label>

        <input id="rating" type="number" class="form-input w-full @error('rating')  border-red-500 @enderror"
            name="rating" value="{{ $relationship->rating }}" autocomplete="rating" >

        @error('rating')
        <p class="text-red-500 text-xs italic mt-4">
            {{ $message }}
        </p>
        @enderror
    </div>
    <div class="flex flex-wrap">
        <label for="comment" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
            {{ __('Comment') }}:
        </label>

        <textarea id="comment" class="form-input w-full @error('comment')  border-red-500 @enderror"
                            name="comment" value="" autocomplete="write post comment here" >{{ $relationship->comment }}</textarea>

        @error('comment')
        <p class="text-red-500 text-xs italic mt-4">
            {{ $message }}
        </p>
        @enderror
    </div>
    <input name="study_program_id" type="hidden" value="{{ $program->id }}">
    <div class="flex flex-wrap">
        <button type="submit"
            class="btn btn-info">
            {{ __('UPDATE') }}
        </button>
    </div>
</form>
