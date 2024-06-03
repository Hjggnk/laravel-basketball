@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Blogs</h1>
    <a href="{{ route('blogs.create') }}" class="btn btn-primary">Add Blog</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Author</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)
            <tr>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->content }}</td>
                <td>{{ $blog->user->name }}</td>
                <td>
                    <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
