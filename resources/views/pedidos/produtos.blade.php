@extends('pedidos.layout.app')

@section('dashboard')

    <!-- Main content -->
    <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-6">

                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="profile-username text-center">Adicionar Linha</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Linha</th>
                                        <th>Preço R$</th>
                                        <th style="width: 40px">Salvar</th>
                                    </tr>
                                    <tr>
                                        <td><input class="form-control" type="text" placeholder="Inserir Nome da Nova Linha"></td>
                                        <td><input class="form-control" type="text" placeholder="Valor"></td>
                                        <td><span class="badge bg-green"><i class="fa fa-check"></i></span></td>
                                    </tr>
                                    
                                </table>
                                </div>

                                <div class="box-header with-border">
                                    <h3 class="profile-username text-center">Adicionar Produto</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Produto</th>
                                        <th>Linha</th>
                                        <th style="width: 40px">Salvar</th>
                                    </tr>
                                    <tr>
                                        <td><input class="form-control" type="text" placeholder="Inserir nome do novo produto"></td>
                                        <td>
                                            <select class="form-control">
                                                <option>Delicia</option>
                                                <option>Frutos</option>
                                                <option>Fazenda</option>
                                                <option>Zero</option>
                                                <option>Omega</option>
                                                <option>Latte</option>
                                                <option>Festa</option>
                                            </select>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-green"><i class="fa fa-check"></i></span></td>
                                    </tr>
                                    
                                </table>
                                </div>
                               
                            </div>
                            <!-- /.box -->
                            
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <div class="col-md-6">
                    
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                        <h3 class="profile-username text-center"> Lista de Alguma Coisa </h3>
                            <p>Teste de lado direito </p>
                            <p>Idem do lado esquerdo</p>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->

@endsection
