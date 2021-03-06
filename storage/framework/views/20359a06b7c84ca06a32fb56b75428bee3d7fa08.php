<?php $__env->startSection('dashboard'); ?>

    <!-- Main content -->
    <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                      <div class="box-header">
                        <h3 class="box-title">Colaboradores</h3>

                        <div class="box-tools">
                          
                            <div class="input-group-btn ">
                                <a href="<?php echo e(route('colaboradores.novo')); ?>" class="btn btn-info "> <i class="fa fa-plus"> ADICIONAR</i> </a>
                            </div>
                          
                        </div>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Idade</th>
                                <th>Estado Civil</th>
                                <th>RG</th>
                                <th>CPF</th>
                                <th>Visualizar</th>
                            </tr>

                            <?php $__currentLoopData = $colaboradores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $colaborador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <?php
                            //MODIFICANDO MODO DE EXIBIÇÃO DO "RG"
                            $rgColab = $colaborador->rg;
                            $rg = substr_replace($rgColab, '.', 2, 0);
                            $rg = substr_replace($rg, '.', 6, 0);
                            $rg = substr_replace($rg, '-', 10, 0);

                            //MODIFICANDO MODO DE EXIBIÇÃO DO "CPF"
                            $cpfColab = $colaborador->cpf;
                            $cpf = substr_replace($cpfColab, '.', 3, 0);
                            $cpf = substr_replace($cpf, '.', 7, 0);
                            $cpf = substr_replace($cpf, '-', 11, 0);
                            ?>
                            <tr>
                                <td><?php echo e($colaborador->id); ?></td>
                                <td><?php echo e($colaborador->nome); ?></td>
                                <td><?php echo e(floor((time() - strtotime($colaborador->nascimento))/31556926)); ?></td>
                                <td><?php echo e($colaborador->civil); ?></td>
                                <td><?php echo e($rg); ?></td>
                                <td><?php echo e($cpf); ?></td>
                                <td><a href="<?php echo e(route('colaborador.dados',['colaborador' => $colaborador->id ])); ?>"><i class="fa fa-eye text-success"></i></a></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </table>
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>

            </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('colaboradores.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sbr/resources/views/colaboradores/index.blade.php ENDPATH**/ ?>