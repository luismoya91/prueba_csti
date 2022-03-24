@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-lg-6 justify-content-center" style="margin: 0 auto;">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div style="float:left;">
                    <h2 style="font-size: 35px;">Editar Categoria - No {{ $categoria->id }}</h2>
                </div>
                <div style="float: right;">
                    <a class="btn btn-primary" href="{{ route('categoria.index') }}"> Atras</a>
                </div>
            </div>
        </div>
    
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form action="{{ route('categoria.update',$categoria->id) }}" method="POST" style="margin-top: 15px;">
            @csrf
            @method('PUT')
    
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        <input type="text" name="nombre" value="{{ $categoria->nombre }}" class="form-control" placeholder="Nombre">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary" style="margin-top: 15px;">Guardar</button>
                </div>
            </div>
    
        </form>
    </div>
</div>
        @endsection