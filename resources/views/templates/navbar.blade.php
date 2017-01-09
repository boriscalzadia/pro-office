<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
     <img src="plugins/bootstrap/img/logo.png" class="img-rounded" alt="Pro-Office">
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                        @else
                            <li><a href="{{route('usuarios.index')}}">Usuarios</a></li>
                            <li><a href="{{route('clientes.index')}}">Clientes</a></li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Salas <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{route('salas.index')}}">Administrar Salas</a></li>
                                    <li><a href="{{route('inmuebles.index')}}">Administrar Muebles</a></li>
                                    {{-- <li><a href="{{route('detalles-salas.index')}}">Amueblar sala</a></li> --}}
                                </ul>
                            </li>
                            <li><a href="{{ route('servicios.index') }}">Servicios</a></li>
                            <li><a href="{{ route('provedores.index')}}">Proveedores</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>