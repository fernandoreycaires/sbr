<?php $__env->startSection('dashboard'); ?>

    <!-- Main content -->
    <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <form class="form-horizontal" action="" method="POST">
                    <?php echo csrf_field(); ?>

                    <div class="col-md-6">
                        <!-- DADOS PESSOAIS -->
                        <div class="box box-info">
                            <div class="box-header with-border">
                            <h3 class="box-title">Dados Pessoais</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputNome" class="col-sm-2 control-label">Nome</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputNome" name="inputNome" placeholder="Nome Completo">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nascimento" class="col-sm-2 control-label">Nascimento</label>

                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="nascimento" name="nascimento">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="estCivil" class="col-sm-2 control-label">Estado Civil</label>
                                    <div class="col-sm-10">
                                            <select class="form-control select2" style="width: 100%;" id="estCivil" name="estCivil">
                                              <option selected="selected">Solteiro (a)</option>
                                              <option>Casado (a)</option>
                                              <option>Divorciado (a)</option>
                                              <option>Viúvo (a)</option>
                                              <option>União Estável</option>
                                            </select>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputRG" class="col-sm-2 control-label">RG</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputRG" name="inputRG" maxlength="9" placeholder="RG sem pontos e sem hífem">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputCPF" class="col-sm-2 control-label">CPF</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputCPF" name="inputCPF" maxlength="11" placeholder="CPF sem pontos e sem hífem">
                                    </div>
                                </div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- DADOS DO ENDEREÇO -->
                        <div class="box box-success">
                            <div class="box-header with-border">
                                <h3 class="box-title">Endereço</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->

                            <div class="box-body">

                                <div class="form-group">
                                    <label for="inputCEP" class="col-sm-2 control-label">CEP</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputCEP" name="inputCEP" maxlength="8" placeholder="Insira o CEP sem hífen ">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputLogradouro" class="col-sm-2 control-label">Logradouro</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  id="inputLogradouro" name="inputLogradouro" placeholder="Rua, Avenida ...">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputBairro" class="col-sm-2 control-label">Bairro</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  id="inputBairro" name="inputBairro" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputUF" class="col-sm-2 control-label">Estado</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  id="inputUF" name="inputUF" placeholder="Insira o nome do estado completo" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputPais" class="col-sm-2 control-label">País</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  id="inputPais" name="inputPais" placeholder="Se for diferente de Brasil nem contrata" >
                                    </div>
                                </div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="col-md-12">
                        <div class="box-footer">
                            <a href="<?php echo e(route('colaboradores')); ?>" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-info pull-right">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('colaboradores.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/adminLTE/resources/views/colaboradores/novo.blade.php ENDPATH**/ ?>