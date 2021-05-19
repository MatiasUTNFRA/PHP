<?php


// Operadores Aritméticos

$a=10;$b=6;

//suma +
echo $a+$b;
echo '<br />';
//resta -
echo $a-$b;
echo '<br />';
//divición
echo $a/$b;
echo '<br />';
//multiplicación
echo $a*$b;
echo '<br />';
//concatenación
echo $a.$b;
echo '<br />';
//módulo - resto
echo $a%$b;
echo '<br />';

/*
   $a = $a + $b; --> $a += $b;
   $a = $a - $b; --> $a -= $b;
   $a = $a * $b; --> $a *= $b;
   $a = $a / $b; --> $a /= $b;
   $a = $a % $b; --> $a %= $b;

   $a = $a + 1; --> $a+=1; --> $a++  o ++$a
   $a = $a - 1; --> $a-=1; --> $a--  o --$a
*/

echo $a++;
echo '<br />';
echo $a;
echo '<br />';
echo ++$a;
echo '<br />';
echo $a;
?>
