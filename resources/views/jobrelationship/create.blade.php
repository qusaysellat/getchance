<div class="container">
    {{ __('Have you worked here?') }}
    <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
        action="{{ route('job_relationships.store') }}">
        @csrf
        <div class="flex flex-wrap">
            <label for="start" class="form-label">
                {{ __('Start of Job') }}:
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
                {{ __('Finish of Job') }}:
            </label>

            <input id="finish" type="date" class="form-control @error('finish')  border-red-500 @enderror"
                name="finish" value="{{ old('finish') }}" required autocomplete="finish" >

            @error('finish')
            <p class="text-red-500 text-xs italic mt-4">
                {{ $message }}
            </p>
            @enderror
        </div>
        <input name="job_position_id" type="hidden" value="{{ $job->id }}">
        <div class="flex flex-wrap">
            <button type="submit"
                class="btn btn-primary">
                {{ __('APPLY') }}
            </button>
        </div>
    </form>
</div>
