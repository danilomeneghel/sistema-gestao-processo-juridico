<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ADV Jurídico</title>

	  <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

	  <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}">

	  <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.dataTables.min.css') }}">

    <!-- MultiSelect -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-multiselect.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
<body>
    <div id="app">
      <nav class="navbar navbar-default navbar-static-top">
          <div class="container-header">
              <div class="navbar-header">

                  <!-- Collapsed Hamburger -->
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                      <span class="sr-only">Toggle Navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>

                  <!-- Branding Image -->
                  <a class="navbar-brand" href="{{ url('/home') }}">
                      ADV Jurídico
                  </a>
              </div>

              <div class="collapse navbar-collapse" id="app-navbar-collapse">
                  <!-- Left Side Of Navbar -->
        				  <ul class="nav nav-navbar navbar-left">
          					<li class="menu-item"><a href="{{ url('/home') }}">Home</a></li>
          					<li class="menu-item"><a href="{{ url('/processos') }}">Processo</a></li>
          					<li class="menu-item"><a href="{{ url('/pedidos') }}">Pedidos</a></li>
          					<li class="menu-item"><a href="{{ url('/tipopedidos') }}">Tipo Pedidos</a></li>
          					<li class="menu-item"><a href="{{ url('/clientes') }}">Clientes</a></li>
        				  </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="nav navbar-nav navbar-right">
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              <img src="images/avatar-placeholder.svg" alt="" width="30" class="img-circle">
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu" role="menu">
            								  <li><a href="{{ url('/profile') }}">Perfil</a></li>
            								  <li><a href="{{ url('/logout') }}">Sair</a></li>
                          </ul>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
  		<div class="container-fluid">
  				  @yield('content')
  		</div>
    </div>

    <!-- Scripts -->
  	<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
  	<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>

    <!-- MultiSelect -->
    <script type="text/javascript" src="{{ asset('js/bootstrap-multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/multiselect.js') }}"></script>

    <!-- Cidades/Estados -->
    <script type="text/javascript">
      var APP_URL = {!! json_encode(url('/')) !!};
    </script>

    <script type="text/javascript" src="{{ asset('js/scripts-ufs-cidades.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/ufs-cidades.js') }}"></script>

  	<!-- App -->
  	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/dataTables.responsive.min.js') }}"></script>

    <script>
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
    </script>

    @yield('scripts')
</body>
</html>
