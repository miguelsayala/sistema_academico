<?php 

    include "../include/conexion.php";
    // traemos los datos de nuestro fomr con un post y tambien de nuestro select
    $id = $_POST['id'];
    $periodo = $_POST['id_periodo_acad'];
    // realizamos la actualizacion correspondientemente
    $sql = "UPDATE presente_periodo_acad SET id_periodo_acad= '$periodo' where id='$id'";
    // ejecutamos la consulta
    $ejec = mysqli_query($conexion, $sql);

    if ($ejec) {
        echo "<script>
        alert('Datos actualizados de manera Correcta');
        window.location= '../presente_periodo_academico.php';
    </script>
";
}else{
echo "<script>
        alert('Error al Actualizar Cargo');
        window.history.back();
    </script>
";
}
// finalizamos la conexion
mysqli_close($conexion);
