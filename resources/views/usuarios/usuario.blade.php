@extends('usuarios.layout.app')

@section('dashboard')

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <h3 class="profile-username text-center"> {{ $usuario->name }} </h3>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Adicionado em</b> <a class="pull-right">{{ date('d/m/Y H:i', strtotime($usuario->created_at)) }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Editado</b> <a class="pull-right">{{ date('d/m/Y H:i', strtotime($usuario->updated_at)) }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>E-Mail</b> <a class="pull-right">{{ $usuario->email }} </a>
                            </li>
                        </ul>

                        <a href="{{ route('usuarios.formedit',['usuario' => $usuario->id]) }}" class="btn btn-primary btn-block"><b>Editar</b></a>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->


            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->

@endsection
