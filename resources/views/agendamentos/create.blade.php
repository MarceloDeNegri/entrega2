@extends('adminlte::default')

@section('content')
    <div class="container-fluid">
        <h3>Novo Agendamento</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>

            @endforeach
            </ul>

        @endif

        {!!Form::open(['route' =>'agendamentos.store'])!!}


    <div class="form-group">
            {!!Form::label('dtConsulta', 'Data Consulta:')!!}
            {!!Form::date('dtConsulta',
            '2017-05-18 00:00:00',
             ['class'=>'form-control'])!!}
    </div>

    <div class="form-group" >
        {!!Form::label('hora', 'Hora Atendimento:' )!!}
        {!!Form::select('hora',
        array ('09:00:00'=>'09:00:00' , '09:30:00'=>'09:30:00',
        '10:00:00'=>'10:00:00' , '10:30:00'=>'10:30:00',
        '11:00:00'=>'11:00:00' , '11:30:00'=>'11:30:00',
        '12:00:00'=>'12:00:00' , '12:30:00'=>'12:30:00',
        '13:00:00'=>'13:00:00' , '13:30:00'=>'13:30:00',
        '14:00:00'=>'14:00:00' , '14:30:00'=>'14:30:00',
        '15:00:00'=>'15:00:00' , '15:30:00'=>'15:30:00',
        '16:00:00'=>'16:00:00' , '16:30:00'=>'16:30:00',
        '17:00:00'=>'17:00:00' , '17:30:00'=>'17:30:00',
                ),
        '09:00:00',
        ['class'=>'form-control'])!!}
    </div>

    <div class="form-group" >
            {!!Form::label('condicao', 'Status:' )!!}
            {!!Form::select('condicao',
            array ('Ativo'=>'Ativo' , 'Cancelado'=>'Cancelado',
            'N/Compareceu'=>'N/Compareceu' , 'Remarcado'=>'Remarcado',
                    ),
            'Ativo',
            ['class'=>'form-control'])!!}
        </div>



<div class="form-group">
        {!!Form::label('paciente_id', 'Paciente:')!!}
        {!!Form::select('paciente_id',
         \App\Paciente::orderBy('nome')->pluck('nome', 'id')->toArray(),null,
        ['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('medico_id', 'Medico:')!!}
    {!!Form::select('medico_id',
     \App\Medico::orderBy('nome')->pluck('nome', 'id')->toArray(),null,
    ['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('convenio_id', 'Convenio:')!!}
    {!!Form::select('convenio_id',
    \App\Convenio::orderBy('nome')->pluck('nome','id')->toArray(),null,
    ['class'=>'form-control'])!!}
</div>
        <div class="form-group">
           {!!Form::submit('Agendar Consulta', ['class'=>'btn btn-primary'])!!}
        </div>

        {!!Form::close()!!}
    </div>
@endsection

