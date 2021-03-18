<?php
    $Num1 = $_POST["n1"]; 
    $Num2 = $_POST["n2"];
    $Num3 = $_POST["n3"]; 
    $Num4 = $_POST["n4"]; 
    $soma = $Num1 + $Num2 + $Num3 + $Num4;
    $subtracao = $Num1 - $Num2 - $Num3 - $Num4;
    $multiplicacao = $Num1 * $Num2 * $Num3 * $Num4;
    $divisao = $Num1 / $Num2 / $Num3 / $Num4;
    echo "soma é: " .$soma. "<br>";
    echo "Subtracão é: " .$subtracao. "<br>";
    echo "Multiplicação é: " .$multiplicacao. "<br>";
    echo "divisão é: " .$divisao. "<br>";
?>