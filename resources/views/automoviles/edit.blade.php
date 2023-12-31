@extends('layout/template')

@section('title', 'Editar automovil | registro')

@section('contenido')
<main>
    <div class="container py-4">
        <h2>Editar automovil</h2>

        @if ($errors->any())

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

        @endif

        <form action="{{ url('automoviles/'.$automovil->id)}}" method="POST">
            @method("PUT")
            @csrf

            <div class="mb-3 row">
                <label for="matricula" class="col-sm-2 col-form-label">Matricula:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="matricula" id="matricula" value="{{$automovil->matricula}}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="marca" class="col-sm-2 col-form-label">Marca:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="marca" id="marca" value="{{$automovil->marca}}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="modelo" class="col-sm-2 col-form-label">Modelo:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="modelo" id="modelo" value="{{$automovil->modelo}}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="color" class="col-sm-2 col-form-label">Color:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="color" id="color" value="{{$automovil->color}}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="precio" class="col-sm-2 col-form-label">precio:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="precio" id="precio" value="{{$automovil->precio}}" required>
                </div>
            </div>

            <a href="{{ url('automoviles')}}" class="btn btn-secondary">REGRESAR</a>

            <button type="submit" class="btn btn-success">GUARDAR</button>

        </form>
    </div>
</main>