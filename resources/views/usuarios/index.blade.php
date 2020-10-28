@extends('usuarios.layout.app')

@section('dashboard')

    <!-- Main content -->
    <section class="content">
            <!-- /.row -->
            <div class="row">
                <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                    <h3 class="box-title">Lista de Usuários</h3>
                        <div class="box-footer">
                            <a href="{{ route('usuarios.novo') }}" class="btn btn-info pull-right">Novo</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Usuário</th>
                            <th>E-Mail</th>
                            <th>Criado</th>
                            <th>Visualizar</th>
                            <th>Editar</th>
                            <th>Remover</th>
                        </tr>
                        @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->id }}</td>
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>{{ date('d/m/Y H:i', strtotime($usuario->created_at)) }}</td>
                            <td> <a href="{{ route('usuarios.dados',['usuario' => $usuario->id]) }}"><i class="fa fa-eye text-primary"></i> </a> </td>
                            <td> <a href="{{ route('usuarios.formedit',['usuario' => $usuario->id]) }}"><i class="fa fa-edit text-success"></i> </a> </td>
                            <td> <a href="#"><i class="fa fa-window-close text-danger" onclick="event.preventDefault(); document.getElementById('deletar{{$usuario->id}}').submit();" ></i> </a>

                                <form id="deletar{{$usuario->id}}" action=" {{ route('usuarios.deletar', ['usuario' => $usuario->id]) }} " method="post" style="display: none" >
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="deleteUsuario" value="{{ $usuario->id }}" >
                                    <!-- <button type="submit">Deletar</button>-->
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
