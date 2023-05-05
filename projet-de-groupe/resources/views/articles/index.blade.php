@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Articles</h1>
                @guest
                    <p>Connectez-vous pour créer, modifier ou supprimer un article.</p>
                @else
                    <div class="text-right mb-3">
                        <a href="{{ route('articles.create') }}" class="btn btn-primary">Créer un article</a>
                    </div>
                @endguest

                @if ($articles->isEmpty())
                    <p>Aucun article disponible pour le moment.</p>
                @else
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Titre</th>
                            <th scope="col">Contenu</th>
                            @auth
                                <th scope="col">Actions</th>
                            @endauth
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <td>{{ $article->title }}</td>
                                <td>{!! $article->content !!}</td>
                                @auth
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Actions">
                                            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary">Modifier</a>
                                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')">Supprimer</button>
                                            </form>
                                        </div>
                                    </td>
                                @endauth
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
