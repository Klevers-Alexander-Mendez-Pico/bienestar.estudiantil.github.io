<?php 
    session_start();
    if(!isset($_SESSION['usuario'])){
    echo'
    <script>
    alert("logate");
    window.location = "../index.php";
    </script>
        ';

    //header("location:../index.php");
    session_destroy();
        die();
    
    

    }
   


?>
<!DOCTYPE html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

    <title>inicio</title>
</head>
<body>
<h1>holas</h1>
<a href="salir.php"> CERRAR SESION </a>
</body>
</html>
