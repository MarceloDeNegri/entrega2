@extends('adminlte::default')

@section('content')

<div class="container-fluid">
    <h3>Especializacoes</h3>

    {!! Form::open(['name'=>'form_name','route'=>'especializacaos']) !!}
    <div class="sidebar-form">
        <div class="input-group input-group-lg">
            <input type="text" name="filtragem" class="form-control"
                style="width:100% !important;" placeholder="Pesquisar...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-default">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </div>
    <br>
    {!! Form::close()!!}

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
    @foreach ($especializacaos as $esp)
    <tr>
        <td> {{$esp->id}}</td>
        <td> {{$esp->nome}}</td>
        <td> {{$esp->descricao}}</td>
        <td>

            <a href="{{route('especializacaos.edit', ['id'=>$esp->id]) }}"
                class="btn-sm btn-success">Editar</a>
            <a href="#" onclick="return ConfirmaExclusao({{ $esp->id }})"
                        class="btn-sm btn-danger">Remover</a>

        </td>

    </tr>
    @endforeach
        </tbody>
    </table>
    {!!$especializacaos->links()!!}
    <a href="{{route('especializacaos.create') }}" class="btn btn-info">Novo</a>
</div>
@endsection

@section('table-delete')
"especializacaos"
@endsection
