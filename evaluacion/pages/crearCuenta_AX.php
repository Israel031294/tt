<?php


include("./configBD.php");
//recupera lo que llega a la pagina
include("./getPosts.php");
 
  $boleta = $_POST["boleta"];
  $nombre = $_POST["nombre"];
  $correo = $_POST["correo"];
  $fechaNac ='2020-12-12';
  $tipoUsr = 'AL';
  $contrasena = md5($_POST["contrasena"]);
  
  $respAX = array();
  $sql = "INSERT INTO alumno VALUES('$boleta','$nombre','$correo','$fechaNac','$contrasena','$tipoUsr',NOW())";
  $sqlCheckBoleta = "SELECT * FROM alumno WHERE boleta = '$boleta'";
  $resultadoCheckBoleta = mysqli_query($conexion,$sqlCheckBoleta);

  if(mysqli_num_rows($resultadoCheckBoleta) == 1){
    $respAX["codigo"] = 2;
    $respAX["msj"] = "<h5 class='center-align'>Error. El número de boleta ya está registrado.<br>Favor de intentarlo nuevamente :(</h5>";
  }else{
    $resultado = mysqli_query($conexion,$sql);
    if(mysqli_affected_rows($conexion) == 1){
      $respAX["codigo"] = 1;
      $respAX["msj"] = "<h5 class='center-align'>Gracias. Tu registro se realizó correctamente :)</h5>";
    }else{
      $respAX["codigo"] = 0;
      $respAX["msj"] = "<h5 class='center-align'>Error. Favor de intentarlo nuevamente :(</h5>";
    }
  }
  
  echo json_encode($respAX); //{"codigo":1,"msj":"<h3>Gracias|Error...</h3"}
?>
