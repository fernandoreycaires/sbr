@extends('pedidos.layout.app')

@section('dashboard')
<!-- Main content -->
<section class="content">
  <form action="{{ route('pedidos.edita', ['pedido' =>  $pedido->id]) }} " method="post">pedidoItem
    @csrf
    @method('PUT')

    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Pedido # {{ $pedido->id }}</h3> <h3 class="box-title pull-right">Pedido OGGI # <input type="number" name="pedidoOggi" style="width: 200px" value="{{ $pedido->num_pedido_oggi }}"></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body no-padding">
        <table class="table table-striped">
          <tr>
            <th style="width: 10px">#</th>
            <th>Linha</th>
            <th>Produto</th>
            <th style="width: 55px">Qtd Sol.</th>
            <th style="width: 55px">Qtd Lib</th>
          </tr>

          <?php $i = 0; ?>
          @foreach ($itensDoPedido as $item)
          <?php $i++; ?>
          
          <tr>
            <td>{{$i}}</td>
            <td>{{$item->nome_linha }}</td>
            <td>{{$item->nome_produto }}</td>
            <td>{{$item->qtd_solicitado }}</td>
            <td><input type="number" name="qtd_lib[]" value="{{ $item->qtd_liberado }}" style="width: 55px"> 
                <input type="hidden" name="valor[]" value="{{$item->valor}}">
                <input type="hidden" name="id_item[]" value="{{$item->id}}"> 
            </td>
          </tr>

          @endforeach

        </table>
      </div>
      <div class="form-group">
        <label>Observação</label>
        <textarea class="form-control" name="observacao" rows="3" placeholder="Alguma observação em relação a este pedido">{{ $pedido->observacao }}</textarea>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
    <input type="hidden" name="contador" value="{{$i}}">
    <input type="hidden" name="pedidoId" value="{{$pedido->id}}">
    <div class="row no-print">
      <div class="col-xs-12">
          <a href="{{ route('pedidos.visualizarPedido', ['pedido' =>  $pedido->id ]) }} " class="btn btn-primary "><i class="fa fa-angle-left"></i> Voltar</a>
          <button type="submit" class="btn btn-success pull-right" style="margin-right: 10px;"><i class="fa fa-edit "></i> Salvar</button>
      </div>
    </div>
  </form>
</section>

@endsection
