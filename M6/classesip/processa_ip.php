<?php
    include "css.php";
    if($_GET['a'] <= 255 && $_GET['b'] <= 255 && $_GET['c'] <= 255 && $_GET['d'] <= 255 && $_GET['a'] >= 0 && $_GET['b'] >= 0 && $_GET['c'] >= 0 && $_GET['d'] >= 0){
        $ip = array(
            'a' => $_GET['a'],
            'b' => $_GET['b'],
            'c' => $_GET['c'],
            'd' => $_GET['d'],
        );
    }
    else{
        echo  "IP Inválido";
        return;
    }
    $ipFinal = implode(".",$ip);
    function ip_in_range($lower_range_ip_address, $upper_range_ip_address, $needle_ip_address)
    {
        $min    = ip2long($lower_range_ip_address);
        $max    = ip2long($upper_range_ip_address);
        $needle = ip2long($needle_ip_address);            

        if(($needle >= $min) AND ($needle <= $max)){
            echo "Ip Publico";
        }
        else if($needle<$min AND $needle > $max){
            echo "Ip Reservado";
        }
    }    
    ip_in_range("1.0.0.1", "126.255.255.254", $ipFinal);
    ip_in_range("128.1.0.1", "191.255.255.254", $ipFinal);
    ip_in_range("192.0.0.1", "223.255.255.254", $ipFinal);
    ip_in_range("224.0.0.1", "239.255.255.254", $ipFinal);
    ip_in_range("240.0.0.1", "254.255.255.254", $ipFinal);
?>
<br>
<br>
<button>
    <a href="index.php">
        Voltar
    </a>
</button>