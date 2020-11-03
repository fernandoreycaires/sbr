<?php $__env->startSection('dashboard'); ?>

    <!-- Main content -->
    <section class="content">

            <div class="row">
                <div class="col-md-6">
                    <div class="box box-primary">
                        <form action="" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="box-header">
                                <h3 class="box-title">Inserir Fechamento </h3>
                            </div>
                            <div class="box-body">
                            <!-- Date -->
                                <div class="form-group">
                                    <label>Data:</label>

                                    <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" class="form-control pull-right" id="datepicker" name="datepicker">
                                    </div>
                                    <!-- /.input group -->
                                </div>

                            <!-- PDV -->
                                <div class="form-group">
                                    <label>PDV</label>
                                    <select class="form-control select2" style="width: 100%;" name="pdv">
                                        <option selected="selected">Selecione o PDV</option>
                                        <option value="1">PDV 1</option>
                                        <option value="2">PDV 2</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Operador</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="operador">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Abertua do Caixa</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">R<i class="fa fa-dollar"></i></span>
                                        <input type="text" class="form-control" name="valor_abertura">
                                        <span class="input-group-addon"><i class="fa fa-inbox"></i></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Fechamento Débito</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">R<i class="fa fa-dollar"></i></span>
                                        <input type="text" class="form-control" name="valor_fechamento_debito">
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Fechamento Crédito</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">R<i class="fa fa-dollar"></i></span>
                                        <input type="text" class="form-control" name="valor_fechamento_credito">
                                        <span class="input-group-addon"><i class="fa fa-cc-visa"></i></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Fechamento Dinheiro</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">R<i class="fa fa-dollar"></i></span>
                                        <input type="text" class="form-control" name="valor_fechamento_dinheiro">
                                        <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                    </div>
                                </div>

                                <!-- textarea -->
                                <div class="form-group">
                                    <label>Observação</label>
                                    <textarea class="form-control" rows="3" name="observacao" placeholder="Alguma observação referente ao fechamento deste caixa na data em questão"></textarea>
                                </div>

                            <!-- /.form group -->
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <a href="<?php echo e(route('fechamentos')); ?>" class="btn btn-default">Cancelar</a>
                                <button type="submit" class="btn btn-info pull-right">Salvar</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
            </div>

    </section>
    <!-- /.content -->

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('fechamentos.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/adminLTE/resources/views/fechamentos/adicionar.blade.php ENDPATH**/ ?>