@extends('layout.app')
@section('title','Docente')
@section('title-content','Asignar notas')
@section('panel-content')
    @if ($estudiantes->isNotEmpty())
    <table class="table table-responsive-sm table-striped" id="table_notas-docente">
        <thead>
            <tr>
                <th>#</th>
                <th>Estudiantes</th>
                <th>N. 1</th>
                <th>N. 2</th>
                <th>N. 3</th>
                <th>N. 4</th>
                <th>Parcial</th>
                <th>Prom.</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @php($index = 1)
            @foreach ($estudiantes as $estudiante)
                
            <tr>
                <td>{{ $index ++ }}</td>
                <td>{{ $estudiante->nombre }}</td>
                <td>{{ $estudiante->nota1 }}</td>
                <td>{{ $estudiante->nota2 }}</td>
                <td>{{ $estudiante->nota3 }}</td>
                <td>{{ $estudiante->nota4 }}</td>
                <td>{{ $estudiante->parcial }}</td>
                <td>{{ $estudiante->promedio }}</td>
                <td>
                    <a href="{{ route('nota.edit',$estudiante->nota_id) }}" class="btn btn-outline-secondary">Modificar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="container">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <p>No hay estudiantes inscritos</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    @endif

@endsection