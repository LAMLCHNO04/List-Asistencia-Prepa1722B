<?php
    session_start();
    header("Set-Cookie: cross-site-cookie=whatever; SameSite=None; Secure");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/plantilla.css">
    <!--Data Table-->
    <link rel="stylesheet" href="../public/datatable/css/dataTables1.css">  
    <!--<link rel="stylesheet" href="../public/datatable/css/dataTables.min2.css">-->
    <link rel="stylesheet" href="../public/tabla/css/dataTables.bootstrap5.min.css">
    <!--<link rel="stylesheet" href="../public/datatable/css/responsive.bootstrap4.min.css">-->
    <link rel="stylesheet" href="../public/tabla/css/responsive.bootstrap5.min.css">
    <!--iconos-->
    <link rel="stylesheet" href="../public/fontawesome-free-6.0.0-web/css/all.css">
    <!--Select2-->
    <link href="../public/select2/select2.min.css" rel="stylesheet" />
    <!--ChartJS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.0/Chart.min.css">
   
    <title>Preparatoria 17</title>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top mb-5 shadow">
    <div class="container">
        <a class="navbar-brand" href="inicio.php"><i class="fas fa-school"></i> Prepa 17</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="inicio.php"><i class="fa-solid fa-house"></i> Inicio</a>
                </li>
                <?php if($_SESSION['usuario']['rol'] == 2){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="misDispositivos.php">Mis dispositivos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="misTickets.php">Mis Tickets</a>
                </li>
                <?php }else if($_SESSION['usuario']['rol'] == 1){ ?>
                <!--Vistas del Administrador-->
                <li class="nav-item">
                    <a class="nav-link" href="asignatura.php"><i class="fa-solid fa-graduation-cap"></i> Asignatura</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="alumnos.php"><i class="fas fa-user-graduate"></i> Alumnos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="grupos.php"><i class="fas fa-user-graduate"></i> Grupos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reportes.php"><i class="fas fa-address-book"></i> Lista de Asistencia</a>
                </li>
                <?php }else{
                    header("location:../index.html");
                }  ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                     role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="fas fa-user-tie"></i> Usuario: <?php echo $_SESSION['usuario']['nombre'];?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#"><i class="fas fa-edit"></i> Editar Datos</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../procesos/usuarios/salir.php"><i class="fas fa-sign-out-alt"></i> Cerrar Sesion</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    </nav>