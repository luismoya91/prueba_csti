@extends('layouts.app')

@section('content')
<div class="col-lg-6 justify-content-center" style="margin: 0 auto;">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div style="float:left;">
                <h2 style="font-size: 35px;">Agregar Categoria</h2>
            </div>
            <div style="float:right;">
                <a class="btn btn-primary" href="{{ route('categoria.index') }}"> Volver</a>
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
    
    <form action="{{ route('categoria.store') }}" method="POST" style="margin-top: 15px;">
        @csrf
    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre categoria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-success" style="margin-top: 15px;">Crear</button>
            </div>
        </div>
    
    </form>
</div>
@endsection