@extends('usuarios.layout.app')

@section('dashboard')

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-6">

                <div class="box box-info">
                    <div class="box-header with-border">
                      <h3 class="box-title">Editar Usuario</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action=" {{ route('usuarios.editar',['usuario' => $usuario->id]) }} " method="POST">
                        @csrf
                        @method('PUT')

                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputNome" class="col-sm-2 control-label">Nome</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputNome" name="inputNome" placeholder="Nome Completo" value="{{ $usuario->name }}">
                                    </div>
                                </div>
                            <div class="form-group">
                            <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email" value="{{ $usuario->email }}">
                                </div>
                            </div>
                            <div class="form-group">
                            <label for="inputPassword" class="col-sm-2 control-label">Senha</label>

                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Senha com 8 caracteres">
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="{{ route('usuarios') }}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-info pull-right">Salvar</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                  </div>

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->

@endsection
