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

    <h3>Atendimentos</h3>


    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Inicio</th>
                <th>Fim</th>
                <th>Paciente</th>
                <th>Medico</th>
                <th></th>
            </tr>
        </thead>
        @foreach ($atendimentos as $ate)
    <tr>
        <td> {{$ate->hora_inicio}}</td>
        <td> {{$ate->hora_fim}}</td>
        <td> {{$ate->agendamento->paciente->nome}}</td>
        <td> {{$ate->agendamento->medico->nome}}</td>




        <td>

                @if($ate->prontuarios->count() == 0)
             <a href="{{route('prontuarios.create', ['id'=> $ate->id]) }}"
                class="btn-sm btn-warning">Prontuario</a>
                @else
               <center> <h5>Prontuario Efetuado</h5></center>
                @endif

        </td>




    </tr>
    @endforeach
        </tbody>
    </table>
                {!!$atendimentos->links()!!}
</div>
@endsection


