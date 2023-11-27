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
        <td>Contraseña</td>
        <td>Correo</td>
        <td>Teléfono</td>
        <td>TipoUsuario</td>
        <td>Cashback</td>
      </tr>

      <?php
      $sql = "SELECT * FROM usuario";
      $result = mysqli_query($conn,$sql);
      while($mostrar=mysqli_fetch_array($result)){ ?>
        <tr>
          <td><?php echo $mostrar['ID_usuario'] ?></td>
          <td><?php echo $mostrar['Nombre'] ?></td>
          <td><?php echo $mostrar['Contrasena'] ?></td>
          <td><?php echo $mostrar['Correo'] ?></td>
          <td><?php echo $mostrar['Telefono'] ?></td>
          <td><?php echo $mostrar['TipoUsuario'] ?></td>
          <td><?php echo $mostrar['Cashback'] ?></td>
        </tr>

      <? } ?>


    </table>

  </body>
</html>
