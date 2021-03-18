@extends('colaboradores.layout.app')

@section('dashboard')

    <!-- Main content -->
    <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                      <div class="box-header">
                        <h3 class="box-title">Colaboradores</h3>

                        <div class="box-tools">
                          
                            <div class="input-group-btn ">
                                <a href="{{ route('colaboradores.novo') }}" class="btn btn-info "> <i class="fa fa-plus"> ADICIONAR</i> </a>
                            </div>
                          
                        </div>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Idade</th>
                                <th>Estado Civil</th>
                                <th>RG</th>
                                <th>CPF</th>
                                <th>Visualizar</th>
                            </tr>

                            @foreach ($colaboradores as $colaborador)
                            <tr>
                                <td>{{ $colaborador->id }}</td>
                                <td>{{ $colaborador->nome }}</td>
                                <td>{{ floor((time() - strtotime($colaborador->nascimento))/31556926) }}</td>
                                <td>{{ $colaborador->civil }}</td>
                                <td>{{ $colaborador->rg }}</td>
                                <td>{{ $colaborador->cpf }}</td>
                                <td><a href="{{ route('colaborador.dados',['colaborador' => $colaborador->id ]) }}"><i class="fa fa-eye text-success"></i></a></td>
                            </tr>
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
