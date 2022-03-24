@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-lg-8 justify-content-center" style="margin: 0 auto;">
        <div class="row">
            <div class="margin-tb">
                <div style="float:left;">
                    <h2 style="font-size: 35px;">Autores</h2>
                </div>
                <div style="float: right;">
                    <a class="btn btn-dark" href="{{ route('home') }}">Volver</a>
                    <a class="btn btn-success" href="{{ route('autor.create') }}">Crear</a>
                </div>
            </div>
        </div>
        <table class="table table-bordered" style="margin-top: 15px;text-align:center">
            <tr>
                <th scope="col" style="width: 5%;">No</th>
                <th scope="col" style="width: 60%;">Nombre</th>
                <th scope="col" style="width: 35%;">Accíon</th>
            </tr>
            @foreach ($data as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->nombre }}</td>
                <td>
                    <form action="{{ route('autor.destroy',$value->id) }}" method="POST">   
                        <a class="btn btn-info" href="{{ route('autor.show',$value->id) }}">Ver</a>    
                        <a class="btn btn-primary" href="{{ route('autor.edit',$value->id) }}">Editar</a>   
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