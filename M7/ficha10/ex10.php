<?php
    $cores = array('vermelho ', 'azul ', 'verde ', 'amarelo ');
    echo $cores[0];
    echo $cores[1];
    echo $cores[2];
    echo $cores[3];
    
    $a = array('tesla', 2000, 3.0, 'BMW', 'Fiat');
    echo $a[1];

    $a[1]=2020;
    echo $a[1];

    $a[]="Vila das Aves";
    $a[]="AEDAH";
    foreach($a as $item){
        echo $item .'<br>';
    }
?>