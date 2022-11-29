<?php
    include "conexion.php";

class Usuarios extends Conexion{

    public function __construct(){
        //Traer conexion
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->conectar();
    }
    //Funcion para validar existencia de usuario
    public function loginUsuario($usuario,$password){
        $conexion = Conexion::conectar();
        $sql = $conexion->prepare("SELECT nombre, id_maestro, id_rol FROM maestros WHERE usuario = ? AND password = ? AND id_state = 1");
        $sql->bind_param("ss", $usuario, $password);
        $sql->execute();
        $respuesta = $sql->get_result();
        
        //validar si existe el usuario
        if(mysqli_num_rows($respuesta) > 0){ 
            //variable contenedora de datos obtenidos
            $datosUsuario = mysqli_fetch_array($respuesta);
            //dar valores a la session
            $_SESSION['usuario']['nombre'] = $datosUsuario['nombre'];
            $_SESSION['usuario']['id'] = $datosUsuario['id_maestro'];
            $_SESSION['usuario']['rol'] = $datosUsuario['id_rol'];

            //mandar respuesta
            return 1;
        }else{
            //mandar respuesta
            return "Usuario o password incorrectos";
        }    
            
    }
}
?>