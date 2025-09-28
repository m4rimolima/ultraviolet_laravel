<form action="{{route('categories.store')}" method="post">
    @csrf
    <label for="name">Category name: </label>
    <input type="text" name="name" id="name">
    <input type="submit" value="Create Category">
</form>