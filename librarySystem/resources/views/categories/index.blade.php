<ul>
@foreach ($categories as $category)
    <li>
        {{ $category->name }} | 
        <a href="{{ route('categories.edit', $category->id) }}">Edit</a>
        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this?')">
        </form>
    </li>
@endforeach
</ul>

<a href="{{ route('categories.create') }}">Create Category</a>
