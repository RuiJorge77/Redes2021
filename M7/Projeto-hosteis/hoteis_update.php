<?php
    $idHotel= $_GET['hotel'];
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $hotel = "";
        $preco = 0;
        $localidade = "";
        
        if(isset($_POST['hotel'])){

            $hotel = $_POST['hotel'];
        }
        else{

            echo '<script>alert("É obrigatório o preenchimento do hotel.");</script>';
        }

        if(isset($_POST['preco'])){

            $preco = $_POST['preco'];
        }
        
        if(isset($_POST['localidade'])){

            $localidade = $_POST['localidade'];
        }

        $con = new mysqli("localhost","root","","hotel");

        if($con->connect_errno!=0){
            echo "Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error;
            exit;
        }
        else{
            //$sql = "insert into hotel(hotel=?,preco=?,localidade=?) values(?,?,?);";
            $sql = "update hotel set hotel=?,preco=?,localidade=? where id_hotel=?";
            $stm = $con->prepare($sql);
            if($stm!=false){
                $stm->bind_param("sisi",$hotel,$preco,$localidade,$idHotel);
                $stm->execute();
                
                $stm->close();
                
                echo '<script>alert("Hotel alterado com sucesso!!");</script>';
                echo "Aguarde um momento. A reencaminhar página";
                header("refresh:5; url=hoteis_index.php");
            }
            else{

            }
        }
    }
    else{
        echo "<h1> Houve um erro ao processar o seu pedido!<br>Irá ser reencaminhado!</h1>";
        header("refresh:5; url=hoteis_index.php");
    }