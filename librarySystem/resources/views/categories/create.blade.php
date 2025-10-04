<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Category</title>
</head>
<body>

<h1>New Category</h1>

<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="category name" required>
    <button type="submit">Save</button>
</form>

<a href="{{ route('categories.index') }}">Go to list</a>

</body>
</html>
