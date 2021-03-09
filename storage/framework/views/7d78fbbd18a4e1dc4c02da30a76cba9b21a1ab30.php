<?php $__env->startSection('dashboard'); ?>

    <!-- Main content -->
    <section class="content">
             <!-- /.row -->
             <div class="row">
                <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                    <h3 class="box-title">Lista de Pedidos</h3>
                        <div class="box-footer">
                            <a href="#" class="btn btn-info pull-right" onclick="event.preventDefault(); document.getElementById('abrirNovoPedido').submit();" >Novo</a>
                                <form id="abrirNovoPedido" action=" <?php echo e(route('pedidos.novoPedido')); ?> " method="post" style="display: none" >
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="status" value="Aberto" >
                                </form>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>Pedido</th>
                            <th>Status</th>
                            <th>Volumes Sol.</th>
                            <th>Valor Solicitado</th>
                            <th>Volumes Lib.</th>
                            <th>Valor Liberado</th>
                            <th>Dia / Hora</th>
                            <th>Numero Ped. Oggi</th>
                            <th>Visualizar</th>
                            <th>Remover</th>
                        </tr>
                        
                        <?php $__currentLoopData = $listaPedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listaPedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <?php if($listaPedido->status == 'Aberto'): ?>
                                <div class="hidden"><?php echo e($status_cor = "bg-green"); ?></div>
                            <?php elseif($listaPedido->status == 'Fechado'): ?>
                                <div class="hidden"><?php echo e($status_cor = "bg-blue"); ?></div>
                            <?php endif; ?>

                            <tr>    
                                <td><?php echo e($listaPedido->id); ?></td>
                                <td><span class="badge <?php echo e($status_cor); ?>"> <?php echo e($listaPedido->status); ?> </span></td>
                                <td> <?php echo e($listaPedido->volume_solicitado); ?> Vol. </td>
                                <td> R$ <?php echo e($listaPedido->valor_solicitado); ?> </td>
                                <td> <?php echo e($listaPedido->volume_liberado); ?> Vol.</td>
                                <td> R$ <?php echo e($listaPedido->valor_liberado); ?> </td>
                                <td><?php echo e(date('d/m/Y - H:m:s', strtotime($listaPedido->created_at))); ?></td>
                                <td> # <?php echo e($listaPedido->num_pedido_oggi); ?> </td>
                                <td> <a href="<?php echo e(route('pedidos.visualizarPedido', ['pedido' => $listaPedido->id])); ?> "><i class="fa fa-eye text-primary"></i> </a> </td>
                                <td> <a href="#" onclick="event.preventDefault(); document.getElementById('deletar<?php echo e($listaPedido->id); ?>').submit();"><i class="fa fa-window-close text-danger" ></i> </a> 
                                    <form id="deletar<?php echo e($listaPedido->id); ?>" action=" <?php echo e(route('pedidos.deletePedido', ['pedido' => $listaPedido->id])); ?> " method="post" style="display: none" >
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <input type="hidden" name="deletePedido" value="<?php echo e($listaPedido->id); ?>" >
                                    </form>
                                </td>
                            </tr>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
                </div>
            </div>

    </section>
    <!-- /.content -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('pedidos.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sbr/resources/views/pedidos/index.blade.php ENDPATH**/ ?>