<?php $__env->startSection('dashboard'); ?>

    <!-- Main content -->
    <section class="content">
            <!-- /.row -->
            <div class="row">
                <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                    <h3 class="box-title">Lista de Usuários</h3>
                        <div class="box-footer">
                            <a href="<?php echo e(route('usuarios.novo')); ?>" class="btn btn-info pull-right">Novo</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Usuário</th>
                            <th>E-Mail</th>
                            <th>Criado</th>
                            <th>Visualizar</th>
                            <th>Editar</th>
                            <th>Remover</th>
                        </tr>
                        <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($usuario->id); ?></td>
                            <td><?php echo e($usuario->name); ?></td>
                            <td><?php echo e($usuario->email); ?></td>
                            <td><?php echo e(date('d/m/Y H:i', strtotime($usuario->created_at))); ?></td>
                            <td> <a href="<?php echo e(route('usuarios.dados',['usuario' => $usuario->id])); ?>"><i class="fa fa-eye text-primary"></i> </a> </td>
                            <td> <a href="<?php echo e(route('usuarios.formedit',['usuario' => $usuario->id])); ?>"><i class="fa fa-edit text-success"></i> </a> </td>
                            <td> <a href="#"><i class="fa fa-window-close text-danger" onclick="event.preventDefault(); document.getElementById('deletar<?php echo e($usuario->id); ?>').submit();" ></i> </a>

                                <form id="deletar<?php echo e($usuario->id); ?>" action=" <?php echo e(route('usuarios.deletar', ['usuario' => $usuario->id])); ?> " method="post" style="display: none" >
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <input type="hidden" name="deleteUsuario" value="<?php echo e($usuario->id); ?>" >
                                    <!-- <button type="submit">Deletar</button>-->
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

<?php echo $__env->make('usuarios.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/adminLTE/resources/views/usuarios/index.blade.php ENDPATH**/ ?>