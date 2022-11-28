<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="datos.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="principal.php">Perfil</a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="principal.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="VerCookies.php">Ver Cookies</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Cerrar Sesión</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Usuario.php">Datos Usuario</a>
      </li>
    </ul>
  </div>
</nav>
    <?php

    // imprime las cookies
        if(isset($_COOKIE['fecha'])){
            echo "<h1>". $_COOKIE['fecha']."<br></h1>";
        }

        if(isset($_COOKIE['navegador'])){
            echo "<h1>".$_COOKIE['navegador']."<br></h1>";
        }

        if(isset($_COOKIE['so'])){
            echo "<h1>". $_COOKIE['so']."<br></h1>";
        }

        if(isset($_COOKIE['gps'])){
            echo "<h1>". $_COOKIE['gps']."<br></h1>";
        }

    ?>
</body>
</html>