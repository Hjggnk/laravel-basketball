@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Player Details</h1>
    <div class="card">
        <div class="card-header">
            {{ $player->name }}
        </div>
        <div class="card-body">
            @if($player->image_url)
                <img src="{{ $player->image_url }}" alt="{{ $player->name }}" class="img-fluid mb-3">
            @endif
            <p><strong>Age: </strong>{{ $player->age }}</p>
            <p><strong>Position: </strong>{{ $player->position }}</p>
            <p><strong>Team: </strong>{{ $player->team }}</p>
            <a href="{{ route('players.edit', $player->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('players.destroy', $player->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
