<html>
<head>
    
</head>
<body>
    <?php
    $a = array("a" => "maçã", "b" => "banana");
    $b = array("a" =>"kiwi", "b" => "ananás", "c" =>"Abacaxi");
    $c = array_merge($a, $b);
    foreach($c as $item){
        echo $item."<br>";
    }
    $c = array_merge($b, $a);
    foreach($c as $item){
        echo $item."<br>";
    }
    print_r(array_merge($a, $b));
    echo '<br>';
    print_r(array_merge($b, $a));
    /*$array1 = array();
    $array2 = array();
    function uniao($array1, $array2){
        $c = array_merge($a, $b);
        foreach($c as $item->$valor){
            echo $valor."<br>";
        }
    }
    
    uniao($a, $b);
    uniao($b, $a);
    */
    ?>
</body>
</html>