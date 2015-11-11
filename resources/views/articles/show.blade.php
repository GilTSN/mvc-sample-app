@extends('template')

@section('title', $article->title)

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ app('url')->to('/') }}">Início</a></li>
        <li class="active">{{ $article->title }}</li>
    </ol>

    <div class="panel panel-default">
        <div class="panel-body">
            <p class="lead">{{ $article->title }}</p>

            <p>{{ $article->content }}</p>
        </div>
    </div>
@endsection