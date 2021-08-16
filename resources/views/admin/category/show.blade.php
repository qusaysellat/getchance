<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(!is_null($category))
        <h2>ID: {{ $category->id }}</h2>
        <h2>NAME: {{ $category->name }}</h2>
        <h2>IMPORTANCE: {{ $category->importance }}</h2>
        <h2>CREATED: {{ $category->created_at }}</h2>
        <h2>UPDATED: {{ $category->updated_at }}</h2>
        <a href="{{ route('categories.edit', $category->id) }}">EDIT</a>
    @else
        <p>NO SUCH CATEGORY</p>
    @endif
</body>
</html>
