<?php
    include("./configBD.php");
    $sqlEst = "SELECT * FROM alumno";
    $resEst = mysqli_query($conexion, $sqlEst);
    $filasEst = "";
    while($filas = mysqli_fetch_array($resEst, MYSQLI_BOTH)){
        $filasEst .= "<tr><td>$filas[0]</td><td>$filas[1] $filas[2] $filas[3]</td>
        <td>
            <i class='fas fa-edit editar' data-editar='$filas[0]'></i>&nbsp;&nbsp;&nbsp;
            <i class='fas fa-trash borrar' data-borrar='$filas[0]'></i>&nbsp;&nbsp;&nbsp;
            <i class='fas fa-file-pdf pdf' data-pdf='$filas[0]'></i>&nbsp;&nbsp;&nbsp;
            <i class='fas fa-envelope correo' data-correo='$filas[0]'></i>            
        </td></tr>";
    }
?>