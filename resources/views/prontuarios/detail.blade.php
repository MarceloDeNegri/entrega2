@extends('adminlte::default')

@section('content')


<div class="container-fluid">
<td>
        <h3>Detalhes da consulta do paciente {{$prontuarios->atendimento->agendamento->paciente->nome}}  </h3>
        <h5> Nós da Clinica Crescer agradecemos muito o carinho de todos</h5><br>
            <hr>

        Nome: {{$prontuarios->atendimento->agendamento->paciente->nome}}<br>
        <hr>
        Medico: {{$prontuarios->atendimento->agendamento->medico->nome}}<br>
        <hr>
        Tipo Sangue: {{$prontuarios->atendimento->agendamento->paciente->tipoSanguineo}}<br>
        <hr>
        Alergico: {{$prontuarios->atendimento->agendamento->paciente->alergico}}<br>
        <hr>
        Status: {{$prontuarios->atendimento->agendamento->paciente->status}}<br>
        <hr>
        Peso: {{$prontuarios->peso}}<br>
        <hr>
        Idade: {{$prontuarios->Idade}}<br>
        <hr>
        Altura: {{$prontuarios->altura}}<br>
        <hr>
        Alimentação: {{$prontuarios->alimentacao}}<br>
        <hr>
        Temperatura: {{$prontuarios->febre}}<br>
        <hr>
        Dores: {{$prontuarios->dores}}<br>
        <hr>
        Observação: {{$prontuarios->observacao}}<br>
        <hr>
</td>

        <td>
            <a href="{{url()->previous() }}"
                    class="btn-sm btn-light">Voltar</a>
            <a href="{{route('prontuarios.pdf' , ['id'=> $prontuarios->id])}}"
                    class="btn-sm btn-info">Gerar PDF</a>

        </td>



</div>

@endsection
