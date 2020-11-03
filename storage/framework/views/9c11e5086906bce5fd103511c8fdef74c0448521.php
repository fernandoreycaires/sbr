<?php $__env->startSection('dashboard'); ?>


    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box)  -->
        <div class="row">
            <form class="form-horizontal" action="<?php echo e(route('colaborador.addContrato')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <input type="hidden" name="inputIdColaborador" value="<?php echo e($colaborador->id); ?>">

                <div class="col-md-6">
                    <!-- DADOS DO ENDEREÇO -->
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Adicionar Contrato de Trabalho: </h3>
                            <h3 class="profile-username text-center"><?php echo e($colaborador->nome); ?> </h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->

                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputSalario" class="col-sm-3 control-label">Salário R$</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputSalario" name="inputSalario" placeholder="Somente números">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputCarga" class="col-sm-3 control-label">Carga Horária</label>

                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputCarga" name="inputCarga" placeholder="ex: 48 Horas Semanais ...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputOcupacao" class="col-sm-3 control-label">Ocupação</label>

                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputOcupacao" name="inputOcupacao" placeholder="Gerente/ Caixa/ Faxina ...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputStatus" class="col-sm-3 control-label">Status</label>

                                <div class="col-sm-9">
                                    <!-- radio -->
                                        <label>
                                            <input type="radio" name="inputStatus" id="inputStatus" value="ativo" class="flat-green" checked>
                                            Ativo
                                        </label>
                                        &nbsp;&nbsp;
                                        <label>
                                            <input type="radio" name="inputStatus" id="inputStatus" value="inativo" class="flat-red">
                                            Inativo
                                        </label>
                                    <!-- /. radio -->
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEntrada" class="col-sm-3 control-label">Entrada</label>

                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="inputEntrada" name="inputEntrada">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputSaida" class="col-sm-3 control-label">Saida</label>

                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="inputSaida" name="inputSaida">
                                </div>
                            </div>
                            <!-- box-footer -->
                            <div class="box-footer">
                                <a href="<?php echo e(route('colaborador.dados',['colaborador' => $colaborador->id ])); ?>" class="btn btn-default">Cancel</a>
                                <button type="submit" class="btn btn-info pull-right">Salvar</button>
                            </div>
                            <!-- /.box-footer -->
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </form>
        </div>
    <!-- /.row -->

</section>
<!-- /.content -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('colaboradores.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sbr/resources/views/colaboradores/contrato.blade.php ENDPATH**/ ?>