<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/c10.css">
    <title>empleados</title>
</head>
<!--script para la confirmacion de eliminacion de datos-->

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
                           <center> <li><a href="menu.html">Menu</a></li>
                            <li><a href="alta.php">Alta empleados</a></li>
                            <li><a href="eliminar.php">Modificaciones</a> </li>
                            <li><a href="index.php">Salir</a></li>



                            <h2>dependencias</h2></center>
                 <li><a href="obras.php">Obras publicas</a></li>
                 <li><a href="dependecias/desarrollo_social.php">Desarrollo social</a></li>
                 <li><a href="dependecias/juridico.php">Juridico</a></li>
                 <li><a href="dependecias/proteccion_civil.php">Proteccion civil</a></li>
                 <li><a href="dependecias/registro_civil.php">Registro civil</a></li>
                 <li><a href="dependecias/Seguridad.php">Seguridad</a></li>
                 <li><a href="dependecias/trancito.php">Trancito</a></li>
                        </ul>
                    </nav>
                </div>   
                </header>
                <div class="contentcontainer">
                
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
                <thead> <tr>
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
                    </tr></thead>
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
                </form></td> 
                
            </tr>
        <?php } ?>
                </table>
                </center>
                </section>
    
    <?php
  mysqli_close($conexion);
  ?>
</body>
<script src="js/buscador.js"></script><!--Conexion a javascript-->

</html>