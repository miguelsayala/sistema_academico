<?php 
    include "../include/conexion.php";
    include "../include/busquedas.php";


    //con POST traemos los datos de neustro form
    $codigo = $_POST['codigo'];
    $tipo = $_POST['tipo'];
    $nombre = $_POST['nombre'];
    $resolucion = $_POST['resolucion'];

    //busqueda de programa
    $b_programa = buscarProgramaByCodigo ($conexion, $codigo);

    //almacenamos en una variable
    $c_b_programa = mysqli_num_rows($b_programa);

    //validamos que no haya registros en la base de datos
    if ($c_b_programa == 0) {
        //insertamos lo que queremos
        $insertar = "INSERT INTO programa_estudios (codigo, tipo, nombre, resolucion) VALUES ('$codigo', '$tipo', '$nombre', '$resolucion')";

        //procedemos con el registro
        $ejec_consulta = mysqli_query($conexion, $insertar);
        if($ejec_consulta){
            echo "<script>
                alert('Registro del programa Exitoso');
                window.location= '../programa_estudios.php';
    			</script>";
        }else{
            echo "<script>
                alert('Error al registrar programa');
                window.history.back();
                </script>
                ";
        }
    }else{
        echo "<script>
                alert('El programa ya existe, error al guardar');
                window.history.back();
                </script>
                ";
    }



?>