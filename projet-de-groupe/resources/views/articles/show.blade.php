@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $article->title }}</h1>
                <p>{!! $article->content !!}</p>
            </div>
        </div>
    </div>
@endsection
