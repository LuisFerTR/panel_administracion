<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="./assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="./assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <!-- Opciones del panel -->
                <li class="nav-item con-menu">
                    <a href="#" class="nav-link titulo-menu">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Usuarios
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo $_ENV['RAIZ']; ?>pages/alumnos.php" class="nav-link" data-link="alumnos">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Alumnos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index2.html" class="nav-link" data-link="profesores">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profesores</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index3.html" class="nav-link" data-link="investigadores">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Investigadores</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index3.html" class="nav-link" data-link="encargados">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Encargados</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index3.html" class="nav-link" data-link="trabajadores">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Trabajadores</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index3.html" class="nav-link" data-link="administradores">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Administradores</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="<?php echo $_ENV['RAIZ']; ?>pages/piezas.php" class="nav-link" data-link="piezas">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            Piezas
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $_ENV['RAIZ']; ?>pages/widgets.html" class="nav-link" data-link="maquinas">
                        <i class="nav-icon fas fa-robot"></i>
                        <p>
                            Máquinas
                        </p>
                    </a>
                </li>
                <!-- ========================================= -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>