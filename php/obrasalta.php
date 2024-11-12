<?php
include("conexion.php");/*incluye la conexion a base de datos*/
$getmysql=new mysqlconex();/*declarar variable de la clase de conexion*/
$getconex=$getmysql->conex();/*llamar a la funcion de la variable*/

if(isset($_GET["pro"]))/*condicion que cuando se preciona el boton se ejecuta todo*/{
   /*declaracion de variables*/
  $nombre=$_GET['nombre'];
  $edad=$_GET['edad'];
  $curp=$_GET['CURP'];
  $num_tel=$_GET['num_tel'];
  $nacionalidad=$_GET['pago'];
  $genero=$_GET['banco'];
  $direccion=$_GET['dirreccion'];
  $profesion=$_GET['Profesión'];
  $no_empleado=$_GET['nom'];
 /*crear variable para la incercion de datos*/  /*los signos de interrogacion son por proteccion para evitar inyeccion de codigo*/
 $query="INSERT INTO  obras_publicas_nomina (hora_entrada,hora_salida,sueldo_quincenal,fecha_pago,forma_pago,tipo_banco,	dias_laborales,fecha_ingreso,no_empleado) VALUES (?,?,?,?,?,?,?,?,?)";
     /*preparar sentencia, ingresando el getconex y query*/
    $sentencia=mysqli_prepare($getconex,$query);
     /*ingresar parametros con la funcion mysqli_stmt_bind_param*/ /*ingresamos sentencia e identificar los tipos de datos (strean=s INT=i Dogle=D*/
     mysqli_stmt_bind_param($sentencia,"sssssssss",$nombre,$edad,$curp,$num_tel,$nacionalidad,$genero,$direccion,$profesion,$no_empleado);
    /*realizar ejecucion*/
    mysqli_stmt_execute($sentencia);
    /*declarar variable afectados con la funcion mysqli stmt affected rows*/
    $afectado=mysqli_stmt_affected_rows($sentencia);
    /*si afectados es igual a 1 se despliega la siguiente alerta*/
    if($afectado==1){
        echo"<script> alert('EL empleado [$no_empleado] se agrago correctamente'); location.href='../obras.php'; </script>";
    }else{/*si no se despliega la siguiente alerta*/
      echo"<script> alert('EL empleado [$no_empleado] no se agrago correctamente'); location.href='../obras.php'; </script>";
    }
    mysqli_stmt_close($sentencia);
    mysqli_close($getconex);
}
?>