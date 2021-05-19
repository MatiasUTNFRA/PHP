<?php


// Operadores de Lógicos

/*  
    OR o || -> si el primero es true, no procesa el segundo
    | -> Operador Aritmético Binario OR -> ejecuta ambos lados, aunque el primero sea verdadero
    comparación OR comparación  => Resultado
        FALSE        FALSE            FALSE
        FALSE        TRUE             TRUE
        TRUE         FALSE            TRUE
        TRUE         TURE             TRUE
*/

$a = 10; $b = 5; $c = 3;

echo ($b != $c OR $a == $b ) ?'TRUE':'FALSE' ;   //Compara valores y tipo
echo '<br />';


 
/*  
    AND o && -> si el primero es false, no procesa el segundo
    & -> Operador Aritmético Binario AND -> ejecuta ambos lados, aunque el primero sea falso

    comparación OR comparación  => Resultado
        FALSE        FALSE            FALSE
        FALSE        TRUE             FALSE
        TRUE         FALSE            FALSE
        TRUE         TURE             TRUE
*/

echo ($b != $c AND $a == $b ) ?'TRUE':'FALSE' ;   //Compara valores y tipo
echo '<br />';


/* NOT  "!"

    ! comparacion  => Resultado
         FALSE          TRUE
         TRUE           FALSE
*/

echo !( $a == $b ) ?'TRUE':'FALSE' ;   //Compara valores y tipo
echo '<br />';

// USOS

echo ($b != $c OR $a == $b OR $a == $c ) ?'TRUE':'FALSE' ;   //Compara valores y tipo
echo '<br />';
echo ($b != $c OR ($a == $b AND $a == $c) ) ?'TRUE':'FALSE' ;   //Compara valores y tipo
echo '<br />';

?>
