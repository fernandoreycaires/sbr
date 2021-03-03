@extends('colaboradores.layout.app')

@section('dashboard')

    <!-- Main content -->
    <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <form class="form-horizontal" action="{{ route('colaboradores.inserir') }}" method="POST">
                    @csrf

                    <div class="col-md-12">
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

                                <div class="box-footer">
                                    <a href="{{ route('colaboradores') }}" class="btn btn-default">Cancelar</a>
                                    <button type="submit" class="btn btn-info pull-right">Salvar</button>
                                </div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>


                </form>
            </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->

@endsection
