<?php
   class Conexion{
      public function conectar(){
         //Variables para conexion a MYSQL 
         $host = "localhost";
         $user = "root";
         $password = "";
         $db = "lista-asistencia";
         //private $conect;
         
         $conect = mysqli_connect($host, $user, $password, $db);
         return $conect;
      }
    }     
?>