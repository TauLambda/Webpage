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
        <td>ID_usuario</td>
        <td>Nombre</td>
        <td>NumeroTarjeta</td>
        <td>Expiracion</td>
        <td>CVV</td>
        <td>ID_tarjeta</td>
      </tr>

      <?php
      $sql = "SELECT * FROM tarjeta";
      $result = mysqli_query($conn,$sql);
      while($mostrar=mysqli_fetch_array($result)){ ?>
        <tr>
          <td><?php echo $mostrar['ID_usuario'] ?></td>
          <td><?php echo $mostrar['Nombre'] ?></td>
          <td><?php echo $mostrar['NumeroTarjeta'] ?></td>
          <td><?php echo $mostrar['Expiracion'] ?></td>
          <td><?php echo $mostrar['CVV'] ?></td>
          <td><?php echo $mostrar['ID_tarjeta'] ?></td>
        </tr>

      <? } ?>


    </table>

  </body>
</html>