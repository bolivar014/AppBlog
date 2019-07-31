@extends('layouts.app')
    @section('content')
        <div class="card">
            <div class="card-header text-center">
                <strong class="text-center">Registrar Post</strong> 
            </div>
            
            <div class="card-body">
               <form action="{{ url('/posts') }}" method="POST">
                    <h5 class="card-title">Formulario de Registro</h5>
                    <p class="card-text">Diligencie los siguientes datos, por favor...</p>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for=""><strong>Post</strong></label>
                                <textarea name="txtPost" id="txtPost" cols="10" rows="5" class="form-control" placeholder="Digite su post">
                                </textarea>
                            
                            </div>
                        </div>
                        {{ csrf_field() }}
                        <div class="col-6">
                            <label for=""><strong>Url Imagen</strong></label>
                            <textarea name="txtImage" id="txtImage" cols="10" rows="5" class="form-control" placeholder="Digite la URL de su Imagen">
                            </textarea>
                            
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Guardar</a>
               </form>
            </div>
        </div>
    @endsection