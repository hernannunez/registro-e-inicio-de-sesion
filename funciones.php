<?php

function signin($u,$e,$c) {
    $validoUs = "Hernán";
    $emailValido = "hernannunez@gmail.com";
    $passValida = md5("hernan02");
    if ($u == $validoUs && $e == $emailValido && $c == $passValida) {
        setcookie("usuario",$validoUs);
        echo "Registro Exitoso";
    
    }
}

?>
