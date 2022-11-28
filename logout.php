<?php
 setcookie("fecha",$fechaActual, time()-5);
 setcookie("navegador",$navegador, time()-5);
 setcookie("so",$SO, time()-5);
 setcookie("gps",$GPS, time()-5);

header("location:login.php");
?>