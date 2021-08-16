<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($categories as $category)
            <li>
                <a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ route('categories.destroy', $category->id)}}">
                    @csrf
                    @method('DELETE')
                     <button type="submit">
                        {{ __('Delete') }}
                    </button>
                </form>
            </li>
        @endforeach
    </ul>
    <br>
    <a href="/categories/create">create new category</a>
</body>
</html>
