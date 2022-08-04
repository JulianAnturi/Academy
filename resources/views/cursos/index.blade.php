@extends('layouts.app')

@section('titulo', 'Lista Cursos')

@section('contenido')
    <h2>Listado de Cursos</h2>
    {{-- FOREACH PERMITE ITERAR ARRAYS, ES DECIR PERMITE CICLOS EN LISTAS --}}
    <div class="row">
        @foreach ($cursito as $item)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($item->imagen)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->nombre }}</h5>

                        <p class="card-text">{{ $item->descripcion }}</p>
                        <p class="card-text">{{ $item->duracion }}</p>
                        <a href="#" class="btn btn-primary">Ver detalle</a>
                    </div>
                </div>
            </div>
            {{-- Las dobles llaves sirve para interpolar.
                Interpolar es trart una variable de otro lenguaje al lenguaje que se
                esta utilizando --}}
        @endforeach
    </div>
@endsection()
