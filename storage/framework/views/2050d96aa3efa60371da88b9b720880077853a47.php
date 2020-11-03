<!DOCTYPE html>
<html>

    <?php if ($__env->exists('painel.layout.head')) echo $__env->make('painel.layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <?php if ($__env->exists('painel.layout.header')) echo $__env->make('painel.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php if ($__env->exists('painel.layout.menuEsquerdo')) echo $__env->make('painel.layout.menuEsquerdo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Despesas

                <?php if(isset($uriAtual)): ?>
                    <small><?php echo e($uriAtual); ?></small>
                <?php else: ?>
                    <small>Página Principal</small>
                <?php endif; ?>
            </h1>
            <ol class="breadcrumb">
                <li><a href=" <?php echo e(route('pedidos')); ?> "><i class="ion ion-cash"></i> Home</a></li>
                <li class="active">Página Principal</li>
            </ol>
        </section>

        <!-- CONTEUDO DA PAGINA -->
        <?php echo $__env->yieldContent('dashboard'); ?>

    </div>

        <!-- FOOTER -->
        <?php if ($__env->exists('painel.layout.footer')) echo $__env->make('painel.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>

    <!-- CONTEUDO JAVASCRIPT -->
    <?php if ($__env->exists('painel.layout.js')) echo $__env->make('painel.layout.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </body>
</html>

<?php /**PATH /var/www/html/sbr/resources/views/pedidos/layout/app.blade.php ENDPATH**/ ?>