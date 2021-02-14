@extends('pedidos.layout.app')

@section('dashboard')

    <!-- Main content -->
    <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-6">

                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <div class="box-header with-border">
                                <h3 class="profile-username text-center">Adicionar Linha</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <form action="{{ route('produtos.inserirLinha') }}" method="POST">
                                    @csrf
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Linha</th>
                                            <th>Preço R$</th>
                                            <th style="width: 40px">Salvar</th>
                                        </tr>
                                        <tr>
                                            <td><input class="form-control" name="linha" type="text" placeholder="Nova Linha"></td>
                                            <td><input class="form-control" name="valor" type="text" placeholder="Valor"></td>
                                            <td><button type="submit" class="badge bg-green no-border"><i class="fa fa-check"></i></button></td>
                                        </tr>
                                        
                                    </table>
                                </form>
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
                                <form action="{{ route('produtos.inserirProduto') }}" method="POST">
                                @csrf
                                    <tr>
                                        <td><input class="form-control" type="text" name="sabor_sabor" placeholder="Novo produto"></td>
                                        <td>
                                            <select class="form-control" name="sabor_linha">
                                                    <option> Selecione </option>
                                                @foreach ($linhas as $linha)
                                                    <option value="{{ $linha->id }}"> {{ $linha->linha }} </option>
                                                @endforeach
                                            </select>
                                            </div>
                                        </td>
                                        <td><button type="submit" class="badge bg-green no-border"><i class="fa fa-check"></i></button></td>
                                    </tr>
                                </form>
                                
                            </table>
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
                        <h3 class="profile-username text-center"> Produtos e Linhas Cadastrados</h3>
                            <table class="table table-hover">
                                <!--AQUI LISTA AS LINHAS DE PRODUTOS-->
                                @foreach ($linhas as $linha)
                                <tr>
                                    <td><b>{{ $linha->linha }}</b></td>
                                    <td><b> R$ {{ $linha->preco }} </b></td>
                                </tr>
                                <!-- AQUI LISTA OS PRODUTOS DE DENTRO DAS LINHAS -->
                                    @foreach ($sabores as $sabor)
                                        @if ( $sabor->linha == $linha->id )
                                            <tr>
                                                <td>-</td>
                                                <td>{{ $sabor->sabor }}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endforeach
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

@endsection
