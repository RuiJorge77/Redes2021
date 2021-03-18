<?php
    session_start();
    if(!isset($_SESSION['login'])){
        $_SESSION['login']="incorreto";
    }
    if($_SESSION['login']== "correto" && isset($_SESSION['login'])){
        if($_SERVER['REQUEST_METHOD']=="GET"){
            if(!isset($_GET['realizador']) || !is_numeric($_GET['realizador'])){
                echo '<script>alert("Erro ao abrir realizador");</script>';
                echo 'Aguarde um momento. A reencaminhar página';
                header("refresh:5;url=index.php");
                exit();
            }
            $idRealizador=$_GET['realizador'];
            $con = new mysqli("localhost","root","","filmes");
    
            if($con->connect_errno!=0){
                echo 'Occoreu um erro no acesso à base de dados. <br>'.$con->connect_error;
                exit();
            }
            else{
                $sql = 'select * from realizadores where id_realizador = ?';
                $stm = $con->prepare($sql);
                if($stm!=false){
                    $stm->bind_param('i',$idRealizador);
                    $stm->execute();
                    $res=$stm->get_result();
                    $livro = $res->fetch_assoc();
                    $stm->close();
                }
                else{
                    echo '<br>';
                    echo ($con->error);
                    echo '<br>';
                    echo "Aguarde um momento.A reencaminhar página";
                    echo '<br>';
                    header("refresh:5; url=index.php");
                }
            }
        }
        ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Detalhes</title>
</head>
<body>
<h1>Detalhes do filme</h1>
<?php
    if(isset($livro)){
        echo '<br>';
        echo "Nome: ".$livro['nome'];
        echo '<br>';
        echo "Data Nascimento: ".$livro['data_nascimento'];
        echo '<br>';
        echo "Nacionalidade: ".$livro['nacionalidade'];
        echo '<br>';
    }
    else{
        echo '<h2>Parece que o filme selecionado não existe. <br>Confirme a sua seleção.</h2>';
    }
    echo '<a href="realizador_edit.php?realizador='.$livro['id_realizador'].'">Editar Realizador</a><br>';
    echo '<a href="realizador_delete.php?realizador='.$livro['id_realizador'].'">Eliminar Realizador</a>';
?>
</body>
</html>
<?php
    }
    else{
        echo "Precisa estar logado.<br>";
        echo "A ser redirecionado para a pagina de login";
        header("refresh:5; url=login.php");
    }
?>