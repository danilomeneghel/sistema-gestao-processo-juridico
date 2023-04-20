<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row">
		<div class="text-center">
			<h2>Bem-Vindo, <?php echo e(Auth::user()->name); ?>!</h2>
			<p>Sistema de Processos Jurídicos</p>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>