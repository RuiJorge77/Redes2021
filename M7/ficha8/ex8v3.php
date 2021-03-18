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
?>