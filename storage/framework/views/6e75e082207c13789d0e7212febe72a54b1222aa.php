<?php $__env->startSection('dashboard'); ?>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <h3 class="profile-username text-center"> <?php echo e($usuario->name); ?> </h3>

                        <p class="text-muted text-center">Software Engineer</p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Adicionado em</b> <a class="pull-right"><?php echo e(date('d/m/Y H:i', strtotime($usuario->created_at))); ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Editado</b> <a class="pull-right"><?php echo e(date('d/m/Y H:i', strtotime($usuario->updated_at))); ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>E-Mail</b> <a class="pull-right"><?php echo e($usuario->email); ?> </a>
                            </li>
                        </ul>

                        <a href="<?php echo e(route('usuarios.formedit',['usuario' => $usuario->id])); ?>" class="btn btn-primary btn-block"><b>Editar</b></a>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->


            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('usuarios.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/adminLTE/resources/views/usuarios/usuario.blade.php ENDPATH**/ ?>