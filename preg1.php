<?php

/*$color = array(4 => 'blanco', 6 => 'verde', 11=> 'roja');
Escriba un programa que muestre el primer elemento 
del array mostrado. El resultado esperado es: blanco */
$color = array( 
    4 => 'blanco',
    6 => 'verde',
  11=> 'roja');

  foreach ($color as $i => $colores) {
         if($colores  == 'blanco'){
             echo $i." ".$colores; 
         }
}
?>