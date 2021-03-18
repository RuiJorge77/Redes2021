<?php
    $con = new mysqli("localhost","root","","filmes");
    if($con->connect_errno!=0){
        echo "Ocorreu um erro no acesso à base de dados ".$con->connect_error;
        exit;
    }
    else{
?>
    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="ISO-8859-1">
    <title>Realizadores</title>
    </head>
    <body>
    <h1>Lista de Realizadores</h1>
    <?php
        $stm = $con->prepare('select * from realizadores');
        $stm->execute();
        $res=$stm->get_result();
        while($resultado = $res->fetch_assoc()){
            echo $resultado['nome'];
            echo '<br>';
        }
        $stm->close();
    ?>
    <a href="index.php">Index</a>
<br>
</body>
</html>

<?php
    }
?>