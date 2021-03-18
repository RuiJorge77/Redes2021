<html>
<head>
    
</head>
<body>
    <?php
    $r=rand(1,10);
    
    
    function calarea($raio){
        $area=3.14*$raio*$raio;
        return $area;
    }
    echo "a area de um ciculo de raio $r é: " .calarea($r);
    ?>
</body>
</html>