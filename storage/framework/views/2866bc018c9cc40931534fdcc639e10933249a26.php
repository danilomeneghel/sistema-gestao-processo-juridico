<?php $__env->startSection('content'); ?>

<h2 class="page-header">Cliente</h2>

<div class="panel panel-default">
    
    <div class="panel-body">

        <form action="<?php echo e(url('/clientes')); ?>" method="POST" class="form-horizontal">

        
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
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-6">
                <input type="text" name="email" id="email" class="form-control" value="<?php echo e(isset($model['email']) ? $model['email'] : ''); ?>" readonly="readonly">
            </div>
        </div>

        
        <div class="form-group">
            <label for="data_criacao" class="col-sm-3 control-label">Data Criacao</label>
            <div class="col-sm-6">
                <input type="text" name="data_criacao" id="data_criacao" class="form-control" value="<?php echo e(isset($model['data_criacao']) ? $model['data_criacao'] : ''); ?>" readonly="readonly">
            </div>
        </div>

        
        <div class="form-group">
            <label for="data_edicao" class="col-sm-3 control-label">Data Edicao</label>
            <div class="col-sm-6">
                <input type="text" name="data_edicao" id="data_edicao" class="form-control" value="<?php echo e(isset($model['data_edicao']) ? $model['data_edicao'] : ''); ?>" readonly="readonly">
            </div>
        </div>

        
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <a class="btn btn-default" href="<?php echo e(url('/clientes')); ?>"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
            </div>
        </div>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>