<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo e(asset('AdminLTE/dist/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo e($user->name); ?></p>
                <a href="<?php echo e(route('perfil')); ?>"><i class="fa fa-user text-success"></i> Visualizar Perfil</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menu Principal</li>
            <li class="treeview">
            <!-- MENU DE DASHBOARDS -->
            <a href="#">
                <i class="fa fa-dashboard"></i> <span>DASHBOARD</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class=""><a href="<?php echo e(route('home')); ?>"><i class="fa fa-circle-o"></i> Painel Principal </a></li>
            </ul>
            </li>

            <!-- MENU DOS COLABORADORES -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>COLABORADORES</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="<?php echo e(route('usuarios')); ?>"><i class="fa fa-circle-o"></i> Lista Usuarios </a></li>
                    <li class=""><a href="<?php echo e(route('colaboradores')); ?>"><i class="fa fa-circle-o"></i> Lista Colaboradores </a></li>
                </ul>
            </li>

            <!-- MENU DO FINANCEIRO -->
            <li class="treeview">
                <a href="#">
                    <i class="ion ion-cash"></i> <span>FINANCEIRO</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
            <ul class="treeview-menu">
                <li class=""><a href="<?php echo e(route('fechamentos')); ?>"><i class="fa fa-circle-o"></i> Fechamentos </a></li>
                <li class=""><a href="<?php echo e(route('despesas')); ?>"><i class="fa fa-circle-o"></i> Despesas </a></li>
                <li class=""><a href="<?php echo e(route('investimentos')); ?>"><i class="fa fa-circle-o"></i> Investimentos </a></li>
            </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<?php /**PATH /var/www/html/adminLTE/resources/views/painel/layout/menuEsquerdo.blade.php ENDPATH**/ ?>