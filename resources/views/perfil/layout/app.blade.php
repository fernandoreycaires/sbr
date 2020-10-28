<!DOCTYPE html>
<html>

    @includeIf('painel.layout.head')

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            @includeIf('painel.layout.header')

            @includeIf('painel.layout.menuEsquerdo')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Perfil

                @if(isset($uriAtual))
                    <small>{{ $uriAtual }}</small>
                @else
                    <small>Página Principal</small>
                @endif
            </h1>
            <ol class="breadcrumb">
                <li><a href=" {{ route('perfil') }} "><i class="fa fa-user"></i> Home</a></li>
                <li class="active">Página Principal</li>
            </ol>
        </section>

        <!-- CONTEUDO DA PAGINA -->
        @yield('dashboard')

    </div>

        <!-- FOOTER -->
        @includeIf('painel.layout.footer')

    </div>

    <!-- CONTEUDO JAVASCRIPT -->
    @includeIf('painel.layout.js')

    </body>
</html>

