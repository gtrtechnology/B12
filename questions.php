<?php
$cadena='Develed';
$cadenainvertida = strrev($cadena);

echo "Cálculo de palíndromos\n";

if (strcmp($cadena, $cadenainvertida)==0){
    echo "La cadena ". $cadena . " es un palíndromo\n";
}
else{
    echo "La cadena ". $cadena ." no es un palíndromo";
}
?>