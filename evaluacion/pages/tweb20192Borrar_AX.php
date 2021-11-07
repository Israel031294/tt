<?php
    include("./configBD.php");
    include("./getPosts.php");

    $sqlDelEst = "DELETE FROM alumno WHERE boleta = '$boleta'";
    $resDelEst = mysqli_query($conexion, $sqlDelEst);
    $numDelEst = mysqli_affected_rows($conexion);
    $respAX = array();
    if($numDelEst == 1){
        $respAX["status"] = 1;
        $respAX["mensaje"] = "<h5 align='center'>Registro eliminado :)</h5>";
    }else{
        $respAX["status"] = 0;
        $respAX["mensaje"] = "<h5 align='center'>Error. Favor de intentarlo nuevamente</h5>";
    }

    echo json_encode($respAX);
?>