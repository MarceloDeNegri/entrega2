@extends('adminlte::default')

@section('content')
    <div class="container-fluid">
        <h3>Editar Atendimento</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>

            @endforeach
            </ul>

        @endif

        {!!Form::open(['route' =>['atendimentos.update', $atendimento->id],"method"=>'put'])!!}

        <div class="form-group" >
            {!!Form::label('hora_inicio', 'Inicio:' )!!}
            {!!Form::select('hora_inicio',
            array ('09:00:00'=>'09:00:00' , '09:30:00'=>'09:30:00',  ),
            $atendimento->horaIForms(),
            ['class'=>'form-control'])!!}
        </div>
        <div class="form-group" >
            {!!Form::label('hora_fim', 'Fim:' )!!}
            {!!Form::select('hora_fim',
            array ('09:00:00'=>'09:00:00' , '09:30:00'=>'09:30:00',  ),
            $atendimento->horaFForms(),
            ['class'=>'form-control'])!!}
        </div>

        <div class="form-group" >
            {!!Form::label('status', 'Status:' )!!}
            {!!Form::select('status',
            array ('Ausente' , 'Atendido',  ),
            'Atendido',
            ['class'=>'form-control'])!!}
        </div>


        <div class="form-group">
           {!!Form::submit('Editar Atendimento', ['class'=>'btn btn-primary'])!!}
        </div>

        {!!Form::close()!!}
    </div>
@endsection
