<?php 
/*
  for(inicialización;condición;iteración)

  inicialización
        - se hace 1 sola vez al inicio del lado FOR
        - puede tener tantas operaciones como quiera separadas con ,
           for($i=0, $fp = fopen(..), $j = 0 ;condición;iteración)
  condición
        - TRUE -> vuelve a ejecutar todo lo que este entre llaves
        - FALSE -> termina
   iteración
        - se hace en cada vuelta
        - puede tener tantas operaciones como quiera separadas con ,
           for(inicialización ;condición; $i++, fwrite(...), $j++)    
*/
echo 'tabla del 10<br />';
for($i=0;$i<=10;$i++){
    echo $i.' * 10 = '.(10 * $i).'<br /> ';
}

/*
    for( ;condición;iteración)
    for(inicialización;condición;)
    for(;condición;)
    for(;;) -> ejecución infinita
 
    break -> rompe un lazo (for, switch, dowhile, while)
    continue -> deja de ejecutar lo que esta dentro de las llaves y ejecuta la comparación
*/
echo '<br /> casi una tabla del 10<br />';
for($i=0;$i<=10;$i++){
    if($i == 5){
        continue;
    }

    if($i == 8){
        break;
    }
    echo $i.' * 10 = '.(10 * $i).'<br /> ';
}
?>