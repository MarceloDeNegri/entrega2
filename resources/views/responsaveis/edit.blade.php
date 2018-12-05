@extends('adminlte::default')

@section('content')
    <div class="container-fluid">
        <h3>Editar Responsavel {!!$responsavel->nome!!}</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>

                @endforeach
            </ul>

        @endif

        {!!Form::open(['route' =>['responsaveis.update', $responsavel->id],"method"=>'put'])!!}

        <div class="form-group">
            {!!Form::label('nome', 'Nome:')!!}
            {!!Form::text('nome', $responsavel->nome,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('sobrenome', 'Sobrenome:')!!}
            {!!Form::text('sobrenome', $responsavel->sobrenome,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('telefone', 'Telefone:')!!}
            {!!Form::text('telefone', $responsavel->telefone,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('email', 'Email:')!!}
            {!!Form::text('email', $responsavel->email,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!!Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
        </div>

        {!!Form::close()!!}
    </div>
@endsection
