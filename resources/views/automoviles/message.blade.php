@extends('layout/template')

@section('title', 'Registrar automovil | registro')

@section('contenido')

<main>
    <div class="container py-4">
        <h2>{{ $msg }}</h2>
        <a href="{{ url('automoviles') }}" class="btn btn-secondary">Regresar</a>
    </div>
</main>