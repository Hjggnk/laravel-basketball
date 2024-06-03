@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 my-5">
            <div class="jumbotron text-center">
                <h1 class="display-4">Welcome to Basketball Info Hub!</h1>
                <p class="lead">Discover everything about basketball - players, news, and articles all in one place.</p>
                <hr class="my-4">
                <p>Use the buttons below to explore more.</p>
                <a class="btn btn-primary btn-lg" href="{{ route('players.index') }}" role="button">Explore Players</a>
                <a class="btn btn-secondary btn-lg" href="{{ route('blogs.index') }}" role="button">Read Blogs</a>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- About the Site -->
        <div class="col-md-12 mb-4">
            <div class="card">
                <div class="card-header">About Basketball Info Hub</div>
                <div class="card-body">
                    <p>Basketball Info Hub is your go-to platform for all things basketball. Whether you're a fan, a player, or just curious, we provide comprehensive information on basketball players, as well as the latest news and insightful articles. Join our community to stay updated and share your passion for the game.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Key Features -->
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header">Player Information</div>
                <div class="card-body">
                    <p class="card-text">Get detailed information about basketball players, including stats, positions, and team affiliations.</p>
                    <a href="{{ route('players.index') }}" class="btn btn-primary">View Players</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header">Latest News & Articles</div>
                <div class="card-body">
                    <p class="card-text">Stay updated with the latest basketball news, game highlights, and expert articles. Dive into our blogs to know more.</p>
                    <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Read Blogs</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header">Community Engagement</div>
                <div class="card-body">
                    <p class="card-text">Join our community to discuss basketball, share your insights, and connect with other basketball enthusiasts.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Recent Blogs -->
        <div class="col-md-12 mb-4">
            <div class="card">
                <div class="card-header">Recent Blogs</div>
                <div class="card-body">
                    @if($recentBlogs->isEmpty())
                        <p>No recent blogs available.</p>
                    @else
                        <ul class="list-group">
                            @foreach($recentBlogs as $blog)
                                <li class="list-group-item">
                                    <a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a>
                                    <small class="text-muted">by {{ $blog->user->name }} on {{ $blog->created_at->format('M d, Y') }}</small>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
