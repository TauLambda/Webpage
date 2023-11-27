<html>
<head>
  <title>PHP Test</title>
</head>
<body> 
  <?php 
    $servername = "database-1.cf2myev5n5ny.us-east-1.rds.amazonaws.com";
    $username = "admin";
    $password = "PruebasProyecto?,456";
    $database = "OXXOGAS";

    $conn = new mysqli($servername, $username, $password, $database);
  ?>

</body>
</html>
