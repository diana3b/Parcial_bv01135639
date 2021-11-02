@extends('layout.app')
@section('title', 'cursos')
@section('title-content','Agregar curso')
@section('panel-content')
<div class="card-body">
    <form action="{{ route('curso.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <input name="nombreCurso" type="text" placeholder="Nombre del curso" class="form-control @error('nombreCurso') is-invalid @enderror">
            
        </div>
        <div class="form-group">
            <input name="year" type="number" min="1" placeholder="Año" class="form-control @error('year') is-invalid @enderror">
        </div>
        <div class="form-group">
            <input name="ciclo" type="number" min="1" max="2" placeholder="Ciclo" class="form-control @error('ciclo') is-invalid @enderror">
        </div>
        <div class="form-group">
            <select name="user_id" class="form-control @error('user_id') is-invalid @enderror">
                <option value="">Profesores</option>
                @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->nombre." ".$user->apellido }}</option>
                    
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-outline-success">Guardar curso</button>
    </form>
</div>

@endsection