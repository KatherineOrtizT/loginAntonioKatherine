<?php

$navegador = get_browser(null, true);
$fechaActual = date('d-m-Y');
$user_agent = $_SERVER['HTTP_USER_AGENT'];

function getBrowser($user_agent){
    if(strpos($user_agent, 'MSIE') !== FALSE)
    return 'Internet explorer';
    elseif(strpos($user_agent, 'Edge') !== FALSE) //Microsoft Edge
    return 'Microsoft Edge';
    elseif(strpos($user_agent, 'Trident') !== FALSE) //IE 11
        return 'Internet explorer';
    elseif(strpos($user_agent, 'Opera Mini') !== FALSE)
    return "Opera Mini";
    elseif(strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR') !== FALSE)
    return "Opera";
    elseif(strpos($user_agent, 'Firefox') !== FALSE)
    return 'Mozilla Firefox';
    elseif(strpos($user_agent, 'Chrome') !== FALSE)
    return 'Google Chrome';
    elseif(strpos($user_agent, 'Safari') !== FALSE)
    return "Safari";
    else
    return 'No hemos podido detectar su navegador';
}


$navegador = getBrowser($user_agent);
    






    setcookie("fecha",$fechaActual, time()+3060);
    setcookie("nomUsuario",$navegador, time()+3060);
    setcookie("nomUsuario",$navegador, time()+3060);
    setcookie("nomUsuario",$navegador, time()+3060);


  
?>