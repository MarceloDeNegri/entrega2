@extends('adminlte::default')

@section('content')
    <div class="container-fluid">
        <h3>Novo Paciente</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>

            @endforeach
            </ul>

        @endif

        {!!Form::open(['route' =>'pacientes.store'])!!}

        <div class="form-group">
            {!!Form::label('nome', 'Nome:')!!}
            {!!Form::text('nome', null,['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!!Form::label('cpf', 'CPF:')!!}
        {!!Form::text('cpf', null,['class'=>'form-control'])!!}
</div>

    <div class="form-group">
            {!!Form::label('dtNascimento', 'Data Nascimento:')!!}
            {!!Form::date('dtNascimento',
            '2017-05-18 00:00:00',
             ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!!Form::label('tipoSanguineo', 'Tipo Sanguineo:')!!}
        {!!Form::select('tipoSanguineo',
        array ('A'=>'A' , 'AB'=>'AB', 'B'=>'B', 'O-'=>'O-', 'O+'=>'O+' ),
        'A',
        ['class'=>'form-control'])!!}
</div>
    <div class="form-group">
        {!!Form::label('alergico', 'Alergico:')!!}
        {!!Form::textarea('alergico', null,['class'=>'form-control'])!!}
</div>
<div class="form-group" >
    {!!Form::label('status', 'Status:' )!!}
    {!!Form::select('status',
    array ('A' =>'Ativo' , 'I'=> 'Inativo' ),
    'A',
    ['class'=>'form-control'])!!}
</div>

<div class="form-group">
        {!!Form::label('responsavel_id', 'Responsavel:')!!}
        {!!Form::select('responsavel_id',
        \App\Responsavel::orderBy('nome')->pluck('nome','id')->toArray(),null,
        ['class'=>'form-control'])!!}
</div>
        <div class="form-group">
           {!!Form::submit('Criar paciente', ['class'=>'btn btn-primary'])!!}
        </div>

        {!!Form::close()!!}
    </div>
@endsection
