@extends('layout.app')

@section('title-content','Agregar usuario')
@section('panel-content')

    <form method="POST" action="{{ route('user.store') }}">
        @csrf

        @include('administrador._form')

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
                
@endsection