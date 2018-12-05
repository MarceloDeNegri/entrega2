@extends('adminlte::default')

@section('content')
    <div class="container-fluid">
        <h3>Prontuario</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>

            @endforeach
            </ul>

        @endif

        {!!Form::open(['route' =>'prontuarios.store'])!!}

        <div class="form-group">
            {!!Form::label('peso', 'Peso:')!!}
            {!!Form::text('peso', null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('altura', 'Altura:')!!}
        {!!Form::text('altura', null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('idade', 'Idade:')!!}
    {!!Form::number('idade', null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!!Form::label('alimentacao', 'Alimentação:')!!}
    {!!Form::text('alimentacao', null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('febre', 'Febre:')!!}
    {!!Form::text('febre', null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('dores', 'Dores:')!!}
    {!!Form::textarea('dores', null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('observacao', 'Observação:')!!}
    {!!Form::textarea('observaca', null,['class'=>'form-control'])!!}
</div>


<div class="form-group">
    {!! Form::hidden('atendimento_id', $atendimento->id) !!}
</div>
        <div class="form-group">
           {!!Form::submit('Salvar Prontuario', ['class'=>'btn btn-primary'])!!}
        </div>

        {!!Form::close()!!}
    </div>
@endsection
