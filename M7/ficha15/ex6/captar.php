<?php
    $Num1 = $_POST["num1"]; 
    $descontos = $num1 * 0.15;
    $cantina = $num1 + 0.10; 
    $transporte = $num1 - 0.05; 
    $liquido = $Num1 - $descontos - $cantina - $transporte;
    echo "O salario bruto do trabalhador é: " .$num1. "<br>";
    echo "Descontos do trabalhador é de: " .$descontos. "<br>";
    echo "cantina do trabalhador é de: " .$cantina. "<br>";
    echo "transporte do trabalhador é de: " .$transporte. "<br>";
    echo "liquido do trabalhador é de: " .$liquido. "<br>";
?>