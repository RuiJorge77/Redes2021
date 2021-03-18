<?php
    $idade = $_POST["idade"]; 
    if($idade < 18){
        echo"voçê tem".$idade. "anos - é menor de idade";
    }
    if($idade >= 18){
        echo"voçê tem".$idade. "anos - é maior de idade";
    }
    else if($idade > 100){
        echo "você é um ET"
    }
    else{
        echo "Caso Impossivel"       
    }
?>