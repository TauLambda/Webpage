<?php 
$inc = include("connect.php");
?>

<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body> 

    <br>

    <table>

      <tr>
        <td>ID_historial</td>
        <td>Carga</td>
        <td>Monto</td>
        <td>TipoGas</td>
        <td>MetodoPago</td>
        <td>FechaTransaccion</td>
        <td>Estatus</td>
        <td>ID_carro</td>
        <td>ID_usuario</td>
        <td>Bomba</td>
        <td>ID_estacion</td>
        
      </tr>

      <?php
      $sql = "SELECT * FROM historial";
      $result = mysqli_query($conn,$sql);
      while($mostrar=mysqli_fetch_array($result)){ ?>
        <tr>
          <td><?php echo $mostrar['ID_historial'] ?></td>
          <td><?php echo $mostrar['Carga'] ?></td>
          <td><?php echo $mostrar['Monto'] ?></td>
          <td><?php echo $mostrar['TipoGas'] ?></td>
          <td><?php echo $mostrar['MetodoPago'] ?></td>
          <td><?php echo $mostrar['FechaTransaccion'] ?></td>
          <td><?php echo $mostrar['Estatus'] ?></td>
          <td><?php echo $mostrar['ID_carro'] ?></td>
          <td><?php echo $mostrar['ID_usuario'] ?></td>
          <td><?php echo $mostrar['Bomba'] ?></td>
          <td><?php echo $mostrar['ID_estacion'] ?></td>
        </tr>

      <? } ?>


    </table>

  </body>
</html>