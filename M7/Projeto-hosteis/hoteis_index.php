<?php
    $con=new mysqli("localhost", "root", "", "hotel");
    if($con->connect_errno!=0){
        echo "Ocorreu um erro no acesso á base de dados ".$con->connect_error;
        exit;
    }
    else{
?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="ISO-8859-1">
            <tittle></tittle>
        </head>
    <body>
        <h1>Lista de hoteis </h1>
        <?php
            $stm = $con->prepare('select * from hotel');
            $stm->execute();
            $res=$stm->get_result();
            while($resultado = $res->fetch_assoc()) {
                echo '<a href="hoteis_show.php?hotel='.$resultado['id_hotel'].'">';
                echo $resultado['hotel'];
                echo '<br>';
                echo '</a>';
                echo '<br>';
            }
            $stm->close();
        ?>
        <br>
<button>
<a class="btn btn-primary" href="hoteis_create.php">
    Criar
</a>
</button>
<button>
<a class="btn btn-primary" href="login.php">
    Login
</a>
</button>
<button>
<a class="btn btn-primary" href="register.php">
    Register
</a>
</button>
<button>
<a class="btn btn-primary" href="userlist.php">
    Lista de Users
</a>
</button>
    </body>
    </html>
<?php
    }
?>