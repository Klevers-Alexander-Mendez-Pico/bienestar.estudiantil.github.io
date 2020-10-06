<?php 
  session_start();
  if(isset($_SESSION['usuario'])){
    header("location:php/inicio.php");

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Logi y Registro</title>

    <link rel="stylesheet" href="assets/css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
  <main>

    <div class="contenedor__todo">

      <div class="caja__trasera">
        <div class="caja__trasera-login">
        <h3>¿Ya tienes cuenta ? </h3>
        <p>Inicia sesion para entrar a la pagina  </p>
        <button id="btn__iniciar-sesion">Iniciar Sesion</button>
      </div>
  

      <div class="caja__trasera-register">
        <h3>¿Si no tienes cuenta? </h3>
        <p>Registrate aqui </p>
        <button id="btn__registrarse">Registrate</button>
      </div>
    </div>
<!--FORMULARIO DE LOGIN Y REGISTRO-->
    <div class="contenedor__login-register">
      <!--FORMULARIO LOGIN-->
      <form action="php/validacion_login.php" method="POST" class="formulario__login">
     
     
     <h2>
       <div class="logo"> 
    <img  src="images/logo.png"alt=""></div>
       Iniciar Sesion
     </h2>

        <input type="text" placeholder="Correo Electronico" name="correo_login">
        <input type="password" placeholder="Contraseña" name="contraseña_login">
        <button>Ingresar</button>
        


    
    <div class="alert alert-dark" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         va a desaparecer solo..
    </div>




    
      </form>
      <!--FORMULARIO REGISTRO-->
      <form action="php/almacenamiento_usuario.php" method="POST" class="formulario__register">


       
     <h2>
       <div class="usuario_login"> 
    <img  src="images/usuario_icono.png" alt=""></div>Crea tu cuenta de Bienestar Estudiantil</h2>
        <input type="text" placeholder="Nombre" name="nombre" >
        <input type="text" placeholder="Primer apellido" name="primer_apellido"> 
        <input type="text" placeholder="Segundo apellido" name="segundo_apellido"> 
        <input type="text" placeholder="Ingresar tu correo institucional" name="correo_institucional">
        <input type="text" placeholder="Nombre de usuario" name="nombre_usuario">
        <input type="password" placeholder="Elige una contraseña" name="contraseña">
        <button>Registrarse</button>
      </form>




    </div>
  </div>
 </main>
 <script src="assets/js/script.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>
</html>