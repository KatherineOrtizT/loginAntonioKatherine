<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
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
        <a class="nav-link disabled" href="Usuario.php">Datos de Usuario</a>
      </li>
    </ul>
  </div>
</nav>
    <?php
    
    // echo $_SESSION["nombreUsuario"]."<br>";
    // echo $_SESSION['nombreUsuario']."<br>";
    
        if(isset($_COOKIE['fecha'])){
            echo $_COOKIE['fecha']."<br>";
        }

        if(isset($_COOKIE['navegador'])){
            echo $_COOKIE['navegador']."<br>";
        }

        if(isset($_COOKIE['so'])){
            echo $_COOKIE['so']."<br>";
        }

        if(isset($_COOKIE['gps'])){
            echo $_COOKIE['gps']."<br>";
        }

    ?>
</body>
</html>