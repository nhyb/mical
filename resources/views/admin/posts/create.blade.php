@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> 
                    Nueva Noticia
                </div>

                <div class="panel-body">

                <form class='form' action="{{ route('noticias.store')}}" method='POST'>
                {{ csrf_field() }}  
                    <div class="form-group">
                        <label >Titulo</label>
                        <input type="text" class="form-control" name="title" placeholder="Ingrese Titulo">
                    </div>
                    <div class="form-group">
                        <label>Descripcion Noticia</label>
                        <textarea name="body"  placeholder="Ingresa la noticia"></textarea>
                    </div>
                    <div class="form-group">
                        <label >Autor</label>
                        <input type="text" name="author" placeholder="Ingresa autor">
                    </div>
                    <button class="btn btn-success">
                        Enviar
                    </button>
                </form>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection