@extends('pedidos.layout.app')

@section('dashboard')

    <!-- Main content -->
    <section class="content">
             <!-- /.row -->
             <div class="row">
                <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                    <h3 class="box-title">Lista de Pedidos</h3>
                        <div class="box-footer">
                            <a href="#" class="btn btn-info pull-right" onclick="event.preventDefault(); document.getElementById('abrirNovoPedido').submit();" >Novo</a>
                                <form id="abrirNovoPedido" action=" {{ route('pedidos.novoPedido') }} " method="post" style="display: none" >
                                    @csrf
                                    <input type="hidden" name="status" value="Aberto" >
                                </form>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>Pedido</th>
                            <th>Status</th>
                            <th>Volumes Sol.</th>
                            <th>Valor Solicitado</th>
                            <th>Volumes Lib.</th>
                            <th>Valor Liberado</th>
                            <th>Dia / Hora</th>
                            <th>Numero Ped. Oggi</th>
                            <th>Visualizar</th>
                            <th>Remover</th>
                        </tr>
                        
                        @foreach($listaPedidos as $listaPedido)
                            
                            @if ($listaPedido->status == 'Aberto')
                                <div class="hidden">{{$status_cor = "bg-green"}}</div>
                            @elseif ($listaPedido->status == 'Fechado')
                                <div class="hidden">{{$status_cor = "bg-blue"}}</div>
                            @endif

                            <tr>    
                                <td>{{ $listaPedido->id }}</td>
                                <td><span class="badge {{$status_cor}}"> {{ $listaPedido->status }} </span></td>
                                <td> {{ $listaPedido->volume_solicitado }} Vol. </td>
                                <td> R$ {{ $listaPedido->valor_solicitado }} </td>
                                <td> {{ $listaPedido->volume_liberado }} Vol.</td>
                                <td> R$ {{ $listaPedido->valor_liberado }} </td>
                                <td>{{ date('d/m/Y - H:m:s', strtotime($listaPedido->created_at))  }}</td>
                                <td> # {{ $listaPedido->num_pedido_oggi }} </td>
                                <td> <a href="{{ route('pedidos.visualizarPedido', ['pedido' => $listaPedido->id]) }} "><i class="fa fa-eye text-primary"></i> </a> </td>
                                <td> <a href="#" onclick="event.preventDefault(); document.getElementById('deletar{{$listaPedido->id}}').submit();"><i class="fa fa-window-close text-danger" ></i> </a> 
                                    <form id="deletar{{$listaPedido->id}}" action=" {{ route('pedidos.deletePedido', ['pedido' => $listaPedido->id]) }} " method="post" style="display: none" >
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="deletePedido" value="{{ $listaPedido->id }}" >
                                    </form>
                                </td>
                            </tr>
                            
                        @endforeach
                        
                    </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
                </div>
            </div>

    </section>
    <!-- /.content -->

@endsection
