<?php
     $datos = array (
           "id"  =>   $_POST['id'], 
           "nombre" =>   $_POST['nombre'], 
           "apellido"=>   $_POST['apellido'], 
           "correo"=>   $_POST['correo'],
           "idGrupo"=>   $_POST['idGrupo']
        );
    include "../../class/Alumnos.php";
    $Alumno = new Alumnos();

    echo $Alumno->agregarNuevoAlumno($datos);
?>