@extends('adminlte::page')

@section('title', 'Panel administrador')

@section('content_header')
    <h1>Eventos de turismo</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Listado de Eventos <a href="" class="btn btn-sm btn-primary">Crear</a>
                </div>
            </div>
            <div class="card-body">
                <table id="events" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Imagen</th>
                            <th>Fecha</th>
                            <th>Lugar</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event )
                            
                        <tr>
                            <td>{{$event->title}}</td>
                            <td>
                                <img src="{{$event->featured}}" alt="" width="120">
                            </td>
                            <td>{{$event->date_event}}</td>
                            <td>{{$event->name_event}}</td>
                            <td>{{$event->status}}</td> 
                            <td>
                                <a href="" class="btn btn-sm btn-warning">Editar</a>
                                <a href="" class="btn btn-sm btn-danger">Eliminar</a>
                            </td>
                        </tr> 
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Titulo</th>
                            <th>Imagen</th>
                            <th>Fecha</th>
                            <th>Lugar</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')
<script>
$(document).ready(function () {
    $('#events').DataTable();
});
</script>
@stop

