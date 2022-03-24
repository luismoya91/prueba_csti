@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-lg-12 justify-content-center" style="margin: 0 auto;">
        <div class="row">
            <div class="margin-tb">
                <div style="float:left;">
                    <h2 style="font-size: 35px;">Peliculas</h2>
                </div>
                <div style="float: right;">
                    <a class="btn btn-dark" href="{{ route('home') }}">Volver</a>
                    <a class="btn btn-success" href="{{ route('pelicula.create') }}">Crear</a>
                </div>
            </div>
        </div>
        <table class="table table-bordered" style="margin-top: 15px;text-align:center">
            <tr>
                <th scope="col" style="width: 5%;">No</th>
                <th scope="col" style="width: 15%;">Autor</th> 
                <th scope="col" style="width: 15%;">Categoria</th>
                <th scope="col" style="width: 15%;">Nombre</th>
                <th scope="col" style="width: 10%;">Fecha Lanzamiento</th>
                <th scope="col" style="width: 15%;">Productora</th>
                <th scope="col" style="width: 25%;">Accíon</th>
            </tr>
            @foreach ($data as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->autor->nombre }}</td>
                <td>{{ $value->categoria->nombre }}</td>
                <td>{{ $value->nombre }}</td>
                <td>{{ $value->fecha_lanzamiento }}</td>
                <td>{{ $value->productora }}</td>
                <td>
                    <form action="{{ route('pelicula.destroy',$value->id) }}" method="POST">   
                        <a class="btn btn-info" href="{{ route('pelicula.show',$value->id) }}">Ver</a>    
                        <a class="btn btn-primary" href="{{ route('pelicula.edit',$value->id) }}">Editar</a>   
                        @csrf
                        @method('DELETE')      
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection