@extends('layouts.app')

@section('title', $article->title)

@section('content')
    <div class="card">
        <div class="card-header">{{ $article->title }}</div>
        <div class="card-body">
            <p>{{ $article->body }}</p>
            <a href="{{ route('articles.index') }}" class="btn btn-secondary">Back to Articles</a>
        </div>
    </div>
@endsection
