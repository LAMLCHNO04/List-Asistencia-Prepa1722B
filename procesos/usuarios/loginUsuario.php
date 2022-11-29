<?php
    //iniciar sission
    session_start();
    //usuario y password colocado
    $usuario = $_POST['login'];
    $password = $_POST['password'];

    include "../../class/Usuarios.php";

    //clase y metodo para validar existencia de usuario
    $USUARIO = new Usuarios();
    echo $USUARIO->loginUsuario($usuario, $password);
?>