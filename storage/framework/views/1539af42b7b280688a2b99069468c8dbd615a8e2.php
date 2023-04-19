<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>ADV - Gestão de Processo Jurídico</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">

  	<!-- Styles -->
  	<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
  	<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
	</head>
	<body class="bg-page">
    <div class="bg-login">
        <div class="container-login">
            <div class="logo-login">
              <img src="<?php echo e(asset('images/logo.png')); ?>">
            </div>
            <div class="panel panel-default">
                <div class="panel-body box-login">
                    <h3 class="title-login">Login</h3>
      							<form class="form-login" method="POST" action="<?php echo e(route('login')); ?>">
      								<?php echo e(csrf_field()); ?>

      								<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
								          <i class="fa fa-user"></i>
      										<input id="email" type="email" class="form-control input-login" name="email" value="<?php echo e(old('email')); ?>" placeholder="E-mail" required autofocus>
      										<?php if($errors->has('email')): ?>
      											<span class="help-block">
      												<strong><?php echo e($errors->first('email')); ?></strong>
      											</span>
      										<?php endif; ?>
      								</div>
      								<div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
      									  <i class="fa fa-lock"></i>
      										<input id="password" type="password" class="form-control input-login" name="password" placeholder="Senha" required>
      										<?php if($errors->has('password')): ?>
      											<span class="help-block">
      												<strong><?php echo e($errors->first('password')); ?></strong>
      											</span>
      										<?php endif; ?>
      								</div>
      								<div class="form-group">
      								  <input type="submit" class="btn btn-login btn-lg btn-block" value="Login">
      								</div>
      								<!-- <div class="text-center">- OR -</div>
      								<div class="social-auth-links text-center">
      									<a href="<?php echo e(route('social.oauth', 'facebook')); ?>" class="btn btn-block btn-social btn-facebook btn-flat">
      										<i class="fa fa-facebook"></i>
      										Login with Facebook
      									</a>
      									<a href="<?php echo e(route('social.oauth', 'twitter')); ?>" class="btn btn-block btn-social btn-twitter btn-flat">
      										<i class="fa fa-twitter"></i>
      										Login with Twitter
      									</a>
      									<a href="<?php echo e(route('social.oauth', 'google')); ?>" class="btn btn-block btn-social btn-google btn-flat">
      										<i class="fa fa-google"></i>
      										Login with Google
      									</a>
      									<a href="<?php echo e(route('social.oauth', 'github')); ?>" class="btn btn-block btn-social btn-github btn-flat">
      										<i class="fa fa-github"></i>
      										Login with Github
      									</a>
      								</div> -->
                      <div class="login-links">
        							  <div class="col-xs-6">
          								<div class="pull-left">
          								  <a ui-sref="forgot_password" href="<?php echo e(route('password.request')); ?>">Esqueceu a senha?</a>
          								</div>
        							  </div>
        							  <div class="col-xs-6">
          								<div class="pull-right">
          								  <a ui-sref="register" class="text-center" href="<?php echo e(route('register')); ?>">Criar uma conta</a>
          								</div>
        							  </div>
      							  </div>
                    </form>
                </div>
          </div>
			</div>
		</div>
	</body>
</html>
