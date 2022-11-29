<?php
// Busqueda de genero para futuras operaciones, recibimos un argumento que es la conexion
function buscarGenero($conexion)
{
    //Ahora hacemos una consulta
    $sql = "SELECT * FROM genero";
    //RETORNAR Y EJECUTAR CONSULTA
    return mysqli_query($conexion, $sql);
}
// Busqueda de genero por id para hacer filtros
function buscarGeneroById($conexion, $id)
{
    $sql = "SELECT *FROM genero WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
// Busqueda del cargo
function buscarCargo($conexion)
{
    $sql = "SELECT * FROM cargo";
    return mysqli_query($conexion, $sql);
}
// Busqueda del cargo por id
function buscarCargoById($conexion, $id)
{
    $sql = "SELECT * FROM cargo WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
// Busqueda del programa de estudios
function buscarProgramaEstudio($conexion)
{
    $sql = "SELECT * FROM programa_estudios";
    return mysqli_query($conexion, $sql);
}
//para hacer el registro de estudiantes correspondiente a su programa de estudios buscamos el programa por codigo
function buscarProgramaByCodigo($conexion, $codigo)
{
    $sql = "SELECT * FROM programa_estudios WHERE codigo='$codigo'";
    return mysqli_query($conexion, $sql);
}
//buscamos programa por id
function buscarProgramaById($conexion, $id)
{
    $sql = "SELECT * FROM programa_estudios WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
// Busqueda de semestre
function buscarSemestre($conexion)
{
    $sql = "SELECT * FROM semestre";
    return mysqli_query($conexion, $sql);
}
// Busqueda de condicion
function buscarCondicion($conexion)
{
    $sql = "SELECT * FROM condicion";
    return mysqli_query($conexion, $sql);
}
// Busqueda de condicion por id
function buscarCondicionById($conexion, $id)
{
    $sql = "SELECT * FROM condicion WHERE id='$id'";
    return mysqli_query($conexion, $sql);
} 
// Buscamos estudiantes
function buscarEstudiantes($conexion)
{
    $sql = "SELECT * FROM estudiante";
    return mysqli_query($conexion, $sql);
}
//Busqueda de estudiantes por su dni para mostrarlo en una tabla
function buscarEstudianteByDni($conexion, $dni)
{
    $sql = "SELECT * FROM estudiante WHERE dni='$dni'";
    return mysqli_query($conexion, $sql);
}
// Busqueda de estudiantes por su id para mostrarlo en una tabla
function buscarEstudianteById($conexion, $id)
{
    $sql = "SELECT * FROM estudiante WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
// Busqueda del usuario de los estudiantes por su id para mostrarlo en una tabla
function buscarUsuarioEstudianteById($conexion, $id)
{
    $sql = "SELECT * FROM usuarios_estudiante WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
// Busqueda del usuario de los estudiantes por su nombre para mostrarlo en una tabla
function buscarEstudianteByNombre($conexion, $nombre)
{
    $sql = "SELECT * FROM estudiante WHERE apellidos_nombres='$nombre'";
    return mysqli_query($conexion, $sql);
}
function buscarUserEstudiante($conexion)
{
    $sql = "SELECT * FROM usuarios_estudiante";
    return mysqli_query($conexion, $sql);
}

//BUSCAR DOCENTE
function buscarDocente($conexion)
{
    $sql = "SELECT * FROM docente";
    return mysqli_query($conexion, $sql);
}
// Buscar docente por id para mostrar en las tablas
function buscarDocenteById($conexion, $id)
{
    $sql = "SELECT * FROM docente WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
// Buscar docente por dni para mostrar en las tablas
function buscarDocenteByDni($conexion, $dni)
{
    $sql = "SELECT * FROM docente WHERE dni='$dni'";
    return mysqli_query($conexion, $sql);
}
// Buscar usuario del docente
function buscarUsuarioDocente($conexion)
{
    $sql = "SELECT*FROM usuarios_docentes";
    return mysqli_query($conexion, $sql);
}
// Busqueda del usuario del docente por el id para moestrarlo en una tabla
function buscarUsuarioDocenteById($conexion, $id)
{
    $sql = "SELECT * FROM usuarios_docentes  WHERE id= '$id'";
    return mysqli_query($conexion, $sql);
}
//Busqueda de datos institucionales
function buscarDatoInstitucional($conexion)
{
    $sql = "SELECT*FROM datos_institucionales";
    return mysqli_query($conexion, $sql);
}
//buscar datos institucionales por codigo para mostrarlo en una tabla que va a necesitar de este
function buscarDInstitiByCodigo($conexion, $codigo)
{
    $sql = "SELECT*FROM datos_institucionales WHERE cod_modular = '$codigo'";
    return mysqli_query($conexion, $sql);
}
//Busqueda de modulos
function buscarModulo($conexion)
{
    $sql = "SELECT*FROM modulo_profesional";
    return mysqli_query($conexion, $sql);
}
//Busqueda de unidad didactica
function buscarUnidadDidactica($conexion)
{
    $sql = "SELECT*FROM unidad_didactica";
    return mysqli_query($conexion, $sql);
}
// Busqueda de unidad didactica por id para mostrar en una tabla
function buscarUnidadDidacticaById($conexion, $id)
{
    $sql = "SELECT* FROM unidad_didactica WHERE id ='$id'";
    return mysqli_query($conexion, $sql);
}


//busqueda de periodo academico
function buscarPeriodoAcademico($conexion)
{
    $sql = "SELECT*FROM periodo_academico";
    return mysqli_query($conexion, $sql);
}
//busqueda de periodo academico por el id
function buscarPeriodoAcademicoById($conexion, $id)
{
    $sql = "SELECT * FROM periodo_academico WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
// Busqueda de semestre por el id
function buscarSemestreById($conexion, $id)
{
    $sql = "SELECT *FROM semestre WHERE id= '$id'";
    return mysqli_query($conexion, $sql);
}
// Busqueda del modulo por id
function buscarModuloById($conexion, $id)
{
    $sql = "SELECT * FROM modulo_profesional WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}

// busqueda del presente periodo academico
function buscar_pre_per_academico($conexion)
{
    $sql = "SELECT * FROM presente_periodo_acad";
    return mysqli_query($conexion, $sql);
}
// Busqueda del presente periodo academico por id
function buscar_pre_p_academicoById($conexion, $id)
{
    $sql = "SELECT * FROM presente_periodo_acad WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
