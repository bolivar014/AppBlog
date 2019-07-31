@extends('layouts.app')
    @section('content')
        <div class="container">
            <h1 class="title h2 text-center">Tablas de Publicaciones...</h1>
            <div class="row table-bordered table-hover" style="margin-top: 25px;">
                <table class="table table-bordered table-responsive-sm text-center">
                    <thead>
                        <tr>
                            <th scope="col" class="col-">ID</th>
                            <th scope="col" class="col-">POST</th>
                            <th scope="col" class="col-">DATE</th>
                            <th scope="col" class="col-">OPCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($posts as $post)
                            <tr>
                                <th scope="row">{{ $post->id }}</th>
                                <td>{{ $post->posts }}</td>
                                <td>{{ $post->created_at }}</td>
                                <td>
                                    <button class="btn btn-danger btn-block" type="button">Eliminar</button>
                                    <button class="btn btn-info btn-block" type="button">Editar</button>
                                    <a class="btn btn-success btn-block" href="{{ url('/posts/'.$post->id.'/show') }}">Ver</a>
                                </td>
                            </tr>
                        @empty
                            <p>No Hay Mensajes Destacados...</p>
                        @endforelse
                    </tbody>
                </table>
                
                @if(count($posts))
                    <div class="mt-2 mx-auto">
                        {{ $posts->links('pagination::bootstrap-4') }}
                    </div>
                @endif
            </div>
          
        </div>
    
    @endsection