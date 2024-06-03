@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Players</h1>
    <a href="{{ route('players.create') }}" class="btn btn-primary">Add Player</a>
    <table class="table">
        <thead>
            <tr>
               
                <th>Name</th>
                <th>Age</th>
                <th>Position</th>
                <th>Team</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($players as $player)
            <tr>
                
                <td>{{ $player->name }}</td>
                <td>{{ $player->age }}</td>
                <td>{{ $player->position }}</td>
                <td>{{ $player->team }}</td>
                <td>
                    @if($player->image_url)
                        <img src="{{ $player->image_url }}" alt="{{ $player->name }}" width="50">
                    @else
                        N/A
                    @endif
                </td>
                <td>
                    <a href="{{ route('players.show', $player->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('players.edit', $player->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('players.destroy', $player->id) }}" method="POST" style="display:inline-block;">
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
