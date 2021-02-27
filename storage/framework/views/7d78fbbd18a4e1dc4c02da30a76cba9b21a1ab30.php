<?php $__env->startSection('dashboard'); ?>

    <!-- Main content -->
    <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-6">
                    <!-- Profile Image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                        <h3 class="profile-username text-center"> Catálogo </h3>

                        <div class="box">

                            <?php $__currentLoopData = $linhas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $linha): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <div class="box-header" style="background-color: #e0f0ff ; " >
                                    <h3 class="box-title"> <?php echo e($linha->linha); ?> </h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body no-padding">
                                <table class="table">
                                        
                                        <tr>
                                            <th style="width: 10px"></th>
                                            <th></th>
                                            <th style="width: 40px">Estoque</th>
                                            <th style="width: 40px">Comprar</th>
                                        </tr>
                                    
                                    <?php $__currentLoopData = $sabores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sabor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if( $sabor->linha == $linha->id ): ?>
                                        <tr>
                                            <td></td>
                                            <td><?php echo e($sabor->sabor); ?> : </td>
                                            <td><input type="number" class="form-control" id="estoque_" ></td>
                                            <td><input type="number" class="form-control" id="comprar_"></td>
                                        </tr>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                                </div>
                                <!-- /.box-body -->
                            
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <!-- /.box -->
                            

                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="#" class="pull-right btn btn-success"> Salvar <i class="fa fa-check"></i></a>
                        </div>

                        <!-- /.box-footer -->
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <div class="col-md-6">
                    <!-- Profile Image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                        <h3 class="profile-username text-center"> Lista de Pedidos </h3>
                            <p>Teste de lado direito onde será listado os pedidos</p>
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

<?php echo $__env->make('pedidos.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sbr/resources/views/pedidos/index.blade.php ENDPATH**/ ?>