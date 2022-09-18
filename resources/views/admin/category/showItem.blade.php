<div class="container border-bottom border-success mb-3 pb-3">
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Name:
        </div>
        <div class="h3 col-md">
            {{ $category->name }}
        </div>
    </div>
    <div class="row row-cols-md-2">
        <div class="h3 col-md">
            Popularity:
        </div>
        <div class="h3 col-md">
            {{ $category->importance }}
        </div>
    </div>
    <div class="row m-1">
        <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
            action="{{ route('categories.update', $category->id) }}">
            @csrf
            @method('PUT')

            <div class="flex flex-wrap">
                <label for="name" class="form-label">
                    {{ __('Update category name') }}:
                </label>

                <input id="name" type="text" class="form-control @error('name')  border-red-500 @enderror"
                    name="name" value="{{ $category->name }}" required autocomplete="name" >

                @error('name')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div class="flex flex-wrap">
                <button type="submit"
                    class="btn btn-warning">
                    {{ __('Update') }}
                </button>
            </div>
        </form>
    </div>
    <div class="row m-1">
        <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
            action="{{ route('categories.destroy', $category->id)}}">
            @csrf
            @method('DELETE')
                <button class="btn btn-danger" type="submit">
                {{ __('Delete') }}
            </button>
        </form>
    </div>
</div>
