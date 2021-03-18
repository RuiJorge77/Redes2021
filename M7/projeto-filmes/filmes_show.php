<?php 
    if($_SERVER['REQUEST_METHOD']=="GET"){
        if(!isset($_GET['filme']) || !is_numeric($_GET['filme'])){

            echo '<script>alert("Erro ao abirir livro");</script>';
            echo 'Aguarde um momento.A reencaminhar pagina';
            header("refresh:5; url=index.php");
            exit();
        }
        $idFilme=$_GET['filme'];
        $con=new mysqli("localhost","root","","filmes");

        if($con->connect_error!=0){

            echo 'Ocorreu um erro no acesso a base de dados <br>'.$con->connect_error;
            exit();
        }
        else{
            $sql='select * from filmes where id_filme=?';
            $stm=$con->prepare($sql);
            if($stm!=false){
                $stm->bind_param('i',$idFilme);
                $stm->execute();
                $res=$stm->get_result();
                $livro=$res->fetch_assoc();
                $stm->close();
            }
            else{
                echo '<br>';
                echo ($con->error);
                echo'<br>';
                echo"Aguarde um momento.A reencaminhar pagina";
                echo'<br>';
                header("refresh:5; url=index.php");
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
        <h1>Detalhes do filme</h1>
    <?php
        if(isset($livro)){
            echo '<br><br>';
            echo "Filme: ";
            echo $livro['titulo'];
            echo '<br><br>';
            echo "Sinopse: ";
            echo $livro['sinopse'];
            echo '<br><br>';
            echo "Idioma: ";
            echo $livro['idioma'];
            echo '<br><br>';
            echo "Data Lançamento: ";
            echo $livro['data_lancamento'];
            echo '<br><br>';
            echo "Quantidade: ";
            echo $livro['quantidade'];
            echo '<br><br>';
        }
        else{
            echo '<h2>Parece que o filme selecionado nao exite</h2>';
        }
    ?>
<button>
<a class="btn btn-primary" href="index.php">
    Voltar
</a>
</button>
<button>
<a class="btn btn-primary" href="filmes_edit.php">
    Editar
</a>
</button>
<button>
<a class="btn btn-primary" href="filmes_delete.php">
    Eliminar
</a>
</button>
    </body>   
    </html>