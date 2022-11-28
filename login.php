<!doctype html>
<html lang="es">   
    <head>  
        <meta charset="utf-8">
        <title> Formulario de Acceso </title>            
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <meta name="author" content="Videojuegos & Desarrollo">
        <meta name="description" content="Muestra de un formulario de acceso en HTML y CSS">
        <meta name="keywords" content="Formulario Acceso, Formulario de LogIn">       
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">      
        <link rel="stylesheet" href="login.css"> 
    </head>
    <body>
        <div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
                        Bienvenido
                    </div>
                    <!-- si estan creadas las cookies las imprime -->
                    <?php
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
        <!-- formulario de login -->
                    <form action="cookies.php" id="loginform" method="post">
                        <input type="text" name="usuario" placeholder="Usuario" required>
                        <input type="email" placeholder="correo" name="correo"  pattern=.+@educa.madrid.org required>
                        <input type="submit" name="enviar" value="LOGIN">                        
                    </form>
                    
                </div>
                
            </div>
        </div>
            
    </body>
</html>