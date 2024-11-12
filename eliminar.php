<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/c10.css">
    <title>empleados</title>
</head>
<!--script para la confirmacion de eliminacion de datos-->
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
    background-image: url(mediaa/San\ Juan.jpg);
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
                            <li><a href="menu.html">Menu</a></li>
                            <li><a href="empleados.php">Empleados</a></li>
                            <li><a href="alta.php">Alta empleados</a></li>
                            <li><a href="eliminar.php">Modificaciones</a> </li>
                            <li><a href="index.php">Salir</a></li>
                        </ul>
                    </nav>
                </div>   
                </header>
                <div class="contentcontainer">
                 <center></center>
                </div>
<center><main class="table" id="customers_table">
        <section class="table__header">
        <h2>SISTEMA DE ATENCION SIYECA</h2>
            <div class="input-group" >
            <div class="container-fluid">
  <form class="d-flex"><!--Formulario para la busqueda a tiempo real-->
      <input class="input light-table-filter" data-table="table_id" type="search" 
      placeholder="Buscar un registro">
      <hr>
      </form>
  </div>
            </div>
        </section>
        <section class="table__body">
                <table class="table table-striped table-dark table_id ">
                    <tr>
                    <th>no_empleado</th>
                        <th>nombre</th>
                        <th>edad</th>
                        <th>CURP</th>
                        <th>num_tel</th>
                        <th>nacionalidad</th>
                        <th>genero</th>
                        <th>dirreccion</th>
                        <th>profesion</th>
                        <th>ocupacion</th>
                        <th>tipo de sangre</th>
                        <th>RFC</th>
                        <th>estado civil</th>
                        <th>tel emergencia</th>
                        <th>dependencia</th>
                        <th>Eliminar</th>
                        <th>Editar</th>
                    </tr>
                    <?php
                    /*conección con la base de datos siyeca*/
       $conexion=mysqli_connect("localhost","root","","siyeca");
       /*funcion a realisar, mostrar los registros de la base de datos*/
       $alumnos= "select * from alta_empleados"
?>
         <?php
        $resultado=mysqli_query($conexion,$alumnos);
        while ($row=mysqli_fetch_assoc($resultado))
        {
            ?>
            <tr>
        <!--registros-->
                <td> <?php echo $row["no_empleado"];?> </td>
                <td> <?php echo $row["nombre"];?> </td>
                <td> <?php echo $row["edad"];?> </td>
                <td> <?php echo $row["curp"];?> </td>
                <td> <?php echo $row["num_tel"];?> </td>
                <td> <?php echo $row["nacionalidad"];?> </td>
                <td> <?php echo $row["genero"];?> </td>
                <td> <?php echo $row["dirreccion"];?> </td>
                <td> <?php echo $row["profesion"];?> </td>
                <td> <?php echo $row["ocupacion"];?> </td>
                <td> <?php echo $row["tipo_de_sangre"];?> </td>
                <td> <?php echo $row["rfc"];?> </td>
                <td> <?php echo $row["estado_civil"];?> </td>
                <td> <?php echo $row["tel_emergencia"];?> </td>
                <td> <?php echo $row["dependencia"];?> </td>
        <!--fromulario/boton para eliminar registros-->
                <td> <form action='php/elimina.php' method='GET'>
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
</button><!--onclick altera las funciones predeterminadas del navegador para que cuando se
                precione el boton de eliminar este haga primero la accion de return en el cual si da un true se ejecute finalmente la funcion de eliminar-->
                </form></td> 
                
        <!--fromulario/boton de editar registros-->
                <td> <form action='php/editar.php' method='GET'>
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
                <input type="hidden" name="estado_civil"  value='<?php echo $row["estado_civil"];?>'>
                <input type="hidden" name="tel_emergencia"  value='<?php echo $row["tel_emergencia"];?>'>
                <input type="hidden" name="dependencia"  value='<?php echo $row["dependencia"];?>'> 
   <button class="Btn">Editar
      <svg class="svg" viewBox="0 0 512 512">
        <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path></svg>
    </button>


                </form></td> 
                
            </tr>
        <?php } ?>
                </table>
                </center>
                </section>
    
    <?php
     mysqli_free_result($resultado);
  mysqli_close($conexion);
  ?>
</body>
<script src="js/buscador.js"></script><!--Conexion a javascript-->

</html>