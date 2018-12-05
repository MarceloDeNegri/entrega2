@extends('adminlte::default')

@section('content')
    <div class="container-fluid">
        <h3>Editar Convenio</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>

            @endforeach
            </ul>

        @endif

        {!!Form::open(['route' =>['convenios.update', $convenio->id],"method"=>'put'])!!}


<div class="form-group">
        {!!Form::label('nome', 'Nome:')!!}
        {!!Form::text('nome', $convenio->nome,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!!Form::label('valor', 'Valor:')!!}
    {!!Form::number('valor', $convenio->valor,['class'=>'form-control'])!!}
</div>
        <div class="form-group">
           {!!Form::submit('Ediar Convenio', ['class'=>'btn btn-primary'])!!}
        </div>

        {!!Form::close()!!}
    </div>
@endsection
