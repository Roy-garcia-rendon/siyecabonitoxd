<?php

session_start();
include 'conexion_be.php'; /*incluye la coneccion a base de datos*/
 /*declarando variables*/
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
 /*funcion de la validacion de los registron en la base de datos*/
$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE  /*seleccionan usuarios*/
correo='$correo' and contrasena='$contrasena'"); /*y si usuarios contiene los registros coinsidentes con los ingresados en el login se manda al if validar*/
 /*si lavidar es mayor que 0 se envia a menu*/
if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $correo;
    header("location: ../menu.html");
    exit;
}else{ /*sino se manda la sigiente alerta*/
    echo '
    <script>
    alert("El usuario no existe, por favor verifique los datos");
    window.location = "../index.php";
    
    </script>
    ';
    exit;
}
?>