<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Piezas</title>

  <?php require_once "../assets/inc/meta.php"; ?>
  <!-- DataTables -->
  <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <?php require_once "../assets/inc/nav.php"; ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php require_once "../assets/inc/sidebar.php"; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Piezas</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
                <li class="breadcrumb-item active">Piezas</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center" style="width: 100%;">
                  <h3 class="card-title" style="flex: 0 0 50%">Información de las piezas registradas.</h3>

                  <div class="d-flex justify-content-end" style="flex: 0 0 50%">
                    <a class="btn btn-app bg-success" href="./crear_pieza.php">
                      <i class="fas fa-plus"></i> Crear
                    </a>
                  </div>

                </div>
                <!-- /.card-header -->
                <input type="hidden" id="url_fetch" value="<?php echo $_ENV['RUTA'] . 'piezageneral/' ?>">
                <?php
                require_once(dirname(__DIR__, 1) . '/scripts/dibujar_tabla.php');

                dibujar_tabla("piezageneral");
                ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php require_once "../assets/inc/footer.php"; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <?php require_once "../assets/inc/js-imports.php"; ?>

  <script src="<?php echo $_ENV['RAIZ']; ?>assets/js/accionesPieza.js"></script>
  <script>
    $(function() {
      bsCustomFileInput.init();
    });
  </script>

</body>

</html>