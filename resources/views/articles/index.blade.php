@extends('layouts.app')

@section('title', 'My Articles')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>My Articles</h2>
        <a href="{{ route('articles.create') }}" class="btn btn-primary">Create New Article</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        @foreach($articles as $article)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">{{ Str::limit($article->body, 100) }}</p>
                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary">Read More</a>
                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-secondary">Edit</a>
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
