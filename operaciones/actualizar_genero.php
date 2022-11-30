<?php 

include "../include/conexion.php";

// Obtenemos el name: id, genero de nuestro input
$id = $_POST['id'];
$genero = $_POST ['genero'];

// Realizamos nuestra operacion para actualizar esta tabla
$sql = "UPDATE genero SET genero='$genero' WHERE id='$id'";

// Ejecutamos nuestra consulta 
$ejec = mysqli_query($conexion, $sql);

// Verificamos si hay errores o no
if ($ejec) {
    echo "<script>
					alert('Datos actualizados de manera Correcta');
					window.location= '../genero.php';
				</script>
			";
}else{
    echo "<script>
					alert('Error al Actualizar Género');
					window.history.back();
				</script>
			";
}
mysqli_close($conexion);

?>