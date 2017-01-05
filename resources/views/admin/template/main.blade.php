<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> @yield ('title', 'Default') | Panel de Administracion</title>
	<link rel="stylesheet"  href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
</head>
<body>
<nav class="navbar navbar-default">
 <img src="Plugins/bootstrap/img/logo.png" class="img-rounded" alt="Pro-Office">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    @if (Auth::user())
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clientes <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Agregar </a></li>
            <li><a href="#">Eliminar</a></li>
            <li><a href="#">Modifica </a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Reportes</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Salas <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Agregar </a></li>
            <li><a href="#">Eliminar</a></li>
            <li><a href="#">Descripcion</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Estado</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inventarios<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Agregar </a></li>
            <li><a href="#">Eliminar</a></li>
            <li><a href="#">Modifica </a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Reportes</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route ('admin.users.index')}}">Usuarios</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> {{ Auth::user() -> name}} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route( 'admin.auth.logout')}}">Salir</a></li>
          </ul>
        </li>
      </ul>
      @endif

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	@include('admin.template.nav')
	<section>
		@yield('content')
	</section>
	<script src="{{ asset('Plugins/jquery/js/jquery-3.1.1.js')}}"></script>
	<script src="{{ asset('Plugins/bootstrap/js/bootstrap.js')}}"></script>

</body>
</html>

