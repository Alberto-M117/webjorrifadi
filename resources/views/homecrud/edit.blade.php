@extends('adminlte::page')

@section('title', 'Editar Home')

@section('content_header')
<h1>Editar home</h1>
@stop

@section('content')

<form action="{{ url('dashboard/datosempresa/'. $datosempresa->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="mb-3 mt-4">
        <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label text-primary ">Descripción:</label>
                 <textarea class="form-control text-justify" name="descripcion" id="descripcion" rows="3">{{$datosempresa->descripcion}}</textarea>
        </div>
    </div>
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
        
            <label for="exampleFormControlTextarea1" class="form-label text-primary ">Misión:</label>
            <textarea class="form-control text-justify" name="mision" id="mision" rows="3">{{$datosempresa->mision}}</textarea>
        </div>
    </div>
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="exampleFormControlTextarea1" class="form-label text-primary ">Visión:</label>
            <textarea class="form-control text-justify" name="vision" id="vision" rows="3">{{$datosempresa->vision}}</textarea>
        </div>
    </div>
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="slogan" class="form-label fw-bold text-primary">Slogan:</label>
            <input type="text" name="slogan" id="slogan" class="form-control text-justify" value="{{$datosempresa->slogan}}">
        </div>
    </div>

    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="slogan" class="form-label fw-bold text-primary">Correo electrónico:</label>
            <input type="text" name="Correo" id="Correo" class="form-control" value="{{$datosempresa->Correo}}">
        </div>
    </div>
 
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="slogan" class="form-label fw-bold text-primary">Número de teléfono:</label>
            <input type="text" name="Telefono" id="Telefono" class="form-control" value="{{$datosempresa->Telefono}}">
        </div>
    </div>
    <br>

    {{-- Actualizacion del Banner de Fondo --}}

    <label for="descripcion1" class="form-label fw-bold text-primary">Fondo Inicio:</label>
    <div class="card" style="width: 30rem;">
        <img src="{{ asset('storage'). '/' . $datosempresa->imagenbanner}}" class="card-img-top"
            alt="Imagen del Fondo Inicio">
        <div class="card-body">
            <input type="file" value="" name="imagenbanner" id="imagenbanner">
        </div>
    </div>

    <label for="descripcion1" class="form-label fw-bold text-primary">Fondo Servicios:</label>
    <div class="card" style="width: 30rem;">
        <img src="{{ asset('storage'). '/' . $datosempresa->imagenbanner2}}" class="card-img-top"
            alt="Imagen del Fondo Pestaña Servicios">
        <div class="card-body">
            <input type="file" value="" name="imagenbanner2" id="imagenbanner2">
        </div>
    </div>

    <label for="descripcion1" class="form-label fw-bold text-primary">Fondo Proyectos:</label>
    <div class="card" style="width: 30rem;">
        <img src="{{ asset('storage'). '/' . $datosempresa->imagenbanner3}}" class="card-img-top"
            alt="Imagen del Fondo Pestaña Proyectos">
        <div class="card-body">
            <input type="file" value="" name="imagenbanner3" id="imagenbanner3">
        </div>
    </div>

    <label for="descripcion1" class="form-label fw-bold text-primary">Fondo Contáctanos:</label>
    <div class="card" style="width: 30rem;">
        <img src="{{ asset('storage'). '/' . $datosempresa->imagenbanner4}}" class="card-img-top"
            alt="Imagen del Fondo Pestaña Contactanos">
        <div class="card-body">
            <input type="file" value="" name="imagenbanner4" id="imagenbanner4">
        </div>
    </div>



    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="url_curriculum" class="form-label fw-bold text-primary">Curriculum:</label>
            <br>
            <img src="{{ asset('storage/iconos/pdf64px.png')}}" class="img-fluid img-thumbnail" alt="Curriculum">
            <input type="file" name="url_curriculum" id="url_curriculum" class="form-control"
                value="{{$datosempresa->url_curriculum}}">
        </div>
        <br>
        <a href="/dashboard/datosempresa" class="btn btn-secondary">Volver</a>
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