<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit category</title>
</head>
<body>
    <h1>Edit category</h1>

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Category name:</label>
        <input type="text" id="name" name="name" value="{{ $category->name }}" required>
        <br><br>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('categories.index') }}">Go to list</a>
</body>
</html>
