<?php 

include "../include/conexion.php";
include "../include/busquedas.php";

// para la actualizacion traemos el id para poder actualizarlo con el ID 
$id = $_POST['id'];
// lo que vamos a actualizar sera la descripcion
$descripcion = $_POST['descripcion'];
// Consulta que realizamos: actualizar la tabla semestre, especifico la descripcion con el id
$sql = "UPDATE semestre SET descripcion= '$descripcion' WHERE id='$id'";

// Ejecutamos nuestra consulta
$eje = mysqli_query($conexion, $sql);

// Verificamos si tenemos errores  o no
if ($eje) {
    echo "<script>
    alert('Datos actualizados de manera Correcta');
    window.location= '../semestre.php';
</script>
";
} else {
echo "<script>
    alert('Error al Actualizar Registro');
    window.history.back();
</script>
";
}

?>