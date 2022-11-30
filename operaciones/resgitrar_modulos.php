<?php
include "../include/conexion.php";
//con POST traemos los datos de neustro form
$programa_estudios = $_POST['programa_estudios'];
$descripcion = $_POST['descripcion'];
$nro_modulo = $_POST['nro_modulo'];


$sql = "INSERT INTO modulo_profesional (descripcion, nro_modulo, id_programa_estudio) VALUES('$descripcion', '$nro_modulo', '$programa_estudios')";

$ejec_sql = mysqli_query($conexion, $sql);

if ($ejec_sql) {
    echo "<script>
                alert('Registro Exitoso');
                window.location= '../modulo_formativo.php'
    			</script>";
} else {
    echo "<script>
			alert('El estudiante ya existe, error al guardar');
			window.history.back();
			</script>
			";
}
