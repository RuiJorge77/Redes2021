<?php 
    if($_SERVER['REQUEST_METHOD']=="GET"){
        if(!isset($_GET['reserva']) || !is_numeric($_GET['reserva'])){

            echo '<script>alert("Erro ao abrir a Reserva");</script>';
            echo 'Aguarde um momento.A reencaminhar pagina';
            header("refresh:5; url=reserva_index.php");
            exit();
        }
        $idreserva=$_GET['reserva'];
        $con=new mysqli("localhost","root","","hotel");

        if($con->connect_error!=0){

            echo 'Ocorreu um erro no acesso a base de dados <br>'.$con->connect_error;
            exit();
        }
        else{
            $sql='select * from reserva where id_reserva=?';
            $stm=$con->prepare($sql);
            if($stm!=false){
                $stm->bind_param('i',$idreserva);
                $stm->execute();
                $res=$stm->get_result();
                $reserva=$res->fetch_assoc();
                $stm->close();
            }
            else{
                echo '<br>';
                echo ($con->error);
                echo'<br>';
                echo"Aguarde um momento.A reencaminhar pagina";
                echo'<br>';
                header("refresh:5; url=reservas_index.php");
            }
        }
    }
?>
    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <title>Detalhes</title>
    </head>
    <body>
        <h1>Detalhes da Reserva</h1>
    <?php
        if(isset($reserva)){
            echo '<br><br>';
            echo "Reserva: ";
            echo $reserva['id_reserva'];
            echo '<br><br>';
            echo "Hotel: ";
            echo $reserva['id_hotel'];
            echo '<br><br>';
            echo "Nº Quarto: ";
            echo $reserva['numquarto'];
            echo '<br><br>';
            echo "data: ";
            echo $reserva['data'];
            echo '<br><br>';
        }
        else{
            echo '<h2>Parece que a reserva selecionado nao exite</h2>';
        }
    ?>
<button>
<a class="btn btn-primary" href="reservas_index.php">
    Voltar
</a>
</button>
<button>
<?php
    echo '<a class="btn btn-primary" href="reservas_edit.php?reserva='.$reserva['id_reserva'].'">
        Editar </a>';
?>
</button>
<button>
<?php
    echo '<a class="btn btn-primary" href="reservas_delete.php?reserva='.$reserva['id_reserva'].'">
        Eliminar </a>';
?>
</button>
</body>   
    </html>