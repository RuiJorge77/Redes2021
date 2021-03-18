<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){

        $idhotel="";
        $numquarto="";
        $data="";
    
        if(isset($_POST['id_hotel'])){

            $idhotel = $_POST['id_hotel'];
        }
        else{

            echo '<script>alert("É obrigatório o preenchimento do hotel.");</script>';
        }

        if(isset($_POST['numquarto'])){

            $numquarto = $_POST['numquarto'];
        }
        else{

            echo '<script>alert("É obrigatório o preenchimento do Nº Quarto.");</script>';
        }
        
        if(isset($_POST['data'])){

            $data = $_POST['data'];
        }
        else{

            echo '<script>alert("É obrigatório o preenchimento da data.");</script>';
        }

        $con = new mysqli("localhost","root","","hotel");

        if($con->connect_errno!=0){

            echo "Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error;
            exit;
        }

        else{

            $sql = 'insert into hotel(id_hotel,numquarto,data) values(?,?,?)';
            $stm = $con->prepare($sql);
            if($stm!=false){
                $stm->bind_param('iii',$idhotel,$numquarto,$data);
                $stm->execute();
                $stm->close();
                
                echo '<script>alert("Reserva adicionada com sucesso");</script>';
                echo 'Aguarde um momento. A reencaminhar página';
                header("refresh:5; url=index.php");
            }
            else{
                echo($con->error);
                echo "Aguarde um momento. A reencaminhar página";
                header("refresh:5;url=index.php");
            }
        }
    }
    else{
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>Adicionar Reserva</title>
</head>
<body>
    <h1>Adicionar Reserva</h1><br>
    <form action="reservas_create.php" method="post"><br>
    <label>Hotel</label><input type="text" name="idhotel" required><br><br>
    <label>Nº Quarto</label><input type="text" name="numquarto"><br><br>
    <label>data</label><input type="date" name="data"><br><br>
    <input type="submit" name="enviar"><br><br>
    </form>
</body>
</html>
<?php
    };
?>