<?php
require_once(dirname(__DIR__, 2) . '/vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 2));
$dotenv->load();
?>

<script src="<?php echo $_ENV['RAIZ']; ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo $_ENV['RAIZ']; ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?php echo $_ENV['RAIZ']; ?>assets/js/adminlte.js"></script>
<!-- Custom JS -->
<script src="<?php echo $_ENV['RAIZ']; ?>assets/js/app.js"></script>