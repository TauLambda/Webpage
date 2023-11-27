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
        <td>ID_estacion</td>
        <td>NombreEstacion</td>
      </tr>

      <?php
      $sql = "SELECT * FROM estacion";
      $result = mysqli_query($conn,$sql);
      while($mostrar=mysqli_fetch_array($result)){ ?>
        <tr>
          <td><?php echo $mostrar['ID_estacion'] ?></td>
          <td><?php echo $mostrar['NombreEstacion'] ?></td>
        </tr>

      <? } ?>


    </table>

  </body>
</html>
