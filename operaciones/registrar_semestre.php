<?php 
include "../include/conexion.php";

// Con el metodo POST traemos el nombre  de nuestro input
$semestre = $_POST['semestre'];
// Realizamos la consulta
$sql = "INSERT INTO semestre(descripcion) VALUES ('$semestre')";
// Ejecutamos la consulta
$ejec = mysqli_query($conexion, $sql);
// Verificamos si tenemos errores  o no 
if ($ejec) {
    echo "<script>
        alert('Registro Satisfactorio');
        window.location = '../semestre.php';
        </script>";
}else{
    echo "<script>
        alert('Error al registrar');
        window.history.back();
        </script>";
}
