<?php
    include "header.php"; 
    
    //Validar usuario y rol, para dar acceso  
    if(isset($_SESSION['usuario']) && $_SESSION['usuario']['rol'] == 1 || $_SESSION['usuario']['rol'] == 2){

?>
    <!-- Page Content -->
    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
            <h1 class="fw-light">Bienvenido</h1>
            <p class="lead">Hola! 
                <br><hr>
                <br>
                <!-- Carousel -->
                <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../public/img/udgfondo1.jpg" alt="Los Angeles" class="d-block" style="width:100%; height:400px;">
                    <div class="carousel-caption">
                    <h3>Universidad de Guadalajara</h3>
                    <p>Piensa y Trabaja</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../public/img/camacho.jpg" alt="Chicago" class="d-block" style="width:100%; height:400px;">
                    <div class="carousel-caption">
                    <h3></h3>
                    <p>Equipo de Desarrollo</p>
                    </div> 
                </div>
                <div class="carousel-item">
                    <img src="../public/img/prepa.jpeg" alt="New York" class="d-block" style="width:100%; height:400px;">
                    <div class="carousel-caption">
                    <h3>Preparatoria 17 U.d.G</h3>
                    <p></p>
                    </div>  
                </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                </button>
                </div>

                <div class="container-fluid mt-3">
                <h3>Historia</h3>
                        <p>Desde la fundación de la UdeG, la gestión de la enseñanza del nivel medio superior se ha mantenido en constante evolución; el SEMS, su organización actual y sus tareas administrativas no podrían concebirse sin las transformaciones que ha sufrido la misma Institución.</br>
            </br>
        <u><b>Etapas más representativas:</b></u>
        </br>
            </br>
         <b>Fundación de la Universidad de Guadalajara en 1925 (Origen).</b></br>
         Las escuelas preparatorias o politécnicas eran administradas directamente por la Rectoría Central, misma que dependía a su vez del Gobierno del Estado.</br> </br>
       
         <B>Departamento de Enseñanza Preparatoria en 1972 (primer modelo de administración).</b></br>
         Tras la reforma de 1972 se creó el Departamento de Enseñanza Preparatoria. Su función era coordinar los asuntos académicos del nivel medio superior, a través de un director, un secretario, coordinadores de área y un Consejo Técnico.</br> </br>
       
         <b>Dirección de Enseñanza Media Superior en 1992 (rumbo a la Red Universitaria).</b></br>
         En la década de los 90 el panorama fue fértil para que se gestaran las medidas de trasformación que dieron vida a la UdeG como la institución que actualmente conocemos.</br>
       
         En 1992 se creó la Dirección General de Enseñanza Media Superior (DEMS), encargada de mediar la Reforma Académica de las escuelas del nivel medio superior.</br> </br>
       
         <b>Sistema de Educación Media Superior en 1994 (organización actual).</b></br>
         La Red Universitaria de Jalisco quedó establecida en 1993, la nueva estructura organizacional respondía de la siguiente manera: una Administración General dependiente del Rector General, los Centros Universitarios Temáticos y Regionales y el SEMS.</br> </br>
       
         Mediante el dictamen con fecha del 27 de mayo de 1997 se aprobó la creación del SEMS [2] teniendo a su cargo 38 escuelas </p>
                    </br>

            </p> 
            </div>   
        </div>
    </div>
<?php
    include "footer.php";  
?>
     
<?php    
    }else{
        header("location:../index.html");
    } 
?>