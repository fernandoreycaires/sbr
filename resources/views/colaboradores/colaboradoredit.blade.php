@extends('colaboradores.layout.app')

@section('dashboard')


    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box)  -->
        <div class="row">
            <form class="form-horizontal" action="{{ route('colaborador.dados.editColaborador',['colaborador' => $colaborador->id ]) }}" method="POST">
                @csrf
                @method('PUT')

                <input type="hidden" name="inputIdColaborador" value="{{ $colaborador->id }}">

                <div class="col-md-6">
                    <!-- DADOS DO ENDEREÇO -->
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Editar Dados: </h3>
                            <h3 class="profile-username text-center">{{ $colaborador->nome }} </h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->

                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputNome" class="col-sm-2 control-label">Nome</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputNome" name="inputNome" placeholder="Nome Completo" value="{{ $colaborador->nome }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nascimento" class="col-sm-2 control-label">Nascimento</label>

                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="nascimento" name="nascimento" value="{{ $colaborador->nascimento }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="estCivil" class="col-sm-2 control-label">Estado Civil</label>
                                <div class="col-sm-10">
                                        <select class="form-control select2" style="width: 100%;" id="estCivil" name="estCivil">
                                          <option selected="selected">{{ $colaborador->civil }}</option>
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
                                    <input type="text" class="form-control" id="inputRG" name="inputRG" maxlength="9" placeholder="RG sem pontos e sem hífem" value="{{ $colaborador->rg }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputCPF" class="col-sm-2 control-label">CPF</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputCPF" name="inputCPF" maxlength="11" placeholder="CPF sem pontos e sem hífem" value="{{ $colaborador->cpf }}">
                                </div>
                            </div>

                            <div class="box-footer">
                                <a href="{{ route('colaborador.dados',['colaborador' => $colaborador->id ]) }}" class="btn btn-default">Cancel</a>
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
