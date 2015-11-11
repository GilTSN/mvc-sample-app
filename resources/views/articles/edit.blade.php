@extends('template')

@section('title', 'Editar artigo')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ app('url')->to('/') }}">Início</a></li>
        <li class="active">Editar artigo</li>
    </ol>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="panel panel-default">
        <form action="{{ app('url')->to('articles/' . $article->id) }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="PUT">

            <div class="panel-body">
                <div class="form-group">
                    <label for="title">Título *</label>

                    <input type="text" name="title" value="{{ $article->title }}" id="title" class="form-control"
                           maxlength="255" required>
                </div>

                <div class="form-group">
                    <label for="content">Conteúdo *</label>

                    <textarea name="content" id="content" rows="10" class="form-control"
                              required>{{ $article->content }}</textarea>
                </div>
            </div>

            <div class="panel-footer clearfix">
                <button type="submit" class="btn btn-primary pull-right">Salvar alterações</button>
            </div>
        </form>
    </div>
@endsection