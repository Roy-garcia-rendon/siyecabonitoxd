<?php 
include("conexion.php"); /*Incluye la base de datos (archivo conexion.php)*/
$getmysql=new mysqlconex();/*Declara la variable de la clase mysqlconex*/
$getconex=$getmysql->conex();/*llamar a la funcion de la variable*/

if(isset($_GET["eliminar" /*la accion se realisara siempre y cuando se precione el boton*/])){
   /*declaracion de variables*/
  $no_empleado=$_GET['no_empleado'];
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
   /*crear variable para la eliminacion de datos*/  
   $query ="DELETE FROM alta_empleados WHERE no_empleado=?";
   /*preparar sentencia, ingresando el getconex y query*/
   $sentencia = mysqli_prepare($getconex,$query);
  /*ingresar parametros con la funcion mysqli_stmt_bind_param*/ /*ingresamos sentencia e identificar los tipos de datos (strean=s INT=i Dogle=D*/
   mysqli_stmt_bind_param($sentencia,"i",$no_empleado);
    /*realizar ejecucion*/
   mysqli_stmt_execute($sentencia);
   /*declarar variable afectado con la funcion mysqli stmt affected rows*/
   $afectado=mysqli_stmt_affected_rows($sentencia);
   if($afectado==1){/*si afectados es igual a 1 se despliega la siguiente alerta*/
    echo"<script> alert('EL empleado [$no_empleado,$nombre]  se elimino correctamente'); location.href='../eliminar.php'; </script>";
   }else{/*sino se despliega la siguiente alerta*/
    echo"<script> alert('EL empleado [$no_empleado,$nombre] no se elimino correctamente'); location.href='../alta.php'; </script>";
   }
}
/*cierre de la base*/
mysqli_stmt_close($sentencia);
mysqli_close($getconex);
?>