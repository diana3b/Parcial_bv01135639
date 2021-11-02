@extends('layout.app')
@section('title','Docente')
@section('title-content','Asignar nota')
@section('panel-content')

    <table class="table table-responsive-sm table-responsive-md  table-responsive-xl  table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Estudiante</th>
                <th>N. 1</th>
                <th>N. 2</th>
                <th>N. 3</th>
                <th>N. 4</th>
                <th>Parcial</th>
                <th>Prom.</th>
                <th>Act.</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($estudiantes as $estudiante)
                
            <tr>
                <td>{{ $estudiante->id }}</td>
                <td>{{ $estudiante->nombre }}</td>
                <form action="{{ route('nota.update',[$estudiante->nota_id,$estudiante->curso_id]) }}" method="POST">
                    @csrf @method('PUT')
                    <td><input class="w-100 mx-3" name="nota1" type="number" step="0.01" min="0" max="10" value="{{ $estudiante->nota1 }}"></td>
                    <td><input class="w-100 mx-3" name="nota2" type="number" step="0.01" min="0" max="10" value="{{ $estudiante->nota2 }}"></td>
                    <td><input class="w-100 mx-3" name="nota3" type="number" step="0.01" min="0" max="10" value="{{ $estudiante->nota3 }}"></td>
                    <td><input class="w-100 mx-3" name="nota4" type="number" step="0.01" min="0" max="10" value="{{ $estudiante->nota4 }}"></td>
                    <td><input class="w-100 mx-3" name="parcial" type="number" step="0.01" min="0" max="10" value="{{ $estudiante->parcial }}"></td>
                    <td>{{ $estudiante->promedio }}</td>
                    <td>
                        <button type="submit" class="btn btn-outline-success">update</a>
                    </td>
                </form>
                
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection