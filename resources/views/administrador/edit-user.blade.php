@extends('layout.app')
@section('title-content','editar usuario')
@section('panel-content')

    <form method="POST" action="{{ route('user.update',$user) }}">
        @csrf @method('PUT')

        @include('administrador._form')

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Actualizar') }}
                </button>
            </div>
        </div>
    </form>
              
@endsection