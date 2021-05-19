<?php

/*Ejercicio 4: Teniendo 2 números generar la tabla de multiplicar de uno por el otro.*/

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$a = 6;
$b = 4;

for($i=1 ; $i <= 10 ; $i++)
{
 echo $b.' * ('.$a.' * '.$i.'): ';  
 echo $b * ($a * $i).'<br />';
}
?>