@extends('adminlte::default')

@section('content')
    <div class="container-fluid">
        <h3>Nova Especialização</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>

            @endforeach
            </ul>

        @endif

        {!!Form::open(['route' =>'especializacaos.store','files'=> true])!!}
        <div class="form-group">
           {!!Form::label('nome', 'Nome:')!!}
           {!!Form::text('nome', null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
                {!!Form::label('descricao', 'Descrição:')!!}
                {!!Form::textarea('descricao', null,['class'=>'form-control'])!!}
        </div>


        <div class="form-group">
                {!!Form::submit('Criar Especialização', ['class'=>'btn btn-primary'])!!}
        </div>
            {!!Form::close()!!}
    </div>
@endsection
