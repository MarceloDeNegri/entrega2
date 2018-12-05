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
        <h3>Responsaveis</h3>


        <table class="table table-striped table-bordered table-hover" id="responsaveis">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th></th>
            </tr>
            </thead>
            @foreach ($responsaveis as $resp)
                <tr>
                    <td> {{$resp->nome}}</td>
                    <td> {{$resp->sobrenome}}</td>
                    <td> {{$resp->email}}</td>
                    <td> {{$resp->telefone}}</td>


                    <td>
                        <a href="{{route('responsaveis.edit', ['id'=>$resp->id]) }}"
                           class="btn-sm btn-success">Editar</a>
                           <a href="#" onclick="return ConfirmaExclusao({{ $resp->id }})"
                            class="btn-sm btn-danger">Remover</a>

                        </td>


                </tr>

                @endforeach

                </tbody>
        </table>
        {{$responsaveis->links()}}
    <a href="{{route('responsaveis.create') }}" class="btn btn-info">Novo</a>

    </div>
@endsection

@section('table-delete')
"responsaveis"
@endsection





