<?php

    include "../../class/Alumnos.php";

    //Traer consulta para obtener usuarios
    $Alumnos = new Alumnos();
    $Alumnos = $Alumnos->obtenerAlumnos();                    
    
?>
<!--tabla de usuarios-->
<table class="table table-sm dt-responsive nowrap" id="alumnosDataTable" style="width:100%">
    <thead>
        <th>ID</th>
        <th>Nombre Alumno</th>
        <th>Correo</th>
        <th>Grupo</th>
        <th>Estatus</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </thead>
    <tbody>
        <?php
            foreach($Alumnos as $mostrar){
        ?>
        <tr>
            <td><?php echo $mostrar['id_alumno']?></td>
            <td><?php echo $mostrar['nombre']?></td>
            <td><?php echo $mostrar['correo']?></td>
            <td><?php echo $mostrar['grupo']?></td>
            <td><?php echo $mostrar['turno']?></td>
            <td>
                <button class="btn btn-warning btn-sm" onclick="eliminar(<?php $mostrar['id_alumno']?>)">
                    <i class="fa-solid fa-user-pen"></i>
                </button>
            </td>
            <td>
                <button class="btn btn-danger btn-sm" onclick="eliminar(<?php $mostrar['id_alumno']?>)">
                   <i class="fa-solid fa-trash-can"></i>
                </button>
            </td>
        </tr>
        <?php } ?>
    </tbody>  
</table> 

<script>
    $(document).ready(function(){
        $('#alumnosDataTable').DataTable({
            //Idioma de la tabla
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
        } );
    });
</script>