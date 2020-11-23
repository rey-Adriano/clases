<?php

$numero; 
 $divisor=1; 
$divisores =0 ; 
    
    $numero =  readline("Ingrese su nombre: ");

    do{
        if($numero % $divisor == 0){
            $divisores++; 
        }
        $divisor++; 
    }while($divisor<=$numero); 
    if ($divisores == 2) {
      echo "el numero " .$numero."es primo";
        
    }
    else{
        echo "el numero " .$numero." no es primo";
    }

    
?>