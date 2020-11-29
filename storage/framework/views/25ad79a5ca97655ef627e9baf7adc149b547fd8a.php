<?php $__env->startSection('dashboard'); ?>

    <!-- Main content -->
    <section class="content">

            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo e(route('fechamentos.adicionar')); ?>" class="btn btn-primary"> <i class="fa fa-plus"> ADICIONAR</i> </a>
                    <a href="<?php echo e(route('fechamentos.listar')); ?>" class="btn btn-primary"> <i class="fa fa-eye"> VISUALIZAR </i> </a>
                </div>
            </div>
            <br>
            <!--
                QUADRO DO GRAFICO
            -->
            <div class="row">
                <!-- /.col (LEFT) -->
                <div class="col-md-12">
                    <!-- AREA CHART -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                        <h3 class="box-title">Gráfico dos fechamentos financeiros mensais</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="box-body chart-responsive">
                            <div class="chart" id="grafico-fechamentos" style="height: 300px;"></div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            <!-- /.row -->
            </div>

    </section>
    <!-- /.content -->

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('fechamentos.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sbr/resources/views/fechamentos/index.blade.php ENDPATH**/ ?>