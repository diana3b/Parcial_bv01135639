<div class="container mb-5">
    <div class="card" style="background-color: #203338;color: #1aa143;">
        <h5 class="card-header">
        <i class="fas fa-store-alt"> </i> Sistema Gestión Notas(SGN)
        </h5>
    </div>
    <div class="card-body" style="background-color: #757575;">
        <div class="row">
            <div class="col-md-4">
                <div class="alert alert-primary">
                    <i class="fas fa-user"></i> 
                        @if (isset(Auth::user()->nombre))
                        Bienvenido/a: {{ Auth::user()->nombre }}

                        @endif    
                    <div style="text-align: center;">
                        <br>
                        
                    </div>
                    <div class="row">
                        @if (auth()->user()->hasRoles([1]))
                        <div class="col-12 col-md-6 mb-2">
                            <a href="{{ route('user.index') }}" class="btn btn-secondary procesos-v"> 
                                <i class="fas fa-users fa-2x"></i><br>
                                Usuarios
                            </a>
                        </div>
                        <div class="col-12 col-md-6 mb-2">
                            <a href="{{ route('curso.index') }}" class="btn btn-secondary nav-item usuario">
                                <i class="fas fa-book fa-2x"></i><br>
                                Cursos
                            </a>
                        </div>
                        @endif
                        @if (auth()->user()->hasRoles([1,2])) 
                        <div class="col-12 col-md-6 mb-2">
                            <a href="{{ route('docente.index') }}" class="btn btn-secondary nav-item ventas">
                                <i class="far fa-clipboard fa-2x"></i><br>
                                Calificar
                            </a>
                        </div>
                        @endif
                        @if (auth()->user()->hasRoles([1,3]))
                        <div class="col-12 col-md-6 mb-2">
                            <a href="{{ route('estudiante.index') }}" class="btn btn-secondary nav-item ventas">
                            <i class="fas fa-book fa-2x"></i><br>
                                Cursos
                            </a>
                        </div>
                        <div class="col-12 col-md-6 mb-2">
                            <a href="{{ route('estudiante.show') }}" class="btn btn-secondary nav-item ventas">
                                <i class="far fa-sticky-note fa-2x"></i><br>
                                Mis notas
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
                
            </div>
            <div class="col-md-8">
            <div class="card">
            <div class="card-header" style="background-color: #203338;color: #ff7043;">
                <b>@yield('title-content')</b>
            </div>
            <div class="card-body">
                @yield('panel-content')
            </div>
            </div>
            </div>
        </div>
    </div>
    
</div>