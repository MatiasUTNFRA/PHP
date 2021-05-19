<?php


$a = 1; $b = 5;

// imprimir "$a es mayor a $b" si $a > $b
if($a > $b){
    echo $a.' es mayor a '.$b.'<br />';
}

$a = 1; $b = 5;

/*
    si $a > $b 
        imprimir "$a es mayor a $b" 
    sino
        imprimir "$a no es mayor a $b"
*/
if($a > $b){
    echo $a.' es mayor a '.$b.'<br />';
}else{
    echo $a.' no es mayor a '.$b.'<br />';
}

/*
    $a > $b 
    si es verdadero "$a es mayor a $b" 
    sino y $a == $b imprimir "$a es igual $b"
    sino  imprimir "$a es menor a $b"
*/
if($a > $b){
    echo $a.' es mayor a '.$b.'<br />';
}else{
    if($a == $b){
        echo $a.' es igual a '.$b.'<br />';
    }else{
        echo $a.' no es mayor a '.$b.'<br />';
    }
}

if($a > $b){
    echo $a.' es mayor a '.$b.'<br />';
}elseif($a == $b){
    echo $a.' es igual a '.$b.'<br />';
}else{
    echo $a.' no es mayor a '.$b.'<br />';
}