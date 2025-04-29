<h1>Edit Blog</h1>
<form method="POST" action="{{ route('blogs.update', $blog->id) }}">
    @csrf
    @method('PUT')
    <input name="title" value="{{ $blog->title }}">
    <textarea name="description">{{ $blog->description }}</textarea>
    <button type="submit">Update</button>
</form>
