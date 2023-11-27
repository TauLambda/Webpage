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
        <td>ID_carro</td>
        <td>Modelo</td>
        <td>Placa</td>
        <td>ID_usuario</td>
      </tr>

      <?php
      $sql = "SELECT * FROM carro";
      $result = mysqli_query($conn,$sql);
      while($mostrar=mysqli_fetch_array($result)){ ?>
        <tr>
          <td><?php echo $mostrar['ID_carro'] ?></td>
          <td><?php echo $mostrar['Modelo'] ?></td>
          <td><?php echo $mostrar['Placa'] ?></td>
          <td><?php echo $mostrar['ID_usuario'] ?></td>
        </tr>

      <? } ?>


    </table>

  </body>
</html>