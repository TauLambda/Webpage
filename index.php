<?php 
$inc = include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page con efecto Parallax - MagtimusPro</title>

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>

        <div class="container__header">	

            <div class="logo">
                <img src="logo2.png" alt="">
            </div>

            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="index.php">Tablas</a></li>
                        <li><a href="Dashboard.html">Dashboard</a></li>
                    </ul>
                </nav>
            </div>
            <i class="fa-solid fa-bars" id="icon_menu"></i>

        </div>

    </header>

    <main>

      <h1>Tablas</h1>

        <div class="cover">

            <div class="text__information-cover">
                <p></p>
            </div>
        </div>

        <h2>ESTACION</h2>
        <div class="estacion">   
          <?php require 'estacion.php'?> 
        </div>

        <h2><br>CARRO</h2>
        <div class="carro">    
          <?php require 'carro.php'?> 
        </div>

        <h2><br>USUARIO</h2>
        <div class="usuario">    
          <?php require 'usuario.php'?> 
        </div>

        <h2><br>HISTORIAL</h2>
        <div class="historial">    
          <?php require 'historial.php'?> 
        </div>

        <h2><br>TARJETA</h2>
        <div class="tarjeta">    
          <?php require 'tarjeta.php'?> 
        </div>

      <div>
        <br>
        <br>
        <br>
        <br>
      </div>
              

    </main>

    <script src="script.js"></script>
</body>
</html>