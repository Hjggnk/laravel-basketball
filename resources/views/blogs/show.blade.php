@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Blog Details</h1>
    <div class="card">
        <div class="card-header">
            {{ $blog->title }}
        </div>
        <div class="card-body">
            <p>{{ $blog->content }}</p>
            <p><strong>Author: </strong>{{ $blog->user->name }}</p>
            <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
