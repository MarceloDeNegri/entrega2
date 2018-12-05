@extends('adminlte::default')

@section('content')

<div class="container-fluid">
    <h3>Medicos</h3>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CRM</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Especializacao(s)</th>
                <th>Ação</th>
            </tr>
        </thead>
        @foreach ($medicos as $med)
    <tr>
        <td> {{$med->nome}}</td>
        <td> {{$med->crm}}</td>
        <td> {{$med->cpf}}</td>
        <td> {{$med->telefone}}</td>


            <td>
                @foreach($med->especializacaos as $esp)
                    <ul><li>{{$esp->nome}}</li></ul>
                @endforeach
            </td>
            <td>
            <a href="{{route('medicos.edit', ['id'=>$med->id]) }}"
                class="btn-sm btn-success">Editar</a>
            <a href="#"onclick="return ConfirmaExclusao({{$med->id }})"
                        class="btn-sm btn-danger">Remover</a>

        </td>

    </tr>
    @endforeach
        </tbody>
    </table>
    {{$medicos->links()}}
    <a href="{{route('medicos.createMaster') }}" class="btn btn-info">Novo</a>
</div>
@endsection

@section('table-delete')
"medicos"
@endsection



