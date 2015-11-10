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
                        <td>{{ $article->title }}</td>
                        <td>
                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-sm" title="Editar">
                                    <i class="glyphicon glyphicon-edit"></i>
                                </a>

                                <a href="#" class="btn btn-default btn-sm" title="Excluir">
                                    <i class="glyphicon glyphicon-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection