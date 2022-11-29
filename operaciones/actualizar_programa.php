<?php 
   include "../include/conexion.php";
   // traemos los datos de nuestro fomr con un post y tambien de nuestro select

    //traemos los datos de nuestro form
    $id = $_POST['id'];
    $codigo = $_POST['codigo'];
    $tipo = $_POST['tipo'];
    $nombre = $_POST['nombre'];
    $resolucion = $_POST['resolucion'];

    //el UPDATE

    $sql = "UPDATE programa_estudios SET codigo='$codigo', tipo='$tipo', nombre='$nombre', resolucion='$resolucion'  WHERE id='$id'";

    //ejecutamos nuestra actualizacion
    $ejec_consulta = mysqli_query($conexion, $sql);

    //verficamos los errores que podamos tener
    if ($ejec_consulta) {
        echo "<script>
					alert('Datos actualizados de manera Correcta');
					window.location= '../programa_estudios.php';
				</script>
			";
    }else{
        echo "<script>
                        alert('Error al Actualizar Programa');
                        window.history.back();
                    </script>
                ";
    }
