<?php
    $paraLoop = rand(1,30);
    
    //este for é executado indefinidamente
    for($numero =0; ; $numero++){
        if($numero == $paraLoop){
            //este break obriga a terminar o ciclo for
            break;
        }
        echo $numero."<br>";
    
    }
    //tabuada do 9
    $x = 1;
    do  {
        $res = $x *9;
        echo '9 x ' . $x .' = ' .$res .'<br>';
        $x++;
    }
    while ($x <= 10);
?>
