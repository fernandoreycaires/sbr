@extends('colaboradores.layout.app')

@section('dashboard')

    <!-- Main content -->
    <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                <div class="col-md-4">
                    <!-- Profile Image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="{{ asset('AdminLTE/dist/img/user_default_green.png') }}" alt="User profile picture">

                        <h3 class="profile-username text-center">{{ $colaborador->nome }}</h3>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Nascimento:</b> <a class="pull-right">{{ date('d/m/Y', strtotime($colaborador->nascimento)) }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Idade:</b> <a class="pull-right">{{ floor((time() - strtotime($colaborador->nascimento))/31556926) }} anos</a>
                            </li>
                            <li class="list-group-item">
                                <b>Estado Civil: </b> <a class="pull-right">{{ $colaborador->civil }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>CPF: </b> <a class="pull-right">{{ $colaborador->cpf }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>RG: </b> <a class="pull-right">{{ $colaborador->rg }}</a>
                            </li>


                        </ul>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="{{ route('colaborador.dados.editformColaborador',['colaborador' => $colaborador->id ]) }}" class="pull-right"><i class="fa fa-edit"></i></a>
                        </div>

                        <!-- /.box-footer -->
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>

                <div class="col-md-4">
                    <!-- Endereço -->
                    <div class="box box-primary">

                        <div class="box-body">

                            <div class="row">
                                <div class="{{ $address_head }}">
                                    <h3 class="profile-username text-center">Endereço</h3>
                                </div>
                                <div class="{{ $address_plus }}">
                                    <a href="{{ route('colaborador.dados.formEndereco',['colaborador' => $colaborador->id ]) }}" class="btn btn-xs btn-primary"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>

                            @foreach ($address as $endereco)

                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>CEP: </b> <a class="pull-right">{{ $endereco->cep }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Endereço:</b> <a class="pull-right">{{ $endereco->logradouro }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Complemento:</b> <a class="pull-right">{{ $endereco->complemento }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Bairro:</b> <a class="pull-right">{{ $endereco->bairro }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Cidade: </b> <a class="pull-right">{{ $endereco->cidade }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Estado: </b> <a class="pull-right">{{ $endereco->uf }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Pais: </b> <a class="pull-right">{{ $endereco->pais }}</a>
                                </li>
                            </ul>

                            <!-- /.box-body -->
                            <div class="box-footer">
                                <a href="#"><i class="fa fa-close text-danger" onclick="event.preventDefault(); document.getElementById('deletar{{$endereco->id}}').submit();"></i></a>
                                <a href="{{ route('colaborador.dados.editformEndereco',['colaborador' => $colaborador->id ]) }}" class="pull-right"><i class="fa fa-edit"></i></a>
                                <form id="deletar{{$endereco->id}}" action=" {{ route('colaborador.endereco.delete', ['endereco' => $endereco->id]) }} " method="post" style="display: none" >
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="deleteEndereco" value="{{ $endereco->id }}" >
                                    <!-- <button type="submit">Deletar</button>-->
                                </form>

                            </div>

                            <!-- /.box-footer -->

                            @endforeach

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.box -->

                <div class="col-md-4">
                    <!-- Dados do contrato de trabalho -->
                    <div class="box box-primary">
                        <div class="box-body">
                            <div class="row">
                                <div class="{{ $contrato_head }}">
                                    <h3 class="profile-username text-center">Contrato de Trabalho</h3>
                                </div>
                                <div class="{{ $contrato_plus }}">
                                    <a href="{{ route('colaborador.formContrato',['colaborador' => $colaborador->id ]) }}" class="btn btn-xs btn-primary"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>

                            @foreach ($contratos as $contrato)


                                @if(!$contrato->demicao)
                                    {{$datademicao = ""}}
                                @else
                                    <div class="hidden">{{$datademicao = date('d/m/Y', strtotime($contrato->demicao)) }}</div>
                                @endif

                                @if ($contrato->status == 'ativo')
                                    <div class="hidden">{{$status_cor = "bg-green"}}</div>
                                @elseif ($contrato->status == 'inativo')
                                    <div class="hidden">{{$status_cor = "bg-red"}}</div>
                                @endif


                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Salário:</b> <a class="pull-right"> {{ $contrato->salario }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Carga Horaria:</b> <a class="pull-right"> {{ $contrato->carga_horaria }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Ocupação: </b> <a class="pull-right"> {{ $contrato->ocupacao }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Status: </b> <a class="pull-right"><span class="badge {{$status_cor}}"> {{ $contrato->status }} </span></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Data do registro de entrada: </b> <a class="pull-right">{{ date('d/m/Y', strtotime($contrato->registro)) }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Data do registro de saída: </b> <a class="pull-right"> {{ $datademicao }}</a>
                                </li>

                            </ul>

                            <!-- /.box-body -->
                            <div class="box-footer">
                                <a href="{{ route('colaborador.editFormContrato',['colaborador' => $colaborador->id ]) }}" class="pull-right"><i class="fa fa-edit"></i></a>
                            </div>

                            <!-- /.box-footer -->
                            @endforeach
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Observações</h3>

                        <div class="box-tools">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>Descrição</th>
                                <th>Editar</th>
                                <th>Apagar</th>
                            </tr>
                            <tr>
                                <td>Reservado para adicionar alguma informação extra, ou advertência registrada ou verbal </td>
                                <td><a href="#"><i class="fa fa-eye text-success"></i></a></td>
                                <td><a href="#"><i class="fa fa-close text-danger"></i></a></td>
                            </tr>
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
