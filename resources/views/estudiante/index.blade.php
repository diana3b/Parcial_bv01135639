@extends('layout.app')
@section('title','Estudiante')
@section('title-content','Cursos')
@section('panel-content')

    <table class="table table-responsive-sm table-striped" id="table_id">
        <thead>
            <tr>
                <th>#</th>
                <th>Cursos</th>
                <th>Ciclo</th>
                <th align="end">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
            <tr>
                <td>{{ $curso->id }}</td>
                <td>{{ $curso->nombreCurso }}</td>
                <td align="end">{{ $curso->ciclo.'-'.$curso->year }}</td>
               <td align="end">
                   <form action="{{ route('estudiante.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="curso_id" value="{{ $curso->id }}">
                       <button type="submit" class="btn btn-info">Inscribir <i class="fas fa-chalkboard-teacher"></i></button>
                   </form>
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>

@endsection