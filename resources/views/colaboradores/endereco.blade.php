@extends('colaboradores.layout.app')

@section('dashboard')


    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <form class="form-horizontal" action="{{ route('colaborador.dados.addendereco',['colaborador' => $colaborador->id ]) }}" method="POST">
                @csrf

                <input type="hidden" name="inputIdColaborador" value="{{ $colaborador->id }}">
                <div class="col-md-6">
                    <!-- DADOS DO ENDEREÇO -->
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Adicionar endereço para: </h3>
                            <h3 class="profile-username text-center">{{ $colaborador->nome }}</h3>
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
                                        <input type="text" class="form-control" id="inputLogradouro" name="inputLogradouro" placeholder="Rua, Avenida ...">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputComplemento" class="col-sm-2 control-label">Complemento</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  id="inputComplemento" name="inputComplemento" placeholder="Casa 01, Fundos, Frente ... ">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputBairro" class="col-sm-2 control-label">Bairro</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  id="inputBairro" name="inputBairro" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputCidade" class="col-sm-2 control-label">Cidade</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  id="inputCidade" name="inputCidade" >
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
                                <div class="box-footer">
                                    <a href="{{ route('colaborador.dados',['colaborador' => $colaborador->id ]) }}" class="btn btn-danger">Cancel</a>
                                    <button type="submit" class="btn btn-primary pull-right">Salvar</button>
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

@endsection
