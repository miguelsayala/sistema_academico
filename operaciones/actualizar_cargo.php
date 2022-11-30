<?php 

    include "../include/conexion.php";
// Obtenemos los valores de nuestros inputs con el metodo POST
    $id = $_POST['id'];
    $cargo = $_POST['cargo'];

    //Realizamos nuestra consulta de actualizacion con el ID 
    $sql = "UPDATE cargo SET descripcion= '$cargo' where id='$id'";
    // Ejecutamos la consulta
    $ejec = mysqli_query($conexion, $sql);

    // Verificamos si hay errores o no
    if ($ejec) {
        echo "<script>
        alert('Datos actualizados de manera Correcta');
        window.location= '../cargo.php';
    </script>
";
}else{
echo "<script>
        alert('Error al Actualizar Cargo');
        window.history.back();
    </script>
";
}
mysqli_close($conexion);
?>