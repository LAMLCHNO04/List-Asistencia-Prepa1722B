<?php
    include "header.php"; 
    
    //Validar usuario y rol, para dar acceso  
    if(isset($_SESSION['usuario']) && $_SESSION['usuario']['rol'] == 1){
        include "../class/conexion.php"; 
        $con = new Conexion();
        $conexion = $con->conectar()

?>
    <!-- Page Content -->
    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
            <h1 class="fw-light">Alumnos</h1>
                <p class="lead">Bienvenido
                <br>
                <div class="row">
                    <div class="col-8">
                        <!-- Button to Open the Modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregarAlumno">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </button>
                    </div>
                </div>
                <hr>
                <div id="tablaAlumnosLoad">
                
                </div>
                </p> 
            </div>   
        </div>
    </div>
<?php
    include "alumnos/modalAgregarAlumno.php";
    include "footer.php";  
?>
     <script src= "../public/js/alumnos/alumnos.js"></script>
<?php    
    }else{
        header("location:../index.html");
    } 
?>