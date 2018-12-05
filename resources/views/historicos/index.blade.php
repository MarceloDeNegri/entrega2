@extends('adminlte::default')

@section('content')

<div class="container-fluid">
    <h3>Historicos</h3>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Data</th>
                <th>Habito(s)</th>
                <th>Ação</th>
            </tr>
        </thead>
        @foreach ($historicos as $hist)
    <tr>
        <td> {{$hist->data}}</td>


            <td>
                @foreach($hist->historico_habitos as $hab)
                    <ul><li>{{$hab->habito->nome}}</li></ul>
                @endforeach
            </td>
            <td>
            <a href="{{route('historicos.edit', ['id'=>$hist->id]) }}"
                class="btn-sm btn-success">Editar</a>
            <a href="#"onclick="return ConfirmaExclusao({{$hist->id }})"
                        class="btn-sm btn-danger">Remover</a>

        </td>
        <td></td>
    </tr>
    @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('table-delete')
"historicos"
@endsection



