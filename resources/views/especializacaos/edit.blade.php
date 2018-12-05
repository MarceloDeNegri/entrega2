@extends('adminlte::default')

@section('content')
    <div class="container-fluid">
    <h3>Editando Especializacao: {{ $especializacao->nome }}</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>

            @endforeach
            </ul>

        @endif

        {!!Form::open(['route' =>["especializacaos.update",$especializacao->id], 'files' => true, 'method'=>'put'])!!}
        <div class="form-group">
           {!!Form::label('nome', 'Nome:')!!}
           {!!Form::text('nome', $especializacao->nome,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
                {!!Form::label('descricao', 'Descrição:')!!}
                {!!Form::textarea('descricao', $especializacao->descricao,['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
                {!!Form::submit('Editar Especialização', ['class'=>'btn btn-primary'])!!}
        </div>
            {!!Form::close()!!}
    </div>
@endsection
