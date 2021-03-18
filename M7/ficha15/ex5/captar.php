<?php
    $rapazes = $_POST["n1"]; 
    $raparigas = $_POST["n2"];
    echo "A turma é Composta por: <br>";
    echo "<h3>" .$rapazes. "Rapazes</h3><br>";
    echo "<h3>" .$raparigas. "Raparigas</h3><br>";
    $total = $raparigas + $rapazes;
    echo "O número total de alunios é: " .$total. "<br>";
    $perrapazes=($rapazes * 100/ $total);
    echo "A percentagem de rapazes é de: " .$perraapazes. "<br>";
    $perraparigas=($raparigas * 100/ $total);
    echo "O número total de alunios é: " .$pererraparigas. "<br>";
?>