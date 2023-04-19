<?php $__env->startSection('content'); ?>

<h2 class="page-header">Processo</h2>

<div class="panel panel-default">

    <div class="panel-body">

        <form action="<?php echo e(url('/processos'.( isset($model) ? "/" . $model->id : ""))); ?>" method="POST" class="form-horizontal">
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
                <label for="nro_processo" class="col-sm-3 control-label">Nro Processo</label>
                <div class="col-sm-6">
                    <input type="text" name="nro_processo" id="nro_processo" class="form-control" value="<?php echo e(isset($model['nro_processo']) ? $model['nro_processo'] : ''); ?>" required="required">
                </div>
            </div>
            <div class="form-group">
                <label for="pedido" class="col-sm-3 control-label">Pedidos</label>
                <div class="col-sm-8">
                    <select id="pedido" name="pedido[]" multiple class="form-control">
 											 <?php $__currentLoopData = $pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 												 <option value="<?php echo e($pedido->id); ?>"><?php echo e($pedido->tipopedido->nome.' (R$ '.number_format($pedido->valor_risco_provavel, 2, ',', ' ').')'); ?></option>
 											 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 									 </select>
                </div>
            </div>
            <div class="form-group">
                <label for="id_tipo_pedido" class="col-sm-3 control-label">Reu Principal</label>
                <div class="col-sm-2">
                    <select name="id_cliente" id="id_cliente" class="form-control" required="required">
                        <?php if($clientes->count()): ?>
                            <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($cliente->id); ?>" <?php echo e($selecionaCliente == $cliente->id ? "selected=selected" : ""); ?>><?php echo e($cliente->nome); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="data_distribuicao" class="col-sm-3 control-label">Data Distribuição</label>
                <div class="col-sm-3">
                    <input type="date" name="data_distribuicao" id="data_distribuicao" class="form-control" value="<?php echo e(isset($model['data_distribuicao']) ? $model['data_distribuicao'] : ''); ?>" required="required">
                </div>
            </div>
            <div class="form-group">
                <label for="valor_causa" class="col-sm-3 control-label">Valor Causa</label>
                <div class="col-sm-2">
                    <input type="number" name="valor_causa" id="valor_causa" class="form-control" value="<?php echo e(isset($model['valor_causa']) ? $model['valor_causa'] : ''); ?>" required="required">
                </div>
            </div>
            <div class="form-group">
                <label for="vara" class="col-sm-3 control-label">Vara</label>
                <div class="col-sm-6">
                    <input type="text" name="vara" id="vara" class="form-control" value="<?php echo e(isset($model['vara']) ? $model['vara'] : ''); ?>" required="required">
                </div>
            </div>
            <div class="form-group">
              <label for="uf" class="col-sm-3 control-label">UF</label>
              <div class="col-sm-2">
                <select name="uf" id="uf" default="<?php echo e(isset($model['uf']) ? $model['uf'] : 'SP'); ?>" class="form-control" required="required"></select>
              </div>
            </div>
            <div class="form-group">
                <label for="cidade" class="col-sm-3 control-label">Cidade</label>
                <div class="col-sm-6">
                    <select name="cidade" id="cidade" default="<?php echo e(isset($model['cidade']) ? $model['cidade'] : 'Selecione'); ?>" class="form-control" required="required"></select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <a class="btn btn-default" href="<?php echo e(url('/processos')); ?>"><i class="fa fa-arrow-left"></i> Back</a>
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