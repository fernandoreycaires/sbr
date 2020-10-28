@extends('usuarios.layout.app')

@section('dashboard')

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-6">

                <div class="box box-info">
                    <div class="box-header with-border">
                      <h3 class="box-title">Cadastrar Novo Usuario</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="{{ route('usuarios.salvar') }}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputNome" class="col-sm-2 control-label">Nome</label>

                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="inputNome" id="inputNome" placeholder="Nome Completo">
                                </div>
                            </div>
                            <div class="form-group">
                            <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email">
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="inputPassword" class="col-sm-2 control-label">Password</label>

                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password">
                            </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="{{ route('usuarios') }}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-info pull-right">Cadastrar</button>
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
