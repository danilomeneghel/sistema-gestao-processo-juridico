<?php $__env->startSection('content'); ?>

<h2 class="page-header">Processo</h2>

<div class="panel panel-default">

    <div class="panel-body">

        <form action="<?php echo e(url('/processos')); ?>" method="POST" class="form-horizontal">

            <div class="form-group">
                <label for="id" class="col-sm-3 control-label">Id</label>
                <div class="col-sm-6">
                    <input type="text" name="id" id="id" class="form-control" value="<?php echo e(isset($model['id']) ? $model['id'] : ''); ?>" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label for="nro_processo" class="col-sm-3 control-label">Nro Processo</label>
                <div class="col-sm-6">
                    <input type="text" name="nro_processo" id="nro_processo" class="form-control" value="<?php echo e(isset($model['nro_processo']) ? $model['nro_processo'] : ''); ?>" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label for="pedido" class="col-sm-3 control-label">Pedido</label>
                <div class="col-sm-6">
					         <?php $__currentLoopData = $model->pedido; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div style="padding-bottom:4px">
                      <input type="text" name="pedido" class="form-control" value="<?php echo e($pedido->tipopedido['nome'].' (R$ '.number_format($pedido['valor_risco_provavel'], 2, ',', ' ').')'); ?>" readonly="readonly">
                    </div>
									 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <div class="form-group">
                <label for="nro_processo" class="col-sm-3 control-label">Cliente</label>
                <div class="col-sm-6">
                    <input type="text" name="id_cliente" id="id_cliente" class="form-control" value="<?php echo e(isset($model->cliente->nome) ? $model->cliente->nome : ''); ?>" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label for="data_distribuicao" class="col-sm-3 control-label">Data Distribuição</label>
                <div class="col-sm-6">
                    <input type="text" name="data_distribuicao" id="data_distribuicao" class="form-control" value="<?php echo e(isset($model['data_distribuicao']) ? $model['data_distribuicao'] : ''); ?>" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label for="valor_causa" class="col-sm-3 control-label">Valor Causa</label>
                <div class="col-sm-6">
                    <input type="text" name="valor_causa" id="valor_causa" class="form-control" value="<?php echo e(isset($model['valor_causa']) ? $model['valor_causa'] : ''); ?>" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label for="vara" class="col-sm-3 control-label">Vara</label>
                <div class="col-sm-6">
                    <input type="text" name="vara" id="vara" class="form-control" value="<?php echo e(isset($model['vara']) ? $model['vara'] : ''); ?>" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label for="cidade" class="col-sm-3 control-label">Cidade</label>
                <div class="col-sm-6">
                    <input type="text" name="cidade" id="cidade" class="form-control" value="<?php echo e(isset($model['cidade']) ? $model['cidade'] : ''); ?>" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label for="uf" class="col-sm-3 control-label">Uf</label>
                <div class="col-sm-6">
                    <input type="text" name="uf" id="uf" class="form-control" value="<?php echo e(isset($model['uf']) ? $model['uf'] : ''); ?>" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label for="data_criacao" class="col-sm-3 control-label">Data Criação</label>
                <div class="col-sm-6">
                    <input type="text" name="data_criacao" id="data_criacao" class="form-control" value="<?php echo e(isset($model['data_criacao']) ? $model['data_criacao'] : ''); ?>" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <label for="data_edicao" class="col-sm-3 control-label">Data Edição</label>
                <div class="col-sm-6">
                    <input type="text" name="data_edicao" id="data_edicao" class="form-control" value="<?php echo e(isset($model['data_edicao']) ? $model['data_edicao'] : ''); ?>" readonly="readonly">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <a class="btn btn-default" href="<?php echo e(url('/processos')); ?>"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
            </div>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>