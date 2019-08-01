@extends('layouts.app')
    @section('content')
        <div class="card">
            <div class="card-header text-center">
                <strong class="text-center">Formulario de Edicion de registro con ID: {{ $post->id }}</strong> 
            </div>
            
            <div class="card-body">
               <form action="{{ url('/posts/'.$post->id.'/update') }}" method="POST">
                    <p class="card-text">Diligencie los siguientes datos, por favor...</p>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for=""><strong>Post</strong></label>
                                <textarea name="txtPost" id="txtPost" cols="10" rows="5" class="form-control">{{ $post->posts }}</textarea>
                            
                            </div>
                        </div>
                        {{ csrf_field() }}
                        <div class="col-6">
                            <label for=""><strong>Url Imagen</strong></label>
                            <textarea name="txtImage" id="txtImage" cols="10" rows="5" class="form-control">{{ $post->image }}</textarea>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <a href="{{ url('/posts') }}" class="btn btn-danger btn-block">Regresar</a>
                        </div>
                        <div class="col-6">               
                            <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                        </div>
                    </div>
               </form>
            </div>
        </div>
    @endsection