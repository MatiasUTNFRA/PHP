<?php


// Operadores de Comparación

$a = 10;

$b = 5;

// Igualdad
echo $a == $b;  // --> FALSE => NULL => 0
echo '<br />';

// Operador Ternario
echo ($a == $b) ?'TRUE':'FALSE' ;  // --> FALSE => NULL => 0
echo '<br />';

// Distintos
echo $a != $b;  // --> TRUE => 1 => != 0 o != NULL
echo '<br />';

// $a Mayor que $b 
echo ($a > $b) ?'TRUE':'FALSE' ;  // --> FALSE => NULL => 0
echo '<br />';

// $a Mayor o igual  $b 
echo ($a >= $b) ?'TRUE':'FALSE' ;  // --> FALSE => NULL => 0
echo '<br />';

// $a Menor que $b 
echo ($a < $b) ?'TRUE':'FALSE' ;  // --> FALSE => NULL => 0
echo '<br />';

// $a Menor o igual  $b 
echo ($a <= $b) ?'TRUE':'FALSE' ;  // --> FALSE => NULL => 0
echo '<br />';


// Continuación Igualdad
$a = 10; $b='10';

echo ($a == $b) ?'TRUE':'FALSE' ;   //Compara valores sin importar el tipo
echo '<br />';
echo ($a === $b) ?'TRUE':'FALSE' ;   //Compara valores y tipo

echo '<br />';
echo ($a != $b) ?'TRUE':'FALSE' ;   //Compara valores sin importar el tipo
echo '<br />';
echo ($a !== $b) ?'TRUE':'FALSE' ;   //Compara valores y tipo
?>
