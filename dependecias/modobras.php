<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/c7.css">
    <title>empleados</title>
</head>
<script>
    function confirmacion(){
        var respuesta=confirm("¿Desea realmente borrar el registro?");
        if(respuesta == true){
            return true;
        }else{
            return false;
        }
    }
</script>
<body>
<style>body{
    background-image: url(../mediaa/San\ Juan.jpg);
        background-size: cover;
        background-attachment: fixed;}
        </style>
        <main id="principal">
            <header>
                <div class="Menu container">
                    <a href="#" class="logo">AYUNTAMIENTO</a>
                        <ing src="media/Menu.png" class="Menu-icono" alt="">
                    </label>
                    <nav class="navbar">
                        <ul>
                            <li><a href="../menu.html">Menu</a></li>
                            <li><a href="../empleados.php">Empleados</a></li>
                            <li><a href="altaobras.php">Alta empleados</a></li>
                            <li><a href="../index.php">Salir</a></li>
                        </ul>
                    </nav>
                </div>   
                </header>
                <div class="contentcontainer">
                 <center><h2>SISTEMA DE ATENCION SIYECA</h2></center>
                </div>
<center>
<table>
                    <tr>
                        <td>hora_entrada</td>
                        <td>hora_salida</td>
                        <td>sueldo_quincenal</td>
                        <td>fecha_pago</td>
                        <td>forma_pago</td>
                        <td>tipo_banco</td>
                        <td>dias_laborales</td>
                        <td>fecha_ingreso</td>
                        <td>identificador_nomina</td>
                        <td>no_empleado</td>
                        <td>Eliminar</td>
                       
                    </tr>
                    <?php
                     /*coneccion a  la base de datos siyeca nomina obras publicas*/
       $conexion=mysqli_connect("localhost","root","","siyeca");
        /*Funcion a realizar, mostrar los registros de la tabla obras publicas*/
       $alumnos= "select * from obras_publicas_nomina"
?>
         <?php
        $resultado=mysqli_query($conexion,$alumnos);
        while ($row=mysqli_fetch_assoc($resultado))
        {
            ?>
            <tr>
        <!--registros-->
                <td> <?php echo $row["hora_entrada"];?> </td>
                <td> <?php echo $row["hora_salida"];?> </td>
                <td> <?php echo $row["sueldo_quincenal"];?> </td>
                <td> <?php echo $row["fecha_pago"];?> </td>
                <td> <?php echo $row["forma_pago"];?> </td>
                <td> <?php echo $row["tipo_banco"];?> </td>
                <td> <?php echo $row["dias_laborales"];?> </td>
                <td> <?php echo $row["fecha_ingreso"];?> </td>
                <td> <?php echo $row["identificador_nomina"];?> </td>
                <td> <?php echo $row["no_empleado"];?> </td>
        <!--Formulario/Boton de eliminar registros-->
                <td> <form action='../php/obraseliminar.php' method='GET'>
                <input type="hidden" name="no_empleado"  value='<?php echo $row["no_empleado"];?>'>
                <input type="hidden" name="nombre"  value='<?php echo $row["nombre"];?>'>
                <input type="hidden" name="edad"  value='<?php echo $row["edad"];?>'>
                <input type="hidden" name="curp"  value='<?php echo $row["curp"];?>'>
                <input type="hidden" name="num_tel"  value='<?php echo $row["num_tel"];?>'>
                <input type="hidden" name="nacionalidad"  value='<?php echo $row["nacionalidad"];?>'>
                <input type="hidden" name="genero"  value='<?php echo $row["genero"];?>'>
                <input type="hidden" name="dirreccion"  value='<?php echo $row["dirreccion"];?>'>
                <input type="hidden" name="profesion"  value='<?php echo $row["profesion"];?>'>
                <input type="hidden" name="ocupacion"  value='<?php echo $row["ocupacion"] ?>'>
                <input type="hidden" name="tipo_de_sangre"  value='<?php echo $row["tipo_de_sangre"];?>'>
                <input type="hidden" name="rfc"  value='<?php echo $row["rfc"];?>'>
                <input type="hidden" name="Estado_civil"  value='<?php echo $row["estado_civil"];?>'>
                <input type="hidden" name="estado_civil"  value='<?php echo $row["tel_emergencia"];?>'>
                <input type="hidden" name="dependencia"  value='<?php echo $row["dependencia"];?>'>
                <button class="button" name="eliminar"  value='eliminar' onclick='return confirmacion()'>
  <svg viewBox="0 0 448 512" class="svgIcon"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path></svg>
</button>
                </form></td> 
                
            
            </tr>
        <?php } ?>
                </table>
                </center>

    
    <?php
     mysqli_free_result($resultado);
  mysqli_close($conexion);
  ?>
</body>
</html>