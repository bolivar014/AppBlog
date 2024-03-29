@extends('layouts.app')
    @section('content')
        <div class="container">
            <h1 class="title h2 text-center">Tablas de Posts...</h1>
            
            <hr class="my-2">
            
            <a href="{{ url('/posts/create') }}" class="btn btn-success">Agregar Post</a>
                
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
                                    <form action="{{ url('/posts/'.$post->id.'/destroy') }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger" rel="tooltip" type="submit" title="Eliminar">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                        <a href="{{ url('/posts/'.$post->id.'/edit') }}" class="btn btn-info " rel="tooltip" type="button" title="Editar">
                                            <i class="fa fa-user"></i>
                                        </a>
                                        <a class="btn btn-success" href="{{ url('/posts/'.$post->id.'/show') }}" rel="tooltip" title="Ver">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </form>
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