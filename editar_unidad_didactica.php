<?php
// Incluimos la conexion
include "include/conexion.php";
// Incluimos las busqueda para hacer uso de este
include "include/busquedas.php";
// Verificamos que el inicio de sesion se haya hecho para que nadie acceda a esta carpeta
include "include/verificar_sesion.php";	

//Obtenemos el id quie mandamos desde nuestra tabla de unidad didactica 
$id_unidad_didactica = $_GET['id'];
// Buscamos la unidad didactica
$busc_unidad_didactica = buscarUnidadDidacticaById($conexion, $id_unidad_didactica);
$res_busqueda_unidad_didactica = mysqli_fetch_array($busc_unidad_didactica);
// ASí accedemos a los valores foraneos como es el programa de estudios, modulo y el semestre 
$id_programa_estudios= $res_busqueda_unidad_didactica['id_programa_estudio'];
$id_modulo= $res_busqueda_unidad_didactica['id_modulo'];
$id_semestre= $res_busqueda_unidad_didactica['id_semestre'];

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
	<!-- Bootstrap -->
	<link href="Gentella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="Gentella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="Gentella/vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="Gentella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	<!-- bootstrap-progressbar -->
	<link href="Gentella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
	<!-- JQVMap -->
	<link href="Gentella/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
	<!-- bootstrap-daterangepicker -->
	<link href="Gentella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
	<!-- Custom Theme Style -->
	<link href="Gentella/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<?php include "include/menu.php" ?>
			<!-- Menu en la parte superior -->
			<!-- page content -->
			<div class="right_col" role="main">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="x_panel">
							<div class="x_title">
								<h2>Editar unidades didacticas</h2>

								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<br />
								<!-- La operacion se realizara en actualizar_unidad_didactica.php -->
								<form class="form-horizontal form-label-left" method="POST" action="operaciones/actualizar_unidad_didactica.php">
									<input type="hidden" name="id" value="<?php echo $id_unidad_didactica; ?>">
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Unidad didáctica :
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="text" name="u_didactica"  class="form-control col-md-7 col-xs-12" value="<?php echo $res_busqueda_unidad_didactica['descripcion'] ?>">
										</div>
									</div>
									<div class="item form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Programa de estudios<span class="required">:</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<select type="text" id="p_estudios" name="p_estudios" class="form-control col-md-7 col-xs-12" value='<?php echo $id_programa_estudios; ?>'>
												<option>Seleccionar programa de estudios</option>
												<?php
												// Buscamos el programa de estudios ya que es una llave foranea cuando tenemos su id
												$buscar_programa = buscarProgramaEstudio($conexion);
												// Recorremos los datos de la tabla de la base de datos
												while ($res_busqueda_programa= mysqli_fetch_array($buscar_programa)) {
													// Obtenemos su ID
													$id_busqueda_programa = $res_busqueda_programa['id'];
												?>
													<option value="<?php echo
													// Al option le damos el valor que obtuvo en la busqueda
													$id_busqueda_programa; ?>" <?php if 
													// Hacemos una compracion el ID de la tabla unidad_didactica coincide con el que trajemos con la busqueda del programa de estudios
													($id_programa_estudios === $id_busqueda_programa) {
														// Si coinciden por defecto se seleccionara
														echo "selected";
													} ?>><?php echo
													// Imprimimor el nombre del programa de estudios
													$res_busqueda_programa['nombre']; ?></option>
												<?php
												};
												?>
											</select>
										</div>
									</div>
									<div class="item form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Módulo<span class="required">:</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<select type="text" id="modulo" name="modulo" class="form-control col-md-7 col-xs-12" value='<?php echo $id_modulo; ?>'>
												<option>Seleccionar director</option>
												<?php
												// Buscamos el modulo ya que es una llave foranea cuando tenemos su id
												$buscar_modulo = buscarModulo($conexion);
												// Recorremos los datos de la tabla de la base de datos
												while ($res_busqueda_modulo= mysqli_fetch_array($buscar_modulo)) {
													// Obtenemos su ID
													$id_busqueda_modulo = $res_busqueda_modulo['id'];
												?>
													<option value="<?php 
													// Al option le damos el valor que obtuvo en la busqueda
													echo $id_busqueda_modulo; ?>" <?php if
													// Hacemos una compracion el ID de la tabla modulo coincide con el que trajemos con la busqueda del modulo o con la llave foranea
													($id_modulo === $id_busqueda_modulo) {
														// Si coinciden por defecto se seleccionara
														echo "selected";
													} ?>><?php 
													// Imprimimos el nombre modulo
													echo $res_busqueda_modulo['descripcion']; ?></option>
												<?php
												};
												?>
											</select>
										</div>
									</div>
									<div class="item form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Semestre<span class="required">:</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<select type="text" id="semestre" name="semestre" class="form-control col-md-7 col-xs-12" value='<?php echo $id_semestre; ?>'>
												<option>Seleccionar semestre</option>
												<?php
												// Buscamos el semestre ya que es una llave foranea cuando tenemos su id
												$buscar_semestre = buscarSemestre($conexion);
												// Recorremos los datos de la tabla de la base de datos
												while ($res_busqueda_semestre = mysqli_fetch_array($buscar_semestre)) {
													// Obtenemos su ID
													$id_b_semestre = $res_busqueda_semestre['id'];
												?>
													<option value="<?php 
													// Al option le damos el valor que obtuvo en la busqueda
													echo $id_b_semestre; ?>" <?php 
													// Hacemos una compracion el ID de la tabla semestre coincide con el que trajemos con la busqueda del semestre o con la llave foranea
													if ($id_semestre === $id_b_semestre) {
														// Si coinciden por defecto se seleccionara
														echo "selected";
														// Imprimimos el nombre semestre
													} ?>><?php echo $res_busqueda_semestre['descripcion']; ?></option>
												<?php
												};
												?>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Créditos :
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="text" name="creditos" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_busqueda_unidad_didactica['creditos']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Hora :
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="text" name="hora" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_busqueda_unidad_didactica['horas']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tipo :
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="text" name="tipo" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_busqueda_unidad_didactica['tipo']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Orden :
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="text" name="orden" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_busqueda_unidad_didactica['orden']; ?>">
										</div>
									</div>
									<div class="ln_solid"></div>
									<div class="form-group">
										<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
											<a href="./unidad_didactica.php" class="btn btn-warning	" type="button">Cancelar</a>
											<button type="submit" class="btn btn-success">Actualizar Datos</button>
										</div>
									</div>

								</form>
							</div>
						</div>
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
	<!-- jQuery -->
	<script src="Gentella/vendors/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="Gentella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- FastClick -->
	<script src="Gentella/vendors/fastclick/lib/fastclick.js"></script>
	<!-- NProgress -->
	<script src="Gentella/vendors/nprogress/nprogress.js"></script>
	<!-- Chart.js -->
	<script src="Gentella/vendors/Chart.js/dist/Chart.min.js"></script>
	<!-- gauge.js -->
	<script src="Gentella/vendors/gauge.js/dist/gauge.min.js"></script>
	<!-- bootstrap-progressbar -->
	<script src="Gentella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	<!-- iCheck -->
	<script src="Gentella/vendors/iCheck/icheck.min.js"></script>
	<!-- Skycons -->
	<script src="Gentella/vendors/skycons/skycons.js"></script>
	<!-- Flot -->
	<script src="Gentella/vendors/Flot/jquery.flot.js"></script>
	<script src="Gentella/vendors/Flot/jquery.flot.pie.js"></script>
	<script src="Gentella/vendors/Flot/jquery.flot.time.js"></script>
	<script src="Gentella/vendors/Flot/jquery.flot.stack.js"></script>
	<script src="Gentella/vendors/Flot/jquery.flot.resize.js"></script>
	<!-- Flot plugins -->
	<script src="Gentella/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
	<script src="Gentella/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
	<script src="Gentella/vendors/flot.curvedlines/curvedLines.js"></script>
	<!-- DateJS -->
	<script src="Gentella/vendors/DateJS/build/date.js"></script>
	<!-- JQVMap -->
	<script src="Gentella/vendors/jqvmap/dist/jquery.vmap.js"></script>
	<script src="Gentella/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
	<script src="Gentella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
	<!-- bootstrap-daterangepicker -->
	<script src="Gentella/vendors/moment/min/moment.min.js"></script>
	<script src="Gentella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
	<!-- Custom Theme Scripts -->
	<script src="Gentella/build/js/custom.min.js"></script>
</body>

</html>