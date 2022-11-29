<?php
    include "../include/conexion.php";
    include "../include/busquedas.php";

    $codigo = $_POST['cod_modular'];
    $ruc= $_POST['ruc'];
    $nombre_institucion= $_POST['nombre_institucion'];
    $departamento= $_POST['departamento'];
    $provincia= $_POST['provincia'];
    $distrito= $_POST['distrito'];
    $direccion= $_POST['direccion'];
    $telofono= $_POST['telofono'];
    $correo= $_POST['correo'];
    $nro_resolucion= $_POST['nro_resolucion'];

    $sql = "UPDATE datos_institucionales SET cod_modular='$codigo', ruc='$ruc', nombre_institucion='$nombre_institucion', departamento='$departamento', provincia='$provincia',distrito='$distrito', direccion='$direccion', telofono='$telofono', correo='$correo', nro_resolucion='$nro_resolucion'";

    $ejec = mysqli_query($conexion, $sql);
    if ($ejec) {
        echo "<script>
        alert('Datos actualizados de manera Correcta');
        window.location= '../datos_institucionales.php';
    </script>
";
}else{
echo "<script>
        alert('Error al Actualizar Registro');
        window.history.back();
    </script>
";
}
mysqli_close($conexion);
?>