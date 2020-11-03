<?php $__env->startSection('dashboard'); ?>

    <!-- Main content -->
    <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                <p> TESTANDO TELA DE DESPESAS </p>
                <p> ESTA TELA SERÁ USADA PARA LISTAR E ADICIONAR AS DESPESAS, PARA DEPOIS SER CRIADA GRAFICOS E COMPARAÇÕES DE GASTOS MENSAIS </p>

            </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('despesas.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/adminLTE/resources/views/despesas/index.blade.php ENDPATH**/ ?>