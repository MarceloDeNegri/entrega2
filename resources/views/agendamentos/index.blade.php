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
    <h3>Agendamentos</h3>


    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Data Consulta</th>
                <th>Hora</th>
                <th>Paciente</th>
                <th>Médico</th>
                <th>Ações</th>
            </tr>
        </thead>
        @foreach ($agendamentos as $age)
    <tr>
        <td> {{date( 'd/m/Y' , strtotime($age->dtConsulta))}}</td>
        <td> {{$age->hora}}</td>
        <td> {{$age->paciente->nome}}</td>
        <td> {{$age->medico->nome}}</td>

        <td>

                @if($age->condicao == 'Cancelado')
                <center><h5>Agendamento Cancelado</h5></center>
                <a href="{{route('agendamentos.edit', ['id'=>$age->id]) }}"
                    class="btn-sm btn-success">Editar</a>
                @elseif($age->atendimentos->count() == 0)
                <a href="#" onclick="return ConfirmaExclusao({{ $age->id }})"
                    class="btn-sm btn-danger">Remover</a>
                <a href="{{route('agendamentos.edit', ['id'=>$age->id]) }}"
                    class="btn-sm btn-success">Editar</a>
                @endif
                @if($age->atendimentos->count() == 0)
            <a href="{{route('atendimentos.create', ['id'=> $age->id]) }}"
                class="btn-sm btn-danger">Atender</a>
                @else
                <center><h5>Atendimento Efetuado</h5></center>
                @endif

        </td>

    </tr>
    @endforeach
        </tbody>
    </table>
                {!!$agendamentos->links()!!}
                <a href="{{route('agendamentos.create') }}" class="btn btn-info">Novo</a>
</div>
@endsection

@section('table-delete')
"agendamentos"
@endsection

