<?php $__env->startSection('content'); ?>

<h2 class="page-header">Pedido</h2>

<div class="panel panel-default">

    <div class="panel-body">

        <form action="<?php echo e(url('/pedidos'.( isset($model) ? "/" . $model->id : ""))); ?>" method="POST" class="form-horizontal">
            <?php echo e(csrf_field()); ?>


            <?php if(isset($model)): ?>
                <input type="hidden" name="_method" value="PATCH">
            <?php endif; ?>

            <div class="form-group">
                <label for="id" class="col-sm-3 control-label">Id</label>
                <div class="col-sm-6">
                    <input type="text" name="id" id="id" class="form-control" value="<?php echo e(isset($model['id']) ? $model['id'] : ''); ?>" readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                <label for="id_tipo_pedido" class="col-sm-3 control-label">Tipo Pedido</label>
                <div class="col-sm-2">
                    <select name="id_tipo_pedido" id="id_tipo_pedido" class="form-control">
                        <?php if($tipopedidos->count()): ?>
                            <?php $__currentLoopData = $tipopedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipopedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($tipopedido->id); ?>" <?php echo e($selecionaTipopedido == $tipopedido->id ? "selected=selected" : ""); ?>><?php echo e($tipopedido->nome); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="valor_risco_provavel" class="col-sm-3 control-label">Valor Risco Provavel</label>
                <div class="col-sm-2">
                    <input type="number" name="valor_risco_provavel" id="valor_risco_provavel" class="form-control" value="<?php echo e(isset($model['valor_risco_provavel']) ? $model['valor_risco_provavel'] : ''); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="status" class="col-sm-3 control-label">Status</label>
                <div class="col-sm-6">
                    <input type="text" name="status" id="status" class="form-control" value="<?php echo e(isset($model['status']) ? $model['status'] : ''); ?>">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <a class="btn btn-default" href="<?php echo e(url('/pedidos')); ?>"><i class="fa fa-arrow-left"></i> Back</a>
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