@extends('pedidos.layout.app')

@section('dashboard')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">

                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Editar Linha</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="{{ route('produtos.editLinhaBanco',['linha' => $linha->id  ]) }}" method="POST">
                        @csrf
                        @method("PUT")               
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputPassword" class="col-sm-2 control-label">ID</label>
                                    <div class="col-sm-10">
                                        #  {{ $linha->id }}
                                    </div>
                                </div>
                            <div class="form-group">
                                <label for="inputNome" class="col-sm-2 control-label">Linha</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="linhaNome" placeholder="Nome da Linha" value="{{ $linha->linha }}">
                                </div>
                            </div>
                            <div class="form-group">
                            <label for="inputEmail" class="col-sm-2 control-label">Valor R$ </label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="valor" placeholder="Valor da Linha" value="{{ $linha->preco }}">
                                </div>
                            </div>
                            
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href=" {{ route('produtos') }} " class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-info pull-right">Salvar</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>

            </div>
            <!-- /.row -->
        
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Itens inseridos nessa linha</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <table class="table table-striped">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Produto</th>
                            </tr>
                            @foreach($produtos as $produto)
                            <tr>
                                <td> {{ $produto ->id }} </td>
                                <td> {{ $produto ->sabor }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.col -->
            </div>
        </div>

    </section>
    <!-- /.content -->

@endsection
