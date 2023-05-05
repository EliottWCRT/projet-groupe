@extends('layouts.app')

@section('content')
    <h1>Articles</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->content }}</td>
                    <td>
                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary">Show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
