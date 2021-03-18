<?php 
    if($_SERVER['REQUEST_METHOD']=="GET"){
        if(!isset($_GET['hotel']) || !is_numeric($_GET['hotel'])){

            echo '<script>alert("Erro ao abrir o hotel");</script>';
            echo 'Aguarde um momento.A reencaminhar pagina';
            header("refresh:5; url=hoteis_index.php");
            exit();
        }
        $idhotel=$_GET['hotel'];
        $con=new mysqli("localhost","root","","hotel");

        if($con->connect_error!=0){

            echo 'Ocorreu um erro no acesso a base de dados <br>'.$con->connect_error;
            exit();
        }
        else{
            $sql='select * from hotel where id_hotel=?';
            $stm=$con->prepare($sql);
            if($stm!=false){
                $stm->bind_param('i',$idhotel);
                $stm->execute();
                $res=$stm->get_result();
                $hotel=$res->fetch_assoc();
                $stm->close();
            }
            else{
                echo '<br>';
                echo ($con->error);
                echo'<br>';
                echo"Aguarde um momento.A reencaminhar pagina";
                echo'<br>';
                header("refresh:5; url=hoteis_index.php");
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
        <h1>Detalhes do Hotel</h1>
    <?php
        if(isset($hotel)){
            echo '<br><br>';
            echo "Hotel: ";
            echo $hotel['hotel'];
            echo '<br><br>';
            echo "Preço Por Noite: ";
            echo $hotel['preco'];
            echo "$";
            echo '<br><br>';
            echo "Localidade: ";
            echo $hotel['localidade'];
            echo '<br><br>';
        }
        else{
            echo '<h2>Parece que o Hotel selecionado nao exite</h2>';
        }
    ?>
<button>
<a class="btn btn-primary" href="hoteis_index.php">
    Voltar
</a>
</button>
<button>
<?php
    echo '<a class="btn btn-primary" href="hoteis_edit.php?hotel='.$hotel['id_hotel'].'">
    Editar </a>';
?>
</button>
<button>
<?php
    echo '<a class="btn btn-primary" href="hoteis_delete.php?hotel='.$hotel['id_hotel'].'">
    Eliminar </a>';
?>
</button>
</body>   
    </html>