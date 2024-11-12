<?php
include("conexion.php"); /*incluye la conexion a base de datos*/
$getmysql=new mysqlconex(); /*declarar variable de la clase de conexion*/
$getconex=$getmysql->conex(); /*llamar a la funcion de la variable*/

if(isset($_GET["pro"])) /*condicion que cuando se preciona el boton se ejecuta todo*/{
   /*declaracion de variables*/
  $nombre=$_GET['nombre'];
  $edad=$_GET['edad'];
  $curp=$_GET['CURP'];
  $num_tel=$_GET['num_tel'];
  $nacionalidad=$_GET['nacionalidad'];
  $genero=$_GET['Genero'];
  $direccion=$_GET['dirreccion'];
  $profesion=$_GET['Profesión'];
  $ocupacion=$_GET['Ocupación'];
  $tipo_de_sangre=$_GET['Tipo_de_sangre'];
  $rfc=$_GET['RFC'];
  $estado_civil=$_GET['Estado_civil'];
  $tel_emergencia=$_GET['tel_emergencia'];
  $dependencia=$_GET['dependencia'];

   /*crear variable para la incercion de datos*/  /*los signos de interrogacion son por proteccion para evitar inyeccion de codigo*/
    $query="INSERT INTO alta_empleados (nombre,edad,curp,num_tel,nacionalidad,genero,dirreccion,profesion,ocupacion,tipo_de_sangre,rfc,estado_civil,tel_emergencia,dependencia) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
 /*preparar sentencia, ingresando el getconex y query*/
    $sentencia=mysqli_prepare($getconex,$query);
    /*ingresar parametros con la funcion mysqli_stmt_bind_param*/ /*ingresamos sentencia e identificar los tipos de datos (strean=s INT=i Dogle=D*/
    mysqli_stmt_bind_param($sentencia,"ssssssssssssss",$nombre,$edad,$curp,$num_tel,$nacionalidad,$genero,$direccion,$profesion,$ocupacion,$tipo_de_sangre,$rfc,$estado_civil,$tel_emergencia,$dependencia);
    /*realizar ejecucion*/
    mysqli_stmt_execute($sentencia);
    /*declarar variable afectados con la funcion mysqli stmt affected rows*/
    $afectado=mysqli_stmt_affected_rows($sentencia);
    if($afectado==1){/*si afectados es igual a 1 se despliega la siguiente alerta*/
        echo"<script> alert('EL empleado [$nombre] se agrago correctamente'); location.href='../alta.php'; </script>";/*aqui te regresa a la pagina de alta con location*/
    }else{/*sino se despliega esta otra alerta*/
      echo"<script> alert('EL empleado [$nombre] no se agrago correctamente'); location.href='../alta.php'; </script>";
    }
    /*cierre de la base de datos*/
    mysqli_stmt_close($sentencia);
    mysqli_close($getconex);
}
?>