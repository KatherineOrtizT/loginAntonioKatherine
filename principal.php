<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>

<!-- es la barra de navegacion -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Perfil</a>
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
// imprime el resultado de la partida, si acertó o se le terminaron los intentos 
    session_start(); 
    if(isset($_SESSION["ResultadoPartida"])){
      echo "<div class='titulo'>" .$_SESSION["ResultadoPartida"]."</div>";
    }
?>

<!-- formluario para empezar el juego -->
<div id="contenedor">
        <div id="central">
            <div id="login">
                <div class="titulo">
                    <h3>Adivino Tu Edad</h3>
                </div>
                <form  action="juego.php" method="post">
                    <h3>¿Eres mayor de edad?</h3><br>   
                    <table><tr>
                      <td><label for="si">SI</label></td>
                      <td><input id="si" type="radio" name="radio" value="1" checked></td>
                    </tr>
                    <tr>
                      <td><label for="no">NO</label></td>
                      <td><input id="si" type="radio" name="radio" value="no"><br></td>
                    </tr></table>               
                    
                    <h3>¿En cuantas oportunidades?</h3><br>
                    <input id="si" type="number" name="preguntas"><br>
                   <input type="submit" name="NUMpreguntas" value="enviar">
                </form>
            </div>
        </div>
    </div>    
</body>
</html>