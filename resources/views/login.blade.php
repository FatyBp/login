@extends('layout/main')
@section('contenido')
    <div class="container">
        <h1 class="text-center mb-2">Inicio de Sesion</h1>
        <div class="row justify-content-center mt-3">
            <div class="col-5">
                <form action="{{ route('logear') }}" method="POST" class="form-control">
                    @method('POST')
                    @csrf
                    <label class="label-control" for="">User</label>
                    <input type="text" name="name" class="form-control">
                    <label class="label-control" for="">Password</label>
                    <input type="password" name="password" class="form-control">

                    <div class="row justify-content-center">
                        <div class="col-3"><button class="btn btn-primary mt-2 container-fluid">Enviar</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection