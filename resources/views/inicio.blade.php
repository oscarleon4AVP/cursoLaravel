@extends('master')

@section('contenido')
<h2>catálogo de alumnos</h2>
<h3>catálogos disponibles</h3>

<p>
    <a href="{{ url('alumnos') }}" class="btn btn-primary">ALUMNOS</a>
</p>

@stop