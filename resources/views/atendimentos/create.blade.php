@extends('adminlte::default')

@section('content')
    <div class="container-fluid">
        <h3>Atendimento</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>

            @endforeach
            </ul>

        @endif

        {!!Form::open(['route' =>'atendimentos.store'])!!}

        <div class="form-group" >
            {!!Form::label('hora_inicio', 'Hora Inicio:' )!!}
            {!!Form::select('hora_inicio',
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
            {!!Form::label('hora_fim', 'Hora Esperada:' )!!}
            {!!Form::select('hora_fim',
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


<div class="form-group">
    {!! Form::hidden('agendamento_id', $agendamento->id) !!}
</div>
        <div class="form-group">
           {!!Form::submit('Iniciar Atendimento', ['class'=>'btn btn-primary'])!!}
        </div>

        {!!Form::close()!!}
    </div>
@endsection
