@extends('layout/template')

@section('title', 'automoviles | registro')

@section('contenido')

<main>
    <div class="container py-4">
        <h2>Listado de automoviles</h2>

        <a href="{{ url('automoviles/create')}}" class="btn btn-primary btn-sm">Nuevo Registro</a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Matricula</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Color</th>
                    <th>Precio</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach($automoviles as $automovil)
                <tr>
                    <td>{{ $automovil->id }}</td>
                    <td>{{ $automovil->Matricula }}</td>
                    <td>{{ $automovil->Marca }}</td>
                    <td>{{ $automovil->Modelo }}</td>
                    <td>{{ $automovil->Color }}</td>
                    <td>{{ $automovil->Precio }}</td>
                    <td> <a href="{{ url ('automoviles/'.$automovil->id.'/edit')}}" class="btn btn-warning btn-sm">Editar</a> </td>
                    <td>
                        <form action="{{ url('automoviles/'.$automovil->id) }}" method="post">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</main>