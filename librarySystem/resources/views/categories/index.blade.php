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
    <li>{{$category -> name}}</li>
    @endforeach
    <a href="{{ route('categories.create') }}">Create category</a>
</ul>   
</body>
</html>