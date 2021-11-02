@extends('layout.app')
@section('title','Nota - calificaciones')
@section('title-content','Mis notas')
@section('panel-content')

    <table class="table table-responsive-sm table-striped" id="table_notas">
        <thead>
            <tr>
                <th>#</th>
                <th>Asig</th>
                <th>N. 1</th>
                <th>N. 2</th>
                <th>N. 3</th>
                <th>N. 4</th>
                <th>Parcial</th>
                <th>Prom.</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @php($index = 1)
            @foreach ($notas as $nota)
                
            <tr>
                <td>{{ $index ++ }}</td>
                <td>{{ $nota->nombreCurso }}</td>
                <td align="end">{{ $nota->nota1 }}</td>
                <td align="end">{{ $nota->nota2 }}</td>
                <td align="end">{{ $nota->nota3 }}</td>
                <td align="end">{{ $nota->nota4 }}</td>
                <td align="end">{{ $nota->parcial }}</td>
                <td align="end">{{ $nota->promedio }}</td>
                <td align="center">
                    @if (6 < $nota->promedio)
                        Aprobado
                    @else
                        Reprobado
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection