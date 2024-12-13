<form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" required>

    <label for="content">Content</label>
    <textarea name="content" required></textarea>

    <label for="image">Image</label>
    <input type="file" name="image" accept="image/*">

    <button type="submit">Save</button>
</form>