@extends('layouts.app')
    @section('content')
        <h1 class="title h2 text-center"> ID: {{$post->id}} </h1>    
           
        <hr class="my-2">

        <div class="card mb-3 mr-auto ml-auto" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ $post->image }}" class="card-img img-thumbnail mr-auto ml-auto" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text"><strong style="color: red;">Comentario: </strong> {{ $post->posts }}</p>
                        <p class="card-text"><small class="text-muted">Creado el: {{ $post->created_at }}</small></p>
                    </div>
                </div>
            </div>

            <hr class="my-3">

            <div class="row">
                <div class="col-6">
                    <a href="{{ url('/posts') }}" class="btn btn-danger btn-block">Regresar</a>
                </div>
                <div class="col-6">               
                    <a href="{{ url('/posts/'.$post->id.'/edit') }}" class="btn btn-primary btn-block">Editar</a>
                </div>
            </div>
        </div>
        
    @endsection
