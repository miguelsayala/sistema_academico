<?php 
include "../include/conexion.php";
include "../include/busquedas.php";

    //traemos los valores de nuestro input con el metodo POST
$id = $_POST['id'];
$u_didactica = $_POST['u_didactica'];
$p_estudios = $_POST['p_estudios'];
$modulo = $_POST['modulo'];
$semestre = $_POST['semestre'];
$creditos = $_POST['creditos'];
$hora = $_POST['hora'];
$tipo = $_POST['tipo'];
$orden = $_POST['orden'];



//Realizamos nuestra consulta de actualizacion de la tabala unidad didactica con sus respedictos campos CON EL ID: WHERE id= $id;
$sql = "UPDATE unidad_didactica SET descripcion='$u_didactica', id_programa_estudio='$p_estudios', id_modulo='$modulo', id_semestre='$semestre', creditos='$creditos', horas='$hora', tipo='$tipo' , orden='$orden' WHERE id='$id' ";

// Ejecutamos la consulta
$ejec_consulta = mysqli_query($conexion, $sql);

// Verificamos si tenemos errores
if ($ejec_consulta) {
    echo "<script>
                alert('Datos actualizados de manera Correcta');
                window.location= '../unidad_didactica.php';
            </script>
        ";
} else {
    echo "<script>
                alert('Error al Actualizar Registro');
                window.history.back();
            </script>
        ";
}
mysqli_close($conexion);
?>