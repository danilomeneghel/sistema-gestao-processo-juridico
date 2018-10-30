<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Legal Insights</title>

	  <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">

	  <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/dist/css/bootstrap.min.css')); ?>">

	  <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo e(asset('css/dataTables.bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/responsive.dataTables.min.css')); ?>">

    <!-- MultiSelect -->
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-multiselect.css')); ?>">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
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
                  <a class="navbar-brand" href="<?php echo e(url('home')); ?>">
                      Legal Insights
                  </a>
              </div>

              <div class="collapse navbar-collapse" id="app-navbar-collapse">
                  <!-- Left Side Of Navbar -->
        				  <ul class="nav nav-navbar navbar-left">
          					<li class="menu-item"><a href="<?php echo e(url('home')); ?>">Home</a></li>
          					<li class="menu-item"><a href="<?php echo e(url('processos')); ?>">Processo</a></li>
          					<li class="menu-item"><a href="<?php echo e(url('pedidos')); ?>">Pedidos</a></li>
          					<li class="menu-item"><a href="<?php echo e(url('tipopedidos')); ?>">Tipo Pedidos</a></li>
          					<li class="menu-item"><a href="<?php echo e(url('clientes')); ?>">Clientes</a></li>
        				  </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="nav navbar-nav navbar-right">
                      <!-- Authentication Links -->
                      <?php if(Auth::guest()): ?>
                          <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                          <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                      <?php else: ?>
                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  <img src="<?php echo e(auth()->user()->avatar); ?>" alt="" width="30" class="img-circle">
                                  <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                              </a>

                              <ul class="dropdown-menu" role="menu">
                                  <li>
                                      <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                          Logout
                                      </a>
                                      <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                          <?php echo e(csrf_field()); ?>

                                      </form>
                                  </li>
                              </ul>
                          </li>
                      <?php endif; ?>
                  </ul>
              </div>
          </div>
      </nav>
  		<div class="container-fluid">
  				  <?php echo $__env->yieldContent('content'); ?>
  		</div>
    </div>

    <!-- Scripts -->
  	<script type="text/javascript" src="<?php echo e(asset('js/jquery.js')); ?>"></script>
  	<script type="text/javascript" src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>

    <!-- MultiSelect -->
    <script type="text/javascript" src="<?php echo e(asset('js/bootstrap-multiselect.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/multiselect.js')); ?>"></script>

    <!-- Cidades/Estados -->
    <script type="text/javascript">
      var APP_URL = <?php echo json_encode(url('/')); ?>;
    </script>
    
    <script type="text/javascript" src="<?php echo e(url('vendor/artesaos/cidades/js/scripts.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/cidades-estados.js')); ?>"></script>

  	<!-- App -->
  	<script type="text/javascript" src="<?php echo e(asset('js/app.js')); ?>"></script>

    <script type="text/javascript" src="<?php echo e(asset('js/jquery.dataTables.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/dataTables.bootstrap.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/dataTables.responsive.min.js')); ?>"></script>

    <script>
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
    </script>

    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
