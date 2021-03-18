<?php
    for ($i=0; $i<=15; $i++){
        $num = rand(1,1000);
        $vetor[$i]=$num;
    }
    for ($i=0; $i<=15; $i++){
    echo 'A posicao do vetor é: ' .$vetor[$i];
     if($vetor[$i] % 2 == 0){
        echo 'Número par'.'<br>';
    }
    else{
        echo 'Número impar'.'<br>';
    }
}
?>