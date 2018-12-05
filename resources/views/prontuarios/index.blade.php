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
    <h3>Prontuarios</h3>



    <table class="table table-striped table-bordered table-hover" >
        <thead>
            <tr>

                <th>Data Consulta</th>
                <th>Idade</th>
                <th>Peso</th>
                <th>Altura</th>
                <th>Paciente</th>

                <th>Ações</th>
            </tr>
        </thead>
        @foreach ($prontuarios as $pro)
    <tr>
        <td> {{date( 'd/m/Y' , strtotime($pro->atendimento->agendamento->dtConsulta))}}</td>
        <td> {{$pro->idade}}</td>
        <td> {{$pro->peso}}</td>
        <td> {{$pro->altura}}</td>
        <td> {{$pro->atendimento->agendamento->paciente->nome}}</td>



        <td>

            <a href="{{route('prontuarios.edit', ['id'=>$pro->id]) }}"
                class="btn-sm btn-success">Editar</a>
                <a href="#" onclick="return ConfirmaExclusao({{ $pro->id }})"
                    class="btn-sm btn-danger">Remover</a>
            <a href="{{route('prontuarios.detail', ['id'=> $pro->id]) }}"
                class="btn-sm btn-warning">Detalhes</a>

        </td>

    </tr>
    @endforeach
        </tbody>
    </table>
                {!!$prontuarios->links()!!}
</div>
@endsection

@section('table-delete')
"prontuarios"
@endsection
