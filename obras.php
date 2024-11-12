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
                            <li><a href="menu.html">Menu</a></li>
                            <li><a href="empleados.php">Empleados</a></li>
                            <li><a href="dependecias/altaobras.php">Alta empleados</a></li>
                            <li><a href="dependecias/modobras.php">Modificaciones</a> </li>
                            <li><a href="index.php">Salir</a></li>
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
                <thead>
                    <tr>
                    <th>hora_entrada</th>
                        <th>hora_salida</th>
                        <th>sueldo_quincenal</th>
                        <th>fecha_pago</th>
                        <th>forma_pago</th>
                        <th>tipo_banco</th>
                        <th>dias_laborales</th>
                        <th>fecha_ingreso</th>
                        <th>identificador_nomina</th>
                        <th>no_empleado</th>
                    </tr>
</thead>
                    <?php
                    /*conección con la base de datos siyeca*/
       $conexion=mysqli_connect("localhost","root","","siyeca");
       /*funcion a realisar, mostrar los registros de la base de datos*/
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