@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Editar datos del servicio</h1>
@stop

@section('content')
<form action="{{ url('dashboard/datosservicios/'. $datosservicios->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PUT')}}

    <div class="mb-3 mt-4">

        <div class="mb-3">
            <label for="nombre_servicio" class="form-label fw-bold text-primary ">Nombre del servicio:</label>
            <input type="text" name="nombre_servicio" id="nombre_servicio" class="form-control"
                value="{{$datosservicios->nombre_servicio}}" required >
        </div>
    </div>
  
    <div class="mb-3 mt-2">
        <div class="mb-3 ">

            <label for="exampleFormControlTextarea1" class="form-label text-primary ">Descripción:</label>
            <textarea class="form-control text-justify" name="descripcion" id="descripcion" rows="3" required >{{$datosservicios->descripcion}}</textarea>
        </div>
    </div>
    <br>

    <label for="url_icon" class="form-label fw-bold text-primary">Icono:</label>
    <div class="img-thumbnail" style="width: 20rem;">
        <img src="{{ asset('storage'). '/' . $datosservicios->url_icon}}" class="img-thumbnail"
            alt="Icono del servicio">
        <div class="card-body">
            <input type="file" value="" name="url_icon" id="url_icon"  >
        </div>
    </div>

    <label for="url_img" class="form-label fw-bold text-primary">Imagen:</label>
    <div class="container ml-1" >
        <img src="{{ asset('storage'). '/' . $datosservicios->url_img}}" class="imgcrud img-thumbnail" alt="Imagen del servicio"  width="500" height="500">
        <div class="card-body">
            <input type="file" value="" name="url_img" id="url_img"  >
        </div>
    </div>

    <a href="/dashboard/datosservicios" class="btn btn-secondary">Volver</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop