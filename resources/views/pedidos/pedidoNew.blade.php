@extends('pedidos.layout.app')

@section('dashboard')

    <!-- Main content -->
    <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Profile Image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                        <h2 class="profile-username text-center"> # Pedido {{ $pegarUltimoPedidoInserido->id }} </h2>
                        <h3 class="profile-username text-center"> Catálogo </h3>
                        
                        <form action="{{ route('pedidos.novoItemPedido.inserirProdutos') }}" method="post">  
                        @csrf
                        
                            <div class="box">
                                @foreach ($linhas as $linha)
                                    <div class="box-header" style="background-color: #e0f0ff ; " >
                                        <h3 class="box-title"> {{ $linha->linha }} </h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body no-padding">
                                    <table class="table">
                                            <tr>
                                                <th style="width: 10px"></th>
                                                <th></th>
                                                <th style="width: 40px">Estoque</th>
                                                <th style="width: 40px">Comprar</th>
                                            </tr>
                                        
                                            <?php $i=0; ?>                                        
                                        @foreach ($sabores as $sabor)
                                            <?php $i++; ?>
                                                                                           
                                                @if ( $sabor->linha == $linha->id )
                                                    
                                                    <input type="hidden" name="num_pedido[]" value="{{ $pegarUltimoPedidoInserido->id }}"> <!-- Este Input insere o numero do pedido no Form-->
                                                    <input type="hidden" name="num_linha[]" value="{{$sabor->linha}}"> <!-- Pega o id da linha referente ao produto que esta sendo filtrado-->
                                                    <input type="hidden" name="nome_linha[]" value="{{$linha->linha}}"> <!-- Pega o nome linha referente ao produto que esta sendo filtrado-->
                                                    <input type="hidden" name="num_produto[]" value="{{$sabor->id}}"> <!-- Pega o ID do sabor referente ao produto que esta sendo filtrado-->
                                                    <input type="hidden" name="nome_produto[]" value="{{$sabor->sabor}}"> <!-- Pega o nome do sabor referente ao produto que esta sendo filtrado-->
                                                    <input type="hidden" name="valor[]" value="{{$linha->preco}}"> <!-- Pega o preço da linha para adicionar individualmente ao sabor-->
                                                    
                                                    <tr>
                                                        <td>{{$i}}</td>
                                                        <td>{{ $sabor->sabor }} : </td>
                                                        <td><input type="number" class="form-control" name="qtd_estoque[]" ></td>
                                                        <td><input type="number" class="form-control" name="qtd_comprar[]"></td> 
                                                    </tr>
                                                    
                                                @endif

                                            
                                        @endforeach
                                                    
                                    </table>
                                    </div>
                                    <!-- /.box-body -->
                                @endforeach
                            </div>
                            
                            <!-- /.box -->
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <input type="hidden" name="i" value="{{$i}}"> <!-- Pega o ultimo valor do contador e envia para póder processar os dados -->
                                <a href="#" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('deletar{{$pegarUltimoPedidoInserido->id}}').submit();"> Cancelar <i class="fa fa-check"></i></a>
                                <button type="submit" class="pull-right btn btn-success"> Salvar <i class="fa fa-check"></i></button>
                            </div>

                        </form>

                        <form id="deletar{{$pegarUltimoPedidoInserido->id}}" action=" {{ route('pedidos.deletePedido', ['pedido' => $pegarUltimoPedidoInserido->id]) }} " method="post" style="display: none" >
                            @csrf
                            @method('delete')
                            <input type="hidden" name="deletePedido" value="{{ $pegarUltimoPedidoInserido->id }}" >
                        </form>

                        <!-- /.box-footer -->
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
