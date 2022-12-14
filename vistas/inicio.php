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
                        <p>Desde la fundaci??n de la UdeG, la gesti??n de la ense??anza del nivel medio superior se ha mantenido en constante evoluci??n; el SEMS, su organizaci??n actual y sus tareas administrativas no podr??an concebirse sin las transformaciones que ha sufrido la misma Instituci??n.</br>
            </br>
        <u><b>Etapas m??s representativas:</b></u>
        </br>
            </br>
         <b>Fundaci??n de la Universidad de Guadalajara en 1925 (Origen).</b></br>
         Las escuelas preparatorias o polit??cnicas eran administradas directamente por la Rector??a Central, misma que depend??a a su vez del Gobierno del Estado.</br> </br>
       
         <B>Departamento de Ense??anza Preparatoria en 1972 (primer modelo de administraci??n).</b></br>
         Tras la reforma de 1972 se cre?? el Departamento de Ense??anza Preparatoria. Su funci??n era coordinar los asuntos acad??micos del nivel medio superior, a trav??s de un director, un secretario, coordinadores de ??rea y un Consejo T??cnico.</br> </br>
       
         <b>Direcci??n de Ense??anza Media Superior en 1992 (rumbo a la Red Universitaria).</b></br>
         En la d??cada de los 90 el panorama fue f??rtil para que se gestaran las medidas de trasformaci??n que dieron vida a la UdeG como la instituci??n que actualmente conocemos.</br>
       
         En 1992 se cre?? la Direcci??n General de Ense??anza Media Superior (DEMS), encargada de mediar la Reforma Acad??mica de las escuelas del nivel medio superior.</br> </br>
       
         <b>Sistema de Educaci??n Media Superior en 1994 (organizaci??n actual).</b></br>
         La Red Universitaria de Jalisco qued?? establecida en 1993, la nueva estructura organizacional respond??a de la siguiente manera: una Administraci??n General dependiente del Rector General, los Centros Universitarios Tem??ticos y Regionales y el SEMS.</br> </br>
       
         Mediante el dictamen con fecha del 27 de mayo de 1997 se aprob?? la creaci??n del SEMS [2] teniendo a su cargo 38 escuelas </p>
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