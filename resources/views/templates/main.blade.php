<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sac-ProOffice| @yield('title') </title>
	<link rel="stylesheet" href="{{ asset('plugins/materialize/css/materialize.css') }}">
</head>
<body>
	@include('templates.navbar')
    <div class="container">
            @yield('content')
    </div>
	<script src="{{ asset('js/jquery.js')}}"></script>
	<script src="{{ asset('plugins/materialize/js/materialize.min.js')}}"></script>
</body>
</html>