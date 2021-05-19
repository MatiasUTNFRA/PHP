<html>

<head>
    <title>Titulo del documento</title>
</head>

<body>
    <p>ESTOY EN EL HTML, ANTES DEL CÓDIGO PHP</p>    
    <ul>
        <?php for($i=1;$i<=100;$i++){
               //'<li>  1    * 10 =     10     </li> '
               $resultado = 10 *$i;
            echo "<li> $i * 10 = $resultado </li> ";
        
        }?>
    </ul>
</body>

</html>