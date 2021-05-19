<?php

/*Ejercicio 2: Hacer el mismo programa anterior, pero que en base al valor de una variable se
seleccione la operación a realizar. Por ejemplo para $a = 10; $b = 5; $operacion = ‘suma’ el resultado
es 15*/

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$a = 5;
$b = 4;

echo $a.' + '.$b. ' = '.$a + $b;
echo '<br />';

echo $a.' - '.$b. ' = '.$a - $b;
echo '<br />';

echo $a.' * '.$b. ' = '.$a * $b;
echo '<br />';

echo $a.' / '.$b. ' = '.$a / $b;
echo '<br />';

echo 'Potencia de: '.$a.', exponente: '.$b.' = '.pow ($a, $b);
echo '<br />';

echo 'Potencia de: '.$b.', exponente: '.$a.' = '.pow ($b, $a);
echo '<br />';

?>