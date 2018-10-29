<?php $__env->startSection('content'); ?>

<h2 class="page-header">Pedido</h2>

<div class="panel panel-default">
    
    <div class="panel-body">

        <form action="<?php echo e(url('/pedidos')); ?>" method="POST" class="form-horizontal">

        
        <div class="form-group">
            <label for="id" class="col-sm-3 control-label">Id</label>
            <div class="col-sm-6">
                <input type="text" name="id" id="id" class="form-control" value="<?php echo e(isset($model['id']) ? $model['id'] : ''); ?>" readonly="readonly">
            </div>
        </div>

        
        <div class="form-group">
            <label for="tipo_pedido" class="col-sm-3 control-label">Tipo Pedido</label>
            <div class="col-sm-6">
                <input type="text" name="tipo_pedido" id="tipo_pedido" class="form-control" value="<?php echo e(isset($model['tipo_pedido']) ? $model['tipo_pedido'] : ''); ?>" readonly="readonly">
            </div>
        </div>

        
        <div class="form-group">
            <label for="valor_risco_provavel" class="col-sm-3 control-label">Valor Risco Provavel</label>
            <div class="col-sm-6">
                <input type="text" name="valor_risco_provavel" id="valor_risco_provavel" class="form-control" value="<?php echo e(isset($model['valor_risco_provavel']) ? $model['valor_risco_provavel'] : ''); ?>" readonly="readonly">
            </div>
        </div>

        
        <div class="form-group">
            <label for="status" class="col-sm-3 control-label">Status</label>
            <div class="col-sm-6">
                <input type="text" name="status" id="status" class="form-control" value="<?php echo e(isset($model['status']) ? $model['status'] : ''); ?>" readonly="readonly">
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
                <a class="btn btn-default" href="<?php echo e(url('/pedidos')); ?>"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
            </div>
        </div>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>