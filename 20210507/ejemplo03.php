<html>

<head>
    <title>Titulo del documento</title>
</head>

<body>
    <p>ESTOY EN EL HTML, ANTES DEL CÓDIGO PHP</p>    
    <ul>
        <?php for($i=1;$i<=100;$i++){ ?>
           <li> <?php echo $i ?> * 10 = <?php echo 10 * $i ?> </li>
        <?php }?>
    </ul>
</body>

</html>