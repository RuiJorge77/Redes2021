<?php
    $nota1=1;
    $nota2=2;
    $nota3=3;
    $media=$nota1+$nota2+$nota3/3;
    if ($media>=9.5){
        echo 'aprovado';
    }
    elseif ($media>8 && $media<9.5){
        echo 'recuperar';
    }
    elseif ($media<=8){
        echo 'reprovado';
    }
?>