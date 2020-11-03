<?php $__env->startSection('dashboard'); ?>

    <!-- Main content -->
    <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                <div class="col-md-4">
                    <!-- Profile Image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="<?php echo e(asset('AdminLTE/dist/img/user_default_green.png')); ?>" alt="User profile picture">

                        <h3 class="profile-username text-center"><?php echo e($colaborador->nome); ?></h3>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Nascimento:</b> <a class="pull-right"><?php echo e(date('d/m/Y', strtotime($colaborador->nascimento))); ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Idade:</b> <a class="pull-right"><?php echo e(floor((time() - strtotime($colaborador->nascimento))/31556926)); ?> anos</a>
                            </li>
                            <li class="list-group-item">
                                <b>Estado Civil: </b> <a class="pull-right"><?php echo e($colaborador->civil); ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>CPF: </b> <a class="pull-right"><?php echo e($colaborador->cpf); ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>RG: </b> <a class="pull-right"><?php echo e($colaborador->rg); ?></a>
                            </li>


                        </ul>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="<?php echo e(route('colaborador.dados.editformColaborador',['colaborador' => $colaborador->id ])); ?>" class="pull-right"><i class="fa fa-edit"></i></a>
                        </div>

                        <!-- /.box-footer -->
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>

                <div class="col-md-4">
                    <!-- Endereço -->
                    <div class="box box-primary">

                        <div class="box-body">

                            <div class="row">
                                <div class="<?php echo e($address_head); ?>">
                                    <h3 class="profile-username text-center">Endereço</h3>
                                </div>
                                <div class="<?php echo e($address_plus); ?>">
                                    <a href="<?php echo e(route('colaborador.dados.formEndereco',['colaborador' => $colaborador->id ])); ?>" class="btn btn-xs btn-primary"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>

                            <?php $__currentLoopData = $address; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $endereco): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>CEP: </b> <a class="pull-right"><?php echo e($endereco->cep); ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Endereço:</b> <a class="pull-right"><?php echo e($endereco->logradouro); ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Complemento:</b> <a class="pull-right"><?php echo e($endereco->complemento); ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Bairro:</b> <a class="pull-right"><?php echo e($endereco->bairro); ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Cidade: </b> <a class="pull-right"><?php echo e($endereco->cidade); ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Estado: </b> <a class="pull-right"><?php echo e($endereco->uf); ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Pais: </b> <a class="pull-right"><?php echo e($endereco->pais); ?></a>
                                </li>
                            </ul>

                            <!-- /.box-body -->
                            <div class="box-footer">
                                <a href="#"><i class="fa fa-close text-danger" onclick="event.preventDefault(); document.getElementById('deletar<?php echo e($endereco->id); ?>').submit();"></i></a>
                                <a href="<?php echo e(route('colaborador.dados.editformEndereco',['colaborador' => $colaborador->id ])); ?>" class="pull-right"><i class="fa fa-edit"></i></a>
                                <form id="deletar<?php echo e($endereco->id); ?>" action=" <?php echo e(route('colaborador.endereco.delete', ['endereco' => $endereco->id])); ?> " method="post" style="display: none" >
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <input type="hidden" name="deleteEndereco" value="<?php echo e($endereco->id); ?>" >
                                    <!-- <button type="submit">Deletar</button>-->
                                </form>

                            </div>

                            <!-- /.box-footer -->

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.box -->

                <div class="col-md-4">
                    <!-- Dados do contrato de trabalho -->
                    <div class="box box-primary">
                        <div class="box-body">
                            <div class="row">
                                <div class="<?php echo e($contrato_head); ?>">
                                    <h3 class="profile-username text-center">Contrato de Trabalho</h3>
                                </div>
                                <div class="<?php echo e($contrato_plus); ?>">
                                    <a href="<?php echo e(route('colaborador.formContrato',['colaborador' => $colaborador->id ])); ?>" class="btn btn-xs btn-primary"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>

                            <?php $__currentLoopData = $contratos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contrato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                <?php if(!$contrato->demicao): ?>
                                    <?php echo e($datademicao = ""); ?>

                                <?php else: ?>
                                    <div class="hidden"><?php echo e($datademicao = date('d/m/Y', strtotime($contrato->demicao))); ?></div>
                                <?php endif; ?>

                                <?php if($contrato->status == 'ativo'): ?>
                                    <div class="hidden"><?php echo e($status_cor = "bg-green"); ?></div>
                                <?php elseif($contrato->status == 'inativo'): ?>
                                    <div class="hidden"><?php echo e($status_cor = "bg-red"); ?></div>
                                <?php endif; ?>


                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Salário:</b> <a class="pull-right"> <?php echo e($contrato->salario); ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Carga Horaria:</b> <a class="pull-right"> <?php echo e($contrato->carga_horaria); ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Ocupação: </b> <a class="pull-right"> <?php echo e($contrato->ocupacao); ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Status: </b> <a class="pull-right"><span class="badge <?php echo e($status_cor); ?>"> <?php echo e($contrato->status); ?> </span></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Data do registro de entrada: </b> <a class="pull-right"><?php echo e(date('d/m/Y', strtotime($contrato->registro))); ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Data do registro de saída: </b> <a class="pull-right"> <?php echo e($datademicao); ?></a>
                                </li>

                            </ul>

                            <!-- /.box-body -->
                            <div class="box-footer">
                                <a href="<?php echo e(route('colaborador.editFormContrato',['colaborador' => $colaborador->id ])); ?>" class="pull-right"><i class="fa fa-edit"></i></a>
                            </div>

                            <!-- /.box-footer -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Observações</h3>

                        <div class="box-tools">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>Descrição</th>
                                <th>Editar</th>
                                <th>Apagar</th>
                            </tr>
                            <tr>
                                <td>Reservado para adicionar alguma informação extra, ou advertência registrada ou verbal </td>
                                <td><a href="#"><i class="fa fa-eye text-success"></i></a></td>
                                <td><a href="#"><i class="fa fa-close text-danger"></i></a></td>
                            </tr>
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

<?php echo $__env->make('colaboradores.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sbr/resources/views/colaboradores/colaborador.blade.php ENDPATH**/ ?>