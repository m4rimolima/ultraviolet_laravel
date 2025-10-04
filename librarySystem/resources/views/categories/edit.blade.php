<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoria</title>
</head>
<body>
    <h1>Editar Categoria</h1>

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nome da Categoria:</label>
        <input type="text" id="name" name="name" value="{{ $category->name }}" required>
        <br><br>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('categories.index') }}">Voltar para lista</a>
</body>
</html>
