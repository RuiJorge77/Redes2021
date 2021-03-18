<?php
    $nome = $_POST["txt_nome"]; //capta o que se preencheu na caixa de texto de name="txt_nome"
    $idade = $_POST["txt_idade"]; //capta o que se preencheu na caixa de texto de name="txt_idade"
    echo "Nome: " .$nome. "<br>"; //imprime o que foi escrito na caixa de texto txt_nome
    echo "Idade: " .$idade; //imprime o que foi escrito na caixa de texto txt_idade
?>