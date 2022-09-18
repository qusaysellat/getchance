<div class="container">
    {{ __('Have you joined this course?') }}
    <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
        action="{{ route('study_relationships.store') }}">
        @csrf
        <div class="flex flex-wrap">
            <label for="start" class="form-label">
                {{ __('Start of Study') }}:
            </label>

            <input id="start" type="date" class="form-control @error('start')  border-red-500 @enderror"
                name="start" value="{{ old('start') }}" required autocomplete="start" >

            @error('start')
            <p class="text-red-500 text-xs italic mt-4">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="flex flex-wrap">
            <label for="finish" class="form-label">
                {{ __('Finish of Study') }}:
            </label>

            <input id="finish" type="date" class="form-control @error('finish')  border-red-500 @enderror"
                name="finish" value="{{ old('finish') }}" required autocomplete="finish" >

            @error('finish')
            <p class="text-red-500 text-xs italic mt-4">
                {{ $message }}
            </p>
            @enderror
        </div>
        <input name="study_program_id" type="hidden" value="{{ $program->id }}">
        <div class="flex flex-wrap">
            <button type="submit"
                class="btn btn-primary">
                {{ __('APPLY') }}
            </button>
        </div>
    </form>
</div>
