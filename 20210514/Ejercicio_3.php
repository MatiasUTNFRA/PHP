<?php

/*Ejercicio 3: Hacer un programa que teniendo 2 números indique
A. El promedio de todos los números
B. Cual es mayor? Cual es menor? O si son iguales
C. Detectar cual es par y cual es impar
D. Indicar si alguno es primo. (divisible solo por la unidad y el mismo)*/

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$a = 10;
$b = 5;
$promedio;
$i;
$contadorDivisores = 0;

$promedio = ($a + $b) / 2;

echo 'El promedio es de: '.$promedio.'<br />';

if ($a > $b)
{
    echo 'El mayor entre ellos es: '.$a.'<br />';
    echo 'El menor entre ellos es: '.$b.'<br />';
}
else
{
    if ($a < $b)
    {
        echo 'El mayor entre ellos es: '.$b.'<br />';
        echo 'El mayor entre ellos es: '.$a.'<br />';
    }
    else
    {
        echo 'Ambos numeros son iguales <br />';
    }
}
if ($a % 2 == 0 )
{
    echo $a.' es par <br />';
}
else
{
    echo $a.' es impar <br />';
}
if ($b % 2 == 0 )
{
    echo $b.' es par <br />';
}
else
{
    echo $b.' es impar <br />';
}
for ($i = 1 ; $i <= $a ; $i++)
	{
		if ($a % $i == 0)
		{	
			$contadorDivisores++;
		}
	}
	if ($contadorDivisores == 2)
	{
		echo $a.' es primo <br />';
	}
	else
	{
		echo $a.' no es primo <br />';
	}
$contadorDivisores = 0;

for ($i = 1 ; $i <= $b ; $i++)
	{
		if ($b % $i == 0)
		{	
			$contadorDivisores++;
		}
	}
	if ($contadorDivisores == 2)
	{
		echo $b.' es primo <br />';
	}
	else
	{
		echo $b.' no es primo <br />';
	}
?>