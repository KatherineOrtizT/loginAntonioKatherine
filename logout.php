<?php
// elimina las cookies
 setcookie("fecha",$fechaActual, time()-5);
 setcookie("navegador",$navegador, time()-5);
 setcookie("so",$SO, time()-5);
 setcookie("gps",$GPS, time()-5);
//  eliminamos la session
 session_start();
 session_destroy();
 header("location:login.php");
?>