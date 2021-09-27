<?php
    session_start();
    //contiee el modelo
    include("./configBD.php");
    //recupera lo que llega a la pagina
    include("./getPosts.php");

    //lo que guarda en la base de datos
    $contrasena = md5($contrasena);
    $sqlEst = "SELECT * FROM alumno WHERE boleta = '$boleta' AND contrasena = '$contrasena'";
    $resEst = mysqli_query($conexion, $sqlEst);
    $numEst = mysqli_num_rows($resEst);
    $infGetUser= mysqli_fetch_row($resEst);

 
    //arreglo en en pho
    $respAX = array();
    //validaciones numero de filas
    if($numEst == 1){
        $_SESSION["valid"] = 1;
        //arglo asociativo
        $respAX["status"] = 1;
        //retroalimetacion
        $respAX["mensaje"] = "<h5 align='center'>Bienvenido ".$infGetUser[1]." :)</h5>";
        $respAX["tipoU"] =$infGetUser[5];
    }else{
        $respAX["status"] = 0;
        $respAX["mensaje"] = "<h5 align='center'>Error. Favor de intentarlo nuevamente</h5>";
    }
//conviert a json y regreso a js
    echo json_encode($respAX);
    
?>