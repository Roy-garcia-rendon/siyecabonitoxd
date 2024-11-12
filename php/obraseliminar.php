<?php 
include("conexion.php");/*Incluye la base de datos (archivo conexion.php)*/
$getmysql=new mysqlconex();/*Declara la variable de la clase mysqlconex*/
$getconex=$getmysql->conex();/*llamar a la funcion de la variable*/

if(isset($_GET["eliminar"]))/*la accion se realisara siempre y cuando se precione el boton*/{
    /*declaracion de variables*/
    $no_empleado=$_GET['no_empleado'];
    $nombre=$_GET['nombre'];
    $edad=$_GET['edad'];
    $curp=$_GET['CURP'];
    $num_tel=$_GET['num_tel'];
    $nacionalidad=$_GET['pago'];
    $genero=$_GET['banco'];
    $direccion=$_GET['dirreccion'];
    $profesion=$_GET['Profesión'];
/*crear variable para la eliminacion de datos*/  
   $query ="DELETE FROM  obras_publicas_nomina WHERE no_empleado=?";
   /*preparar sentencia, ingresando el getconex y query*/
   $sentencia = mysqli_prepare($getconex,$query);
   /*ingresar parametros con la funcion mysqli_stmt_bind_param*/ /*ingresamos sentencia e identificar los tipos de datos (strean=s INT=i Dogle=D*/
   mysqli_stmt_bind_param($sentencia,"i",$no_empleado);
   /*realizar ejecucion*/
   mysqli_stmt_execute($sentencia);
   /*declarar variable afectado con la funcion mysqli stmt affected rows*/
   $afectado=mysqli_stmt_affected_rows($sentencia);
   if($afectado==1){/*si afectados es igual a 1 se despliega la siguiente alerta*/
    echo"<script> alert('EL empleado [$no_empleado]  se elimino correctamente'); location.href='../obras.php'; </script>";
   }else{/*sino se despliega la siguiente alerta*/
    echo"<script> alert('EL empleado [$no_empleado] no se elimino correctamente'); location.href='../obras.php'; </script>";
   }
}
/*cierre de la base*/
mysqli_stmt_close($sentencia);
mysqli_close($getconex);
?>

