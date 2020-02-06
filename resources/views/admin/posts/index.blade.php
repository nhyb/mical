@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                    >Noticias
                        <a href="{{ route('noticias.create') }}" class="btn btn-primary right">
                            <span class="glyphicon glyphicon-plus"></span> Crear
                        </a>
                </div>

                <div class="panel-body">
                <table class="table table-hover">
                    <thead class="thead-dark" >
                        <tr>
                            <th>Titulo</th>
                            <th>Descripcion</th>
                            <th>Autor</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->body }}</td>
                        <td>{{ $post->author }}</td>
                        <td>
                            <a class="btn btn-primary btn-xs" href="/noticias/{{$post->id}}/edit"  title="Editar" style="float:left;margin-right:5px;">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>

                            <form  action="/noticias/{{ $post->id }}" method="post" onSubmit="if(!confirm('Estas seguro de eliminar la noticia!?')){return false;}" >
                                <input type="hidden" name="_method" value="delete">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button class="btn btn-danger btn-xs" type="submit" title="Eliminar" style="float:left;">
                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    @endforelse
                    </tbody>
                </table>


                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection