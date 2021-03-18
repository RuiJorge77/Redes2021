<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){

        $hotel="";
        $preco="";
        $localidade="";
    
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

            $sql = 'insert into hotel(hotel,preco,localidade) values(?,?,?)';
            $stm = $con->prepare($sql);
            if($stm!=false){
                $stm->bind_param('sis',$hotel,$preco,$localidade);
                $stm->execute();
                $stm->close();
                
                echo '<script>alert("hotel adicionado com sucesso");</script>';
                echo 'Aguarde um momento. A reencaminhar página';
                header("refresh:5; url=hoteis_index.php");
            }
            else{
                echo($con->error);
                echo "Aguarde um momento. A reencaminhar página";
                header("refresh:5;url=hoteis_index.php");
            }
        }
    }
    else{
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>Adicionar Hotel</title>
</head>
<body>
    <h1>Adicionar Hotel</h1><br>
    <form action="hoteis_create.php" method="post"><br>
    <label>Hotel</label><input type="text" name="hotel" required><br><br>
    <label>Preço</label><input type="text" name="preco"><br><br>
    <label>Localidade</label><input type="text" name="localidade"><br><br>
    <input type="submit" name="enviar"><br><br>
    </form>
</body>
</html>
<?php
    };
?>