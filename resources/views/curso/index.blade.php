@extends('layout.app')
@section('title', 'cursos')
@section('title-content','Cursos')
@section('panel-content')
<a class="btn btn-outline-secondary mb-3" href="{{ route('curso.create') }}">Agregar<i class="fas fa-user-plus"></i></a>
<table class="table table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl" id="table_curso">
    <thead align="center" class="thead-dark">
        <tr>
            <th>#</th>
            <th>Cursos</th>
            <th>Ciclo - Año</th>
            <th>Profesor</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($cursos as $curso)
            
        <tr>
            <td>{{ $curso->id }}</td>
            <td>{{ $curso->nombreCurso }}</td>
            <td>{{ $curso->ciclo." - ".$curso->year }}</td>
            <th>{{ $curso->user->nombre." ".$curso->user->apellido }}</th>
            <td>
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route('curso.edit',$curso) }}" class="btn btn-outline-info btn-sm"><i class="far fa-edit"></i></a>
                        
                    </div>
                    <div class="col-md-6">

                        <form action="{{ route('curso.destroy',$curso) }}" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </div>
                </div>
            </td>
        </tr>
        @empty
            
        @endforelse
    </tbody>
</table>

@endsection