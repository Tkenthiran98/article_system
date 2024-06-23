{{-- resources/views/admin/home.blade.php --}}

@extends('layouts.app')

@section('header')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Panel') }}
        </h2>
    </x-slot>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mb-4 shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0">Admin Dashboard</h3>
                    </div>
                    <div class="card-body">
                        <p class="lead mb-4">Welcome, <strong>{{ Auth::user()->name }}</strong>!</p>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4 shadow-sm">
                                    <div class="card-header bg-secondary text-white">
                                        <h5 class="mb-0">All Users</h5>
                                    </div>
                                    <div class="card-body">
                                        @if(isset($users) && count($users) > 0)
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($users as $user)
                                                            <tr>
                                                                <td>{{ $user->name }}</td>
                                                                <td>{{ $user->email }}</td>
                                                                <td>
                                                                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST" style="display: inline;">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        @else
                                            <div class="alert alert-warning" role="alert">
                                                No users found.
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card mb-4 shadow-sm">
                                    <div class="card-header bg-secondary text-white">
                                        <h5 class="mb-0">All Articles</h5>
                                    </div>
                                    <div class="card-body">
                                        @if(isset($articles) && count($articles) > 0)
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th>Title</th>
                                                            <th>Author</th>
                                                            <th>Visibility</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($articles as $article)
                                                            <tr>
                                                                <td>{{ $article->title }}</td>
                                                                <td>{{ $article->user->name }}</td>
                                                                <td>{{ $article->is_public ? 'Public' : 'Private' }}</td>
                                                                <td>
                                                                    <a href="{{ route('articles.edit', $article) }}" class="btn btn-primary btn-sm">Edit</a>
                                                                    <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" style="display: inline;">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        @else
                                            <div class="alert alert-warning" role="alert">
                                                No articles found.
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
