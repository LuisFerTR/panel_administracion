<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crear Pieza</title>

  <?php include_once "../assets/inc/meta-pages.php"; ?>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <?php include_once "../assets/inc/nav-pages.php"; ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include_once "../assets/inc/sidebar-pages.php"; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Formulario</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
                <li class="breadcrumb-item"><a href="piezas.php">Piezas</a></li>
                <li class="breadcrumb-item active">Crear Pieza</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Crear Pieza</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="nombre">Nombre</label>
                      <input type="text" class="form-control" id="nombre" placeholder="Nombre de la pieza">
                    </div>
                    <div class="form-group">
                      <label for="cant_total">Cantidad total</label>
                      <input type="number" class="form-control" id="cant_total" placeholder="Cantidad total" min="0" value="0" step="1">
                    </div>
                    <div class="form-group">
                      <label for="cant_disponible">Cantidad disponible</label>
                      <input type="number" class="form-control" id="cant_disponible" placeholder="Cantidad disponible" min="0" value="0" step="1">
                    </div>
                    <div class="form-group">
                      <label>Ubicación</label>
                      <select class="form-control">
                        <!--- Generar con php --->
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="imagen-pieza">Imagen</label>

                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="imagen-pieza">
                        <label class="custom-file-label" for="imagen-pieza">Subir imagen</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Descripción</label>
                      <textarea class="form-control" rows="3" placeholder="Describe la pieza" disabled></textarea>
                    </div>
                    <div class="form-group">
                      <label>Observaciones</label>
                      <textarea class="form-control" rows="3" placeholder="Observaciones de la pieza" disabled></textarea>
                    </div>
                    <label for="valor">Valor</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                      </div>
                      <input type="number" class="form-control" id="valor" placeholder="Valor" min="0" value="0" step="0.01">
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Agregar</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include_once "../assets/inc/footer-pages.php"; ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      bsCustomFileInput.init();
    });
  </script>
</body>

</html>