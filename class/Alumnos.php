<?php
    include "conexion.php";

class Alumnos extends Conexion{

    public function __construct(){
        //Traer conexion
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->conectar();
    }
 //Obtener lista de Alumnos
 public function obtenerAlumnos(){
    $conexion = Conexion::conectar();
    $sql =  "SELECT a.id_alumno, CONCAT(a.nombre,'',a.apellido) AS nombre, a.correo, g.grupo, g.turno
            FROM alumnos AS a
            INNER JOIN grupo AS g ON g.id_grupo = a.id_grupo 
            WHERE a.id_status = '1'"; 
    $respuesta = mysqli_query($conexion, $sql);
return $respuesta;

}
    //Funcion recibe datos de modal insertar para insrtar alumno
    public function agregarNuevoAlumno($datos){
        $conexion = Conexion::conectar();
            
            $sql = $conexion->prepare("INSERT INTO alumnos(id_alumno, nombre, apellido, correo, id_grupo)
            VALUES (?,?,?,?,?)");
            $sql->bind_param("isssi",$datos['id'],$datos['nombre'],$datos['apellido'],$datos['correo'],$datos['idGrupo']);
            $sql->execute();
            $sql->close();
            return 1;
        
    }
}