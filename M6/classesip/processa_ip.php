<?php
    include "css.php";     
            $a = $_GET['a'];
            $b = $_GET['b'];
            $c = $_GET['c'];
            $d = $_GET['d'];
    if($a > 255 || $a < 0 || $b > 255 || $b < 0 || $c > 255 || $c < 0 || $d > 255 || $d < 0){
        echo 'ip Invalido. Digite um endereço IP entre 0 e 255';
    }
    else if($a == 127) {
        echo 'IP reservado para loopback ou localhost';
    }
    else if ($a <= 126 && $a > 0 && $b >= 0 && $b <= 255 && $c >= 0 && $c <= 255 && $d >= 1 && $d <= 254){
        echo 'Classe A';
    }
    else if ($a >= 128 && $a <= 191 && $b >= 1 && $b <= 255 && $c >= 0 && $c <= 255 && $d >= 1 && $d <= 254){
        echo 'Classe B';
    }
    else if ($a >= 192 && $a <= 223 && $b >= 0 && $b <= 255 && $c >= 1 && $c <= 254 && $d >= 1 && $d <= 254){
        echo 'Classe C';
    }
    else if ($a >= 224 && $a <= 239 && $b >= 0 && $b <= 255 && $c >= 0 && $c <= 255 && $d >= 0 && $d <= 255){
        echo 'Classe D';
    }
    else if ($a >= 240 && $a <= 254 && $b >= 0 && $b <= 255 && $c >= 0 && $c <= 255 && $d >= 0 && $d <= 254){
        echo 'Classe E';
    }
    else{
		echo "IP inválido";
	}
    
     echo "<br>";
    if($a == 10){
        echo "IP Privado";
    }
    elseif($a == 172 && ($b >= 16 && $b <= 1)){
        echo "IP Privado";
    }
    elseif($a == 192 && $b == 168 && ($c > 0 && $c <= 255)){
        echo "IP Privado";
    }
     elseif($a == 255){
        echo "IP Invalido";
    }
    elseif($b == 0 && $c == 0 && $d == 0){
        echo "IP Invalido";
    }
    elseif($c == 0 && $d == 0){
        echo "IP Invalido";
    }
    elseif($d == 0 && $d == 255){
        echo "IP Invalido";
    }
    else{
        echo "IP publico";
    }
?>
<br>
<br>
<button>
    <a href="index.php">
        Voltar
    </a>
</button>