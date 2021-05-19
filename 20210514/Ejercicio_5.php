<?php

/*Ejercicio 5: Teniendo un número calcular el factorial de dicho número. Para calcular el
factorial se multiplican cada cada valor entre 1 y el ingresado, por ejemplo 4! = 1*2*3*4=24*/

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aux = 4;
$factorial;
$a = 4;

If ($aux < 0)
	{
		$factorial = 0;
	}
	else
	{
		$factorial = 1;

		while($aux > 1)
		{
			$factorial *= $aux;
			$aux--;
		}
	}
    echo $a.'! = '.$factorial;
?>