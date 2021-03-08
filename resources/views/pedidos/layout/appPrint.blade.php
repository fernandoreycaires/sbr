<!DOCTYPE html>
<html>

    @includeIf('painel.layout.head')

    <body class="hold-transition skin-blue sidebar-mini" onload="window.print();">
      
        
        <!-- CONTEUDO DA PAGINA -->
        @yield('dashboardPrint')

        

    <!-- CONTEUDO JAVASCRIPT -->
    @includeIf('painel.layout.js')

    </body>
</html>

