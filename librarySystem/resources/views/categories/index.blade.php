<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    @foreach ($categories as $category)
        <li>
            {{ $category->name }} | 
            <a href="{{ route('categories.edit', $category->id) }}">Editar</a>
        </li>
    @endforeach
    </ul>
<a href="{{ route('categories.create') }}">Create category</a>

</body>
</html>