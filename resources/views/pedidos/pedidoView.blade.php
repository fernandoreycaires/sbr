@extends('pedidos.layout.app')

@section('dashboard')

    <!-- Main content -->
    <section class="invoice">
        
        @if ($pedido->status == 'Aberto')
            <div class="hidden">{{$status_cor = "bg-green"}}</div>
        @elseif ($pedido->status == 'Fechado')
            <div class="hidden">{{$status_cor = "bg-red"}}</div>
        @endif
                
        <!-- title row -->
        <div class="row">
          <div class="col-xs-12">
            <h2 class="page-header">
              <i class="fa fa-globe"></i> SBR Frescores da Vida Com. de Sorvetes EIRELI.
              <small class="pull-right">Inserido em: {{ date('d/m/Y H:i', strtotime($pedido->created_at)) }}</small>
            </h2>
          </div>
          <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                <b>Pedido OGGI #{{ $pedido->num_pedido_oggi }}</b><br>      
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <b>Pedido SBR:</b> # {{ $pedido->id }}<br>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <b>Status:</b> <span class="badge {{$status_cor}}"> {{ $pedido->status }} </span>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
  
        <!-- Table row -->
        <div class="row">
          <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                    <th>Linha</th>
                    <th>Produto</th>
                    <th>Qtd Solicitado</th>
                    <th>Valor (Solicitado)</th>
                    <th>Qtd Liberado</th>
                    <th>Valor (Liberado)</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($itensDoPedido as $item)
                    <tr>
                        <td>{{ $item->nome_linha }}</td>
                        <td>{{ $item->nome_produto }}</td>
                        <td>{{ $item->qtd_solicitado }}</td>
                        <td>R$ {{ $item->valor_total_solicitado }} </td>
                        <td>{{ $item->qtd_liberado }}</td>
                        <td>R$ {{ $item->valor_total_liberado }} </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
  
        <div class="row">
          <!-- Observation column -->
          <div class="col-xs-6">
            
            <h4>Observações</h4>
            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                O valor total (R$) e quantidades liberadas não correspondem ao que será de fato recebido, tudo depende do estoque no dia do faturamento da nota para entrega.
            </p>
            
            <p class="text-muted well no-shadow" style="margin-top: 10px;">
              
              {{ $pedido->observacao }}
            </p>
          </div>
          <!-- /.col -->
          <div class="col-xs-6">
            <div class="table-responsive">
              <table class="table">
                <tr>
                    <th style="width:50%">Volumes Solicitado:</th>
                    <td>{{ $pedido->volume_solicitado }} Vol.</td>
                </tr>
                <tr>
                    <th>Valor Total Solicitado: </th>
                    <td>R$ {{ $pedido->valor_solicitado }}</td>
                </tr>
                <tr>
                    <th>Volumes Liberado:</th>
                    <td>{{ $pedido->volume_liberado }} Vol.</td>
                </tr>
                <tr>
                    <th>Valor Total Liberado: </th>
                    <td>R$ {{ $pedido->valor_liberado }}</td>
                </tr>
              </table>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
  
        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-xs-12">
                <a href="{{ route('pedidos') }}" class="btn btn-primary "><i class="fa fa-angle-left"></i> Voltar</a>
                <a href="{{ route('pedidos.visualizarPedidoPrint', ['pedido' => $pedido->id]) }}" target="_blank" class="btn btn-default pull-right" ><i class="fa fa-print"></i> Print</a>
                <a href="{{ route('pedidos.editaPedido', ['pedido' => $pedido->id]) }}" class="btn btn-success pull-right" style="margin-right: 10px;"><i class="fa fa-edit "></i> Editar</a>
            </div>
        </div>
      </section>
      <!-- /.content -->

@endsection
