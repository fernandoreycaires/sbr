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
                                <h3 class="profile-username text-center">Editar Linha</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <p>Tela de edição das Linhas !!</p>

                                <p>ID: {{ $linha->id }} - Linha: {{ $linha->linha }} - R$ {{ $linha->preco }}</p>
                                <p>-----------------------------</p>
                                <p><b>Produtos da linha</b></p>
                                
                                @foreach($produtos as $produto)
                                
                                <p> {{ $produto ->id }} - {{ $produto ->sabor }}  </p>
                                
                                @endforeach

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
