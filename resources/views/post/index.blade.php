<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>List of Posts in This Website</h1>
    @foreach ($posts as $post)
        <h1>{{ $post->title }}</h1>
        <h2>By {{ $post->user->username }}</h2>
        <h3>{{ $post->category->name }}</h3>
        @foreach ($post->skills as $skill)
            <h5>{{ $skill->name }}</h5>
        @endforeach
        <p>{{ $post->content }}</p>
        <a href="/posts/{{ $post->id }}">See More ..</a>
    @endforeach
</body>
</html>
