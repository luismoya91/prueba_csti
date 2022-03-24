@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-lg-8 justify-content-center" style="margin: 0 auto;">
        <div class="row">
            <div class="margin-tb">
                <div style="float:left;">
                    <h2 style="font-size: 35px;">Informacion Pelicula</h2>
                </div>
                <div style="float: right;">
                    <a class="btn btn-dark" href="{{ route('pelicula.index') }}">Volver</a>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 15px;">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Autor:</strong>
                    {{$data->autor->nombre}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Categoria:</strong>
                    {{$data->categoria->nombre}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fecha Lanzamiento:</strong>
                    {{$data->fecha_lanzamiento}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    {{$data->nombre}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Productora:</strong>
                    {{$data->productora}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection