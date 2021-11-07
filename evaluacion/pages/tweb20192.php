<?php
    session_start();
    if(isset($_SESSION["valid"])){
       include("./tweb20192_BD.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>ADENTRO</title>
<meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no'/>
<meta name="description" content="">
<meta name="keywords" content="">


<!-- CSS -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link href="./../../css/sem20192.css" rel="stylesheet">
</head>




<body>
    <header>
       
            <img src="./../../assets/img/header.jpg" class="responsive-img">
      
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large red">
                <i class="large fas fa-ellipsis-h"></i>
            </a>
            <ul>
                <li><a href="./cerrarSesion.php?nombreSesion=valid" class="btn-floating orange"><i class="fas fa-power-off"></i></a></li>
            </ul>
        </div>
    </header>

    <main class="valign-wrapper">
        <div class="container">
            <div class="row">
                <table class="striped centered responsive-table">
                    <thead>
                        <tr><th>Boleta</th><th>Nombre</th><th>Opciones</th></tr>
                    </thead>
                    <tbody>
                        <?php echo $filasEst; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <footer class="page-footer blue">
        <div class="footer-copyright blue accent-4">
            <div class="container">
                © 2021 Copyright 
                <a class="grey-text text-lighten-4 right" href="http://www.comunidad.escom.ipn.mx/jantonio/">JAOR</a>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="./../../js/tweb20192.js"></script>
</body>
</html>
<?php
    }else{
        header("location:./../../index.php");
    }
?>