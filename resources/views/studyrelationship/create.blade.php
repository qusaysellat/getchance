<header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
    {{ __('Create Study Relationship') }}
</header>

<form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
    action="{{ route('study_relationships.store') }}">
    @csrf
    <div class="flex flex-wrap">
        <label for="start" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
            {{ __('Start of Study') }}:
        </label>

        <input id="start" type="date" class="form-input w-full @error('start')  border-red-500 @enderror"
            name="start" value="{{ old('start') }}" required autocomplete="start" autofocus>

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
            name="finish" value="{{ old('finish') }}" required autocomplete="finish" autofocus>

        @error('finish')
        <p class="text-red-500 text-xs italic mt-4">
            {{ $message }}
        </p>
        @enderror
    </div>
    <input name="study_program_id" type="hidden" value="{{ $program->id }}">
    <div class="flex flex-wrap">
        <button type="submit"
            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
            {{ __('APPLY') }}
        </button>
    </div>
</form>
