<?php 

    include "../include/conexion.php";
    // Treamos el valor de nuestro input
    $genero = $_POST ['genero'];

    // Realizamos la operacion de insertar un nuevo valor en tabla de género
    $sql = "INSERT INTO genero (genero) VALUES ('$genero')";

    // Ejecutamos nuestra operacion
    $ejec = mysqli_query($conexion, $sql);

    // Verificamos si  hay errores o no
    if ($ejec) {
        echo "<script>
                alert('Registro Exitoso');
                window.location= '../genero.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al registrar usuario');
			window.history.back();
			</script>
			";
	}
?>