<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
    <!-- depende del boton del usuario te da mas o menos numeros -->
    <?php
    session_start();  
    $rondas=0;
    if(isset($_POST["NUMpreguntas"])){
        $rondas=$_POST["preguntas"];
        $_SESSION["oportunidades"]=$rondas;
        if($_POST["radio"]=="no"){
            $_SESSION["ResultadoPartida"]="Tienes que ser mayor de edad";
            header("location:principal.php");
        }
    }else{
        $_SESSION["oportunidades"]--;
        if($_SESSION["oportunidades"]==0){
            $_SESSION["ResultadoPartida"]="Fin de los intentos ¿Quieres Jugar otra VEZ?";
            header("location:principal.php");
        }
    }

    if(isset($_POST["mayor"])){
        $base=$_POST["base"];
        $aleatorio=mt_rand($base,99);
    }
    if(isset($_POST["menor"])){
        $base=$_POST["base"];
        $aleatorio=mt_rand(18,$base);
    }
    if(isset($_POST["acertaste"])){
        
        $_SESSION["ResultadoPartida"]="Muy bien, Acertaste ¿Quieres Jugar otra VEZ?";
     header("location:principal.php");
    }
    ?>
<!-- guardamos las oportunidades en una session si son más de 0 entra en el if -->
   <?php if($_SESSION["oportunidades"]!=0):?>
   
   <!-- formulario del juego  -->
    <div id="contenedor">
        <div id="central">
            <div id="login">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    <div class="titulo">   
                        <h2><?php echo $aleatorio?></h2>
                    </div>
                    <input type="hidden" name="base" value="<?php echo $aleatorio?>">
                    <input type="submit" name="mayor" value="mayor" >
                    <input type="submit" name="menor" value="menor" >
                    <input type="submit" name="acertaste" value="acertaste">
                </form>
            </div>
        </div>
    </div>
    <?php endif;?>
</body>
</html>