@extends('template')

@section('title', 'Início')

@section('content')
    <ol class="breadcrumb">
        <li class="active">Início</li>
    </ol>

    @if(isset($success_message))
        <div class="alert alert-success text-center">{{ $success_message }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th colspan="2">
                    <a href="{{ app('url')->to('articles/create') }}" class="btn btn-primary pull-right">Novo artigo</a>
                </th>
            </tr>
        </thead>

        <tbody>
            @if(count($articles) == 0)
                <tr>
                    <td colspan="2">
                        <div class="alert alert-info text-center">Não existem artigos cadastrados</div>
                    </td>
                </tr>
            @else
                @foreach ($articles as $article)
                    <tr>
                        <td><a href="{{ app('url')->to('articles/' . $article->id) }}">{{ $article->title }}</a></td>
                        <td>
                            <form action="{{ app('url')->to('articles/' . $article->id) }}" class="pull-right"
                                  method="post" onsubmit="return confirm('Confirma a exclusão?');">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-default btn-sm" title="Excluir">
                                    <i class="glyphicon glyphicon-trash"></i>
                                </button>
                            </form>

                            <a href="{{ app('url')->to('articles/' . $article->id . '/edit') }}"
                               class="btn btn-default btn-sm pull-right" title="Editar" style="margin-right: 10px;">
                                <i class="glyphicon glyphicon-edit"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection