<?php
    $idReserva= $_GET['reserva'];
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $hotel = "";
        $numquarto = "";
        $data = "";
        
        if(isset($_POST['hotel'])){

            $hotel = $_POST['hotel'];
        }
        

        if(isset($_POST['numquarto'])){

            $numquarto = $_POST['numquarto'];
        }
        
        if(isset($_POST['data'])){

            $data = $_POST['data'];
        }

        $con = new mysqli("localhost","root","","hotel");

        if($con->connect_errno!=0){
            echo "Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error;
            exit;
        }
        else{
            //$sql = "insert into hotel(hotel=?,preco=?,localidade=?) values(?,?,?);";
            $sql = "update reserva set hotel=?,numquarto=?,data=? where id_reserva=?";
            $stm = $con->prepare($sql);
            if($stm!=false){
                $stm->bind_param("iisi",$hotel,$numquarto,$data,$idReserva);
                $stm->execute();
                
                $stm->close();
                
                echo '<script>alert("Reserva alterada com sucesso!!");</script>';
                echo "Aguarde um momento. A reencaminhar página";
                header("refresh:5; url=index.html");
            }
            else{

            }
        }
    }
    else{
        echo "<h1> Houve um erro ao processar o seu pedido!<br>Irá ser reencaminhado!</h1>";
        header("refresh:5; url=index.html");
    }