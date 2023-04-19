<?php $__env->startSection('content'); ?>

<h2 class="page-header">Perfil</h2>

<div class="panel panel-default">

    <div class="panel-body">

        <form action="<?php echo e(url('/profile')); ?>" method="POST" class="form-horizontal">
            <?php echo e(csrf_field()); ?>


            <?php if(isset($model)): ?>
                <input type="hidden" name="_method" value="PUT">
            <?php endif; ?>

            <input type="hidden" name="id" id="id" class="form-control" value="<?php echo e(isset($model['id']) ? $model['id'] : ''); ?>" readonly="readonly">

            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Nome</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="name" class="form-control" value="<?php echo e(isset($model['name']) ? $model['name'] : ''); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" name="email" id="email" class="form-control" value="<?php echo e(isset($model['email']) ? $model['email'] : ''); ?>" readonly="readonly">
                </div>
            </div>
	          <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Senha</label>
                <div class="col-sm-6">
                    <input type="text" name="password" id="password" class="form-control" value="">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <a class="btn btn-default" href="<?php echo e(url('/home')); ?>"><i class="fa fa-arrow-left"></i> Back</a>
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-hdd-o"></i> Save
                    </button>
                </div>
            </div>
        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>