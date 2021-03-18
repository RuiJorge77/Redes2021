<?php
$carros = array(
'Punto'=> array(
    'cor'=>'azul',
    'potencia'=>'1.0',
    'opcionail'=>'Ar Cond.'
),
'corsa'=>array(
    'cor'=>'cinza',
    'potencia'=>'1.3',
    'opcionais'=>'mp3'
),
'Gold'=>array(
    'cor'=>'branco',
    'potencia'=>'1.0',
    'opcionais'=>'Metalica'
)
);
echo $carros['punto']['opcionais'];
foreach($carros as $modelo=>$carro){
    echo '<h1>' .$modelo. '</h1>';
    foreach ($carro as $chave=>$detalhe) {
        echo '<b>' .$chave. '</b>= ' .$detalhe. '<br>';
    }
}
?>