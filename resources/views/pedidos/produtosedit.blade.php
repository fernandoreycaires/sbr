@extends('pedidos.layout.app')

@section('dashboard')

    <!-- Main content -->
    <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">

                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <div class="box-header with-border">
                                <h3 class="profile-username text-center">Editar Produtos</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <p>Tela de edição de produtos !!</p>
                                
                                
                                <p> ID Produto: {{ $produto->id }}</p>
                                <p> Sabor: {{ $produto->sabor }}</p>
                                <p> ID Linha: {{ $produto->linha }}</p>
                                <p> Linha: {{ $linhaProd }}</p>
                                
                            </div>
                        </div>
                        <!-- /.box -->
                            
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
