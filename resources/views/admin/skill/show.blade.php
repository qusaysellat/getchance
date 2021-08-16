<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(!is_null($skill))
        <h2>ID: {{ $skill->id }}</h2>
        <h2>NAME: {{ $skill->name }}</h2>
        <h2>IMPORTANCE: {{ $skill->importance }}</h2>
        <h2>CREATED: {{ $skill->created_at }}</h2>
        <h2>UPDATED: {{ $skill->updated_at }}</h2>
        <a href="{{ route('skills.edit', $skill->id) }}">EDIT</a>
    @else
        <p>NO SUCH SKILL</p>
    @endif
</body>
</html>
