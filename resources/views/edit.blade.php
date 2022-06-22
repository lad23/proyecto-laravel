@extends('adminlte::page')

@section('title', 'Panel administrador')

@section('content_header')
<h1>Editar evento</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Editar evento <a href="{{route('events.index')}}" class="btn btn-sm btn-info">Volver</a>
                </div>
            </div>

            <form action="{{route('events.update', $event)}}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="category">Categoría</label>
                        <select class="form-control" name="category_id">
                           @foreach ($categories as $category )
                               <option value="{{$category->id}}"
                                <?= $category->id == $event->category_id? "selected" : '' ?>
                                >
                                {{$category->name}}</option>
                           @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Titulo evento" value="{{$event->title}}">
                    </div>

                    <div class="form-group">
                        <label for="featured">Imagen</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="featured" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Elegir imagen</label>
                            </div> 
                            <img src="{{asset('images/uploads/events/'.$event->featured)}}" alt="" width="100">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="date-event">Fecha del evento</label>
                        <input type="date" name="date_event" class="form-control" id="date-event" placeholder="Fecha evento" value="{{$event->date_event}}">
                    </div>

                    <div class="form-group">
                        <label for="place-of-event">Lugar del evento</label>
                        <input type="text" name="name_event" class="form-control" id="name-event" placeholder="Lugar del evento" value="{{$event->name_event}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <textarea class="form-control" name="description" placeholder="Descripción del evento">{{$event->description}}</textarea>
                     
                    </div>  
           
                   {{--  <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> --}}
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Editar evento</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
