<?php 
include 'conexion_bd.php';
    $nombre =$_POST['nombre'];
    $primer_apellido =$_POST['primer_apellido'];
    $segundo_apellido =$_POST['segundo_apellido'];
    $correo_institucional =$_POST['correo_institucional'];
    $nombre_usuario =$_POST['nombre_usuario'];
    $contraseña = $_POST['contraseña'];
    $contraseña = hash('sha512', $contraseña);
    

    $query = "INSERT INTO usuario(nombres, primer_apellido, segundo_apellido, correo, usuario, contraseña) VALUES('$nombre', '$primer_apellido','$segundo_apellido','$correo_institucional','$nombre_usuario','$contraseña')";


/*  VERFICAR  QUE EL CORREO  y USUARIO NO SE REPITANO SE REPITA  */

    $verificar_correo = mysqli_query($conexion,  "SELECT * FROM usuario WHERE correo = '$correo_institucional' ");

        if(mysqli_num_rows($verificar_correo) > 0 ){
        echo '
        <script>
        alert ("este correo ya esta registrado");
        window.locaction ="";
        </script>


        ';
        exit();

    }

   



    $verificar_usuario = mysqli_query($conexion,  "SELECT * FROM usuario WHERE usuario = '$nombre_usuario'");

    if(mysqli_num_rows($verificar_usuario) > 0 ){
        echo '
        <script>
        alert ("este usuario ya esta registrado");
        window.locaction ="";
        </script>


        ';
        exit();

    }

    $ejecutar = mysqli_query($conexion,$query);

    if($ejecutar){
        echo'
        <script>
        window.locaction ="../index.php";
        </script>
        
        ';

         }else{

        echo'
        <script>
        window.locaction ="../index.php";
        </script>
        
        ';
     }


?>