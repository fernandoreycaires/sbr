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
                        <h3 class="box-title">Area Chart</h3>

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

            <!-- Info boxes -->
            <!--
                QUADROS DE INFORMAÇÃO DOS MESES
            -->

            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-calendar"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">JANEIRO / <?php echo e(date('Y')); ?> </span>
                            <span class="info-box-number">R$ 90 <small>,00</small></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                <!-- /.info-box -->
                </div>

                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-calendar"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">FEVEREIRO / <?php echo e(date('Y')); ?></span>
                            <span class="info-box-number">R$ 41<small>,41</small> </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix visible-sm-block"></div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-calendar"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">MARÇO / <?php echo e(date('Y')); ?></span>
                            <span class="info-box-number">R$ 760 <small>,00</small> </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                <!-- /.info-box -->
                </div>

                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="fa fa-calendar"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">ABRIL / <?php echo e(date('Y')); ?></span>
                            <span class="info-box-number">R$ 2,000 <small>,00</small></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-calendar"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">MAIO / <?php echo e(date('Y')); ?></span>
                            <span class="info-box-number">R$ 2,000 <small>,00</small></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-maroon"><i class="fa fa-calendar"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">JUNHO / <?php echo e(date('Y')); ?></span>
                            <span class="info-box-number">R$ 2,000 <small>,00</small></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-lime"><i class="fa fa-calendar"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">JULHO / <?php echo e(date('Y')); ?></span>
                            <span class="info-box-number">R$ 2,000 <small>,00</small></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-fuchsia"><i class="fa fa-calendar"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">AGOSTO / <?php echo e(date('Y')); ?></span>
                            <span class="info-box-number">R$ 2,000 <small>,00</small></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-orange"><i class="fa fa-calendar"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">SETEMBRO / <?php echo e(date('Y')); ?></span>
                            <span class="info-box-number">R$ 2,000 <small>,00</small></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-blue"><i class="fa fa-calendar"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">OUTUBRO / <?php echo e(date('Y')); ?></span>
                            <span class="info-box-number">R$ 2,000 <small>,00</small></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-purple"><i class="fa fa-calendar"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">NOVEMBRO / <?php echo e(date('Y')); ?></span>
                            <span class="info-box-number">R$ 2,000 <small>,00</small></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-calendar"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">DEZEMBRO / <?php echo e(date('Y')); ?></span>
                            <span class="info-box-number">R$ 2,000 <small>,00</small></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->


            </div>
            <!-- /.row -->

    </section>
    <!-- /.content -->

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('fechamentos.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sbr/resources/views/fechamentos/index.blade.php ENDPATH**/ ?>