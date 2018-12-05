@extends('adminlte::default')

@section('content')
    <div class="container-fluid">
        <h3>Editar Prontuario</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>

            @endforeach
            </ul>

        @endif

        {!!Form::open(['route' =>['prontuarios.update', $prontuario->id],"method"=>'put'])!!}

        <div class="form-group">
            {!!Form::label('peso', 'Peso:')!!}
            {!!Form::text('peso', $prontuario->peso,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('altura', 'Altura:')!!}
        {!!Form::text('altura', $prontuario->altura,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('idade', 'Idade:')!!}
    {!!Form::number('idade', $prontuario->idade,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!!Form::label('alimentacao', 'Alimentação:')!!}
    {!!Form::text('alimentacao', $prontuario->alimentacao,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('febre', 'Febre:')!!}
    {!!Form::text('febre', $prontuario->febre,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('dores', 'Dores:')!!}
    {!!Form::textarea('dores', $prontuario->dores,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('observacao', 'Observação:')!!}
    {!!Form::textarea('observacao', $prontuario->observacao,['class'=>'form-control'])!!}
</div>


<div class="form-group">
    {!! Form::hidden('atendimento_id', $atendimento->id) !!}
</div>
        <div class="form-group">
           {!!Form::submit('Editar', ['class'=>'btn-sm btn-primary'])!!}


                <a href="{{url()->previous() }}"
                            class="btn btn-danger">Voltar</a>
                </div>

        {!!Form::close()!!}
    </div>
@endsection
