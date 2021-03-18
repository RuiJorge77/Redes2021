<?php
if($_SERVER['REQUEST_METHOD']=="GET"){
    if(isset($_GET['hotel']) || is_numeric($_GET['hotel'])){
        $idHotel = $_GET['hotel'];
        $con = new mysqli("localhost","root","","hotel");
        if($con->connect_errno!=0){
            echo "<h1>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        else{
        $sql = "delete from hotel where id_hotel=?";
        $stm = $con->prepare($sql);
        if($stm!=false){
            $stm->bind_param("i",$idHotel);
            $stm->execute();
            $stm->close();
            echo ("<script>alert('Hotel eliminado com sucesso');</script>");
            echo 'Aguarde um momento. A reencaminar página';
            header("refresh:5; url=hoteis_index.php");
        }
        else{
            echo '<br>';
            echo $con->error;
            echo '<br>';
            echo "Aguarde um momento. A reencaminhar página";
            header("refresh:5; url=hoteis_index.php");
        }
    }
 }
 else{
    echo ("<h1>Houve um erro ao processar o seu pedido.<br>Dentro de segundos será reencaminhado!</h1>");
    header("refresh:5; url=hoteis_index.php");
    }
}
else{
    echo ("<h1>Houve um erro ao processar o seu pedido.<br>Dentro de segundos será reencaminhado!</h1>");
    header("refresh:5; url=hoteis_index.php");
    }
?>