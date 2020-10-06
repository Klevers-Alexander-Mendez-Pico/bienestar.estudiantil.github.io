<?php 

    session_start();

    include 'conexion_bd.php';

    $correo_login = $_POST['correo_login'];
    $contraseña_login = $_POST['contraseña_login'];

    //DESINCRITACION DE CONTRASEÑA
    $contraseña_login = hash ('sha512',$contraseña_login);

    $validacion_login = mysqli_query($conexion , " SELECT * FROM usuario WHERE correo ='$correo_login' and contraseña = '$contraseña_login'");

    if (mysqli_num_rows($validacion_login) > 0){
      
    $_SESSION['usuario'] = $correo_login;

    header("location:inicio.php");
 
    exit;
       
    } else{
     
        echo '
        <script>
        alert ("usuario no existe");
        window.location="../index.php";
        </script>
        ';
        exit;


    }

?>