@extends('layout.app')
@section('title','Usuarios')
@section('title-content','Usuarios')
@section('panel-content')
<a class="btn btn-outline-success mb-3" href="{{ route('user.create') }}">Agregar<i class="fas fa-user-plus"></i></a>
    <table class="table table-responsive-sm table-responsive-md table-responsive-lg dt-responsive" id="table_usuario">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre completo</th>
                
                <th>Email</th>
                
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @php($index = 1)
            @forelse ($users as $user)
                
            <tr>
                <td>{{ $index ++ }}</td>
                <td>{{ $user->nombre." ".$user->apellido }}</td>
                
                <td>{{ $user->email }}</td>
                
                <td>{{ $user->role->role }}</td>
                <td>
                    <div class="row">
                        <a href="{{ route('user.edit',$user) }}" class="btn btn-info btn-sm mx-2"><i class="fas fa-user-tie"></i></a>
                        <form id="delete-user" action="{{ route('user.destroy',$user->id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button class="btn btn-outline-danger btn-sm" type="submit"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
                
            @endforelse
        </tbody>
    </table>
</div>
@endsection