<?php $__env->startSection('content'); ?>

<h2 class="page-header">Tipo Pedido</h2>

<div class="panel panel-default">

    <div class="panel-body">

        <form action="<?php echo e(url('/tipopedidos')); ?>" method="POST" class="form-horizontal">

            <div class="form-group">
                <label for="id" class="col-sm-3 control-label">Id</label>
                <div class="col-sm-6">
                    <input type="text" name="id" id="id" class="form-control" value="<?php echo e(isset($model['id']) ? $model['id'] : ''); ?>" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label for="nome" class="col-sm-3 control-label">Nome</label>
                <div class="col-sm-6">
                    <input type="text" name="nome" id="nome" class="form-control" value="<?php echo e(isset($model['nome']) ? $model['nome'] : ''); ?>" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label for="ativo" class="col-sm-3 control-label">Ativo</label>
                <div class="col-sm-6">
                    <input type="text" name="ativo" id="ativo" class="form-control" value="<?php echo e(isset($model['ativo']) ? $model['ativo'] : ''); ?>" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <a class="btn btn-default" href="<?php echo e(url('/tipopedidos')); ?>"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
            </div>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>