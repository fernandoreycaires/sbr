@extends('pedidos.layout.app')

@section('dashboard')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">

                <div class="box box-info">
                    <div class="box-header with-border text-center">
                        <h3 class="box-title">Editar Produto</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="{{ route('produtos.editProdBanco',['produto' => $produto->id ]) }}" method="POST">
                        @csrf
                        @method("PUT")               
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputPassword" class="col-sm-2 control-label">ID</label>
                                    <div class="col-sm-10">
                                        #  {{ $produto->id }}
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="inputNome" class="col-sm-2 control-label">Produto Sabor</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="prodNome" placeholder="Nome da Linha" value="{{ $produto->sabor }}">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-sm-2 control-label">Linha</label>
                                    <div class="col-sm-10">
                                        {{ $linhaProd }}
                                    </div>
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
        </div>

    </section>
    <!-- /.content -->

@endsection
