@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Blog</h1>
    <form action="{{ route('blogs.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" rows="30" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary my-5">Submit</button>
    </form>
</div>
@endsection
