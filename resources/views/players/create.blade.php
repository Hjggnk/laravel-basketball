@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Player</h1>
    <form action="{{ route('players.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" name="position" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="team">Team</label>
            <input type="text" name="team" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="image_url">Image URL</label>
            <input type="url" name="image_url" class="form-control">
        </div>
        <button type="submit" class="mt-5 btn btn-primary">Submit</button>
    </form>
</div>
@endsection
