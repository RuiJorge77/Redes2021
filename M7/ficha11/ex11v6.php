<html>
<head>
    
</head>
<body>
    <?php
    $matriz = array(
        array(0,9),
        array(1,7),
        array(2,8),
        array(3,6),
        array(4,4),
        array(5,5),
        array(6,3),
        array(7,2),
        array(8,0),
        array(9,1)
    );
    $soma = 0;
    for ($i=0;$i<10;$i++){
        for($j=0;$j<2;$j++){
            $soma = $soma + $matriz[$i][$j];
        }
    }
    
    echo $soma;
    ?>
</body>
</html>