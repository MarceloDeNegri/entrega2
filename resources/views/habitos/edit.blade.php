@extends('adminlte::default')

@section('content')
    <div class="container-fluid">
    <h3>Editando Hábito: {{ $habito->nome }}</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>

            @endforeach
            </ul>

        @endif

        {!!Form::open(['route' =>["habitos.update",$habito->id], 'files' => true, 'method'=>'put'])!!}
        <div class="form-group">
           {!!Form::label('nome', 'Nome:')!!}
           {!!Form::text('nome', $habito->nome,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
                {!!Form::label('descricao', 'Descrição:')!!}
                {!!Form::textarea('descricao', $habito->descricao,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
                {!!Form::label('tp_habito', 'Tipo:')!!}
                {!!Form::select('tp_habito',
                array ('B' =>'Bom' , 'R'=> 'Ruim' ),
                $habito->tp_habito,
                ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
                {!!Form::label('objetivo', 'Objetivo:')!!}
                {!!Form::number('objetivo', $habito->objetivo,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
                {!!Form::label('dt_inicio_ctrl', 'Data:')!!}
                {!!Form::date('dt_inicio_ctrl',
                $habito->dt_inicio_ctrl,
                 ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('foto', 'Foto atual:')!!}<br>
            <?php
                $data = $habito->foto;
                echo '<img style="max-width 250px; max-height:250px: width: auto; height: auto;" src="data:image/jpeg;base64,'
                 .base64_encode($data).' "/>';
                 ?>
        </div>

        <div class="form-group">
                {!!Form::submit('Editar Habito', ['class'=>'btn btn-primary'])!!}
        </div>
            {!!Form::close()!!}
    </div>
@endsection
