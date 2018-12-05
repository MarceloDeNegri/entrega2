@extends('adminlte::default')

@section('content')
    <div class="container-fluid">
        <h3>Novo Responsavel</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>

                @endforeach
            </ul>

        @endif

        {!!Form::open(['route' =>'responsaveis.store'])!!}

        <div class="form-group">
            {!!Form::label('nome', 'Nome:')!!}
            {!!Form::text('nome', null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('sobrenome', 'Sobrenome:')!!}
            {!!Form::text('sobrenome', null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('telefone', 'Telefone:')!!}
            {!!Form::text('telefone', null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('email', 'Email:')!!}
            {!!Form::text('email', null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!!Form::submit('Criar Responsavel', ['class'=>'btn btn-primary'])!!}
        </div>

        {!!Form::close()!!}
    </div>
@endsection
