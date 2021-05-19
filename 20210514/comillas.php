<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$mundo = 'Mundo';

echo '1.- Hola '; echo $mundo; echo '<br />';
echo '2.- Hola '.$mundo.'<br />';
echo "3.- Hola ".$mundo.'<br />';
echo "4.- Hola ".$mundo."<br />";
echo "5.- Hola $mundo <br />";    

echo "6.- Hola \" $mundo <br />"; 
echo '7.- Hola \' $mundo <br />';   

$sql = '2.- Hola '.$mundo.'<br />';

?>