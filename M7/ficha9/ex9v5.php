<?php
    $num=rand(1,100);
    $some = 0;
    while($some<1000){
        $some = $some + $num;
        $num = rand(0,100);
    }
    echo $some;
?>