@extends('layout.app')
@section('title','Docente')
@section('title-content','Calificar')
@section('panel-content')
    @if ($cursos->isNotEmpty())
    <table class="table table-responsive-sm table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Cursos</th>
                <th>Ciclo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @php($index = 1)
            @foreach ($cursos as $curso)
            <tr>
                <td>{{ $index ++ }}</td>
                <td>{{ $curso->nombreCurso }}</td>
                <td>{{ $curso->ciclo.'-'.$curso->year }}</td>
               <td>
                    <a href="{{ route('nota.index',$curso) }}" class="btn btn-info">Ver notas</a>
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
    @else
    <div class="container">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <p>No hay cursos asignados para tì</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    @endif
@endsection