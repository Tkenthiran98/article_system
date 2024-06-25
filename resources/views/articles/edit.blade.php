@extends('layouts.app')

@section('title', 'Edit Article')

@section('content')
    <div class="card">
        <div class="card-header">Edit Article</div>
        <div class="card-body">
            <form action="{{ route('articles.update', $article->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}" required>
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" id="body" name="body" rows="5" required>{{ $article->body }}</textarea>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="public" {{ $article->status == 'public' ? 'selected' : '' }}>Public</option>
                        <option value="private" {{ $article->status == 'private' ? 'selected' : '' }}>Private</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
