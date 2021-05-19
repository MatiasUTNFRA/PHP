<?php

/*Ejercicio 1: Hacer un programa que teniendo 2 números calcule las siguientes operaciones
● Suma
● Resta
● División
● Multiplicación
● Potencia de uno con respecto al otro y viceversa*/

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '3 + 2 = '. 3+2;
echo '<br />';

echo '3 - 2 = '. 3-2;
echo '<br />';

echo '3 * 2 = '. 3*2;
echo '<br />';

echo '3 / 2 = '. 3/2;
echo '<br />';

echo 'Potencia de: 3, exponente: 2 = '.pow (3, 2);
echo '<br />';

echo 'Potencia de: 2, exponente: 3 = '.pow (2, 3);

?>