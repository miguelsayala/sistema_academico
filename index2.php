<?php
// Incluimos la conexion
include "include/conexion.php";
// Incluimos las busqueda para hacer uso de este
include "include/busquedas.php";
// Verificamos que el inicio de sesion se haya hecho para que nadie acceda a esta carpeta
include "include/verificar_sesion.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gentelella Alela! | </title>
  <link href="./Gentella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="./Gentella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="./Gentella/vendors/nprogress/nprogress.css" rel="stylesheet">
  <link href="./Gentella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <link href="./Gentella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <link href="./Gentella/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
  <link href="./Gentella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <link href="./Gentella/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <?php include "include/menu.php" ?>

      <div class="right_col" role="main">
        <div class="row">
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Sexo <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select name="id_genero" id="id_genero" class="form-control col-md-7 col-xs-12">
                <option value="">Seleccione</option>
                <?php
                $buscar_genero = buscarGenero($conexion);
                while ($res_b_genero = mysqli_fetch_array($buscar_genero)) {
                ?>
                  <option value="<?php echo $res_b_genero['id']; ?>"><?php echo $res_b_genero['genero']; ?></option>
                <?php
                };
                ?>
              </select>
            </div><br><br><br>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Cargo <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select name="id_genero" id="id_genero" class="form-control col-md-7 col-xs-12">
                  <option value="">Seleccione</option>
                  <?php
                  $buscar_cargo = buscarCargo($conexion);
                  while ($res_b_cargo = mysqli_fetch_array($buscar_cargo)) {
                  ?>
                    <option value="<?php echo $res_b_cargo['id']; ?>"><?php echo $res_b_cargo['descripcion']; ?></option>
                  <?php
                  };
                  ?>
                </select>
              </div>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12">

            </div>
          </div>
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <script src="./Gentella/vendors/jquery/dist/jquery.min.js"></script>
    <script src="./Gentella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./Gentella/vendors/fastclick/lib/fastclick.js"></script>
    <script src="./Gentella/vendors/nprogress/nprogress.js"></script>
    <script src="./Gentella/vendors/Chart.js/dist/Chart.min.js"></script>
    <script src="./Gentella/vendors/gauge.js/dist/gauge.min.js"></script>
    <script src="./Gentella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="./Gentella/vendors/iCheck/icheck.min.js"></script>
    <script src="./Gentella/vendors/skycons/skycons.js"></script>
    <script src="./Gentella/vendors/Flot/jquery.flot.js"></script>
    <script src="./Gentella/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="./Gentella/vendors/Flot/jquery.flot.time.js"></script>
    <script src="./Gentella/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="./Gentella/vendors/Flot/jquery.flot.resize.js"></script>
    <script src="./Gentella/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="./Gentella/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="./Gentella/vendors/flot.curvedlines/curvedLines.js"></script>
    <script src="./Gentella/vendors/DateJS/build/date.js"></script>
    <script src="./Gentella/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="./Gentella/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="./Gentella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="./Gentella/vendors/moment/min/moment.min.js"></script>
    <script src="./Gentella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="./Gentella/build/js/custom.min.js"></script>
</body>

</html>