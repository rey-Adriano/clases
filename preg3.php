<?php

/*Escriba una clase Calculadora que acepte dos valores como argumentos,
 y pueda sumarlos, restarlos, multiplicarlos, o dividirlos según requerimiento.
 • Por ejemplo: $mycalc = new MiCalculadora(12, 6); echo $mycalc- >sumar(); 
// Muestra 18 echo $mycalc- >multiplicar(); // Muestra 72 */



$a = 2; 
$b= 4; 
class calculadora{ 
    public $suma; 
    public $resta; 
    public $multiplicacion; 
    public $division;    
            
     function suma( $a , $b)
    {
        echo $a + $b;    
    }
     function resta( $a , $b)
    {
        echo $a - $b; 
    }
function multiplacion( $a , $b)
    {
        echo $a * $b; 
    }
function division( $a , $b)
    {
        echo $a / $b; 
    }


}
echo "la suma es: " .($a +$b)."<br>"; 
echo "la suma es: " .($a -$b)."<br>"; 
echo "la suma es: " .($a *$b)."<br>"; 
echo "la suma es: " .($a /$b)."<br>"; 
?>