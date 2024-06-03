@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Player</h1>
    <form action="{{ route('players.update', $player->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $player->name }}" required>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" class="form-control" value="{{ $player->age }}" required>
        </div>
        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" name="position" class="form-control" value="{{ $player->position }}" required>
        </div>
        <div class="form-group">
            <label for="team">Team</label>
            <input type="text" name="team" class="form-control" value="{{ $player->team }}" required>
        </div>
        <div class="form-group">
            <label for="image_url">Image URL</label>
            <input type="url" name="image_url" class="form-control" value="{{ $player->image_url }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
