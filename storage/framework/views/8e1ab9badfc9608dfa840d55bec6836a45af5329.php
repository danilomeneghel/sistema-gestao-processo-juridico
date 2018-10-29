<?php $__env->startSection('content'); ?>

<h2 class="page-header"><?php echo e(ucfirst('Tipo Pedidos')); ?></h2>

<div class="panel panel-default">
    <div class="panel-body">
    		<a href="<?php echo e(url('tipopedidos/create')); ?>" class="btn btn-success" role="button"><i class="fa fa-plus"></i> <?php echo e(ucfirst('Tipo Pedido')); ?></a><br><br>
        <table class="table table-striped" id="thegrid">
          <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Ativo</th>
                <th style="width:50px"></th>
                <th style="width:50px"></th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        var theGrid = null;
        $(document).ready(function(){
            theGrid = $('#thegrid').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": true,
                "responsive": true,
                "ajax": "<?php echo e(url('tipopedidos/grid')); ?>",
                "columnDefs": [
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="<?php echo e(url('/tipopedidos')); ?>/'+row[0]+'">'+data+'</a>';
                        },
                        "targets": 1
                    },
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="<?php echo e(url('/tipopedidos')); ?>/'+row[0]+'/edit" class="btn btn-primary"><i class="fa fa-edit"></i> Update</a>';
                        },
                        "targets": 3                    },
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="#" onclick="return doDelete('+row[0]+')" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>';
                        },
                        "targets": 3+1
                    },
                ]
            });
        });
        function doDelete(id) {
            if(confirm('You really want to delete this record?')) {
               $.ajax({ url: '<?php echo e(url('/tipopedidos')); ?>/' + id, type: 'DELETE'}).success(function() {
                theGrid.ajax.reload();
               });
            }
            return false;
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>