@extends('adminlte::default')

@section('content')

<div class="container-fluid">

    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <h3>Convenios</h3>

    {!! Form::open(['name'=>'form_name','route'=>'convenios']) !!}
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
                <th>Nome</th>
                <th>Valor</th>
                <th></th>
            </tr>
        </thead>
        @foreach ($convenios as $con)
    <tr>
        <td> {{$con->nome}}</td>
        <td> {{$con->valor}}</td>

        <td>
            <a href="{{route('convenios.edit', ['id'=>$con->id]) }}"
                class="btn-sm btn-success">Editar</a>
                <a href="#" onclick="return ConfirmaExclusao({{ $con->id }})"
                    class="btn-sm btn-danger">Remover</a>

        </td>

    </tr>
    @endforeach
        </tbody>
    </table>
                {!!$convenios->links()!!}
    <a href="{{route('convenios.create') }}" class="btn btn-info">Novo</a
</div>
@endsection

@section('table-delete')
"convenios"
@endsection

