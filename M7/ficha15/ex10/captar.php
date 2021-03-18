<?php
    $soma=0;
    $produto=1;
    $valor = $_POST["chb_valor"]; 
    if(count($_POST)) {
        if(is_numeric($_POST["rbt_valor"]) && $_POST["rbt_valor"] >=0){
        $fim=$_POST["rbt_valor"];
        for($I=1;$i<=$fim;$i++){
            echo $i. " ";
            $soma = $soma + 1;
            $produto = $produto + $i;      
        }
        echo "<br>";
        echo "soma = ".$soma;
        echo "<br>";
        echo "produto = ".$produto;
    }
    else{
        echo "introduz<a um valor numerico e positivo.";
    }
    }
       
?>