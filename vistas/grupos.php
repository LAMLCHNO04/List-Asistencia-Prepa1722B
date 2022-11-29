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
            <h1 class="fw-light">Grupos</h1>
                <p class="lead">Lista de grupod
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
    include "grupo/modalAgregarGrupo.php";
    include "footer.php";  
?>
     <script src= "../public/js/grupo/grupos.js"></script>
<?php    
    }else{
        header("location:../index.html");
    } 
?>