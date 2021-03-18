<?php
    $Num1 = $_POST["n1"]; 
    $Num2 = $_POST["n2"];
    $Num3 = $_POST["n3"]; 
    $Num4 = $_POST["n4"]; 
    $soma = $Num1 + $Num2 + $Num3 + $Num4;
    $media = $Num1 + $Num2 + $Num3 + $Num4 / 10;
    echo "soma é: " .$soma. "<br>";
    echo "Média é: " .$media. "<br>";
?>