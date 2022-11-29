<?php
include "../include/conexion.php";
include "../include/busquedas.php";
    // traremos los datos de nuestro formulario con POST para actualizarlo
    $id = $_POST['id'];
    $programa = $_POST['id_programa_estudio'];
    $descripcion = $_POST['descripcion'];
    $nro_modulo = $_POST['nro_modulo'];

    // realizamos nuestra actualizacion
    $sql = "UPDATE modulo_profesional SET descripcion='$descripcion', nro_modulo='$nro_modulo', id_programa_estudio='$programa' WHERE id='$id' ";


    // ejecutamos nuestra actualizacion
    $ejec_consulta = mysqli_query($conexion, $sql);

    if ($ejec_consulta) {
        echo "<script>
					alert('Datos actualizados de manera Correcta');
					window.location= '../modulo_formativo.php';
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
