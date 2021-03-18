<?php
if($_SERVER['REQUEST_METHOD']=="GET"){

    if(isset($_GET['reserva']) && is_numeric($_GET['reserva'])){
        $idReserva = $_GET['reserva'];
        $con = new mysqli("localhost","root","","hotel");

        if($con->connect_errno!=0){
            echo "<h1>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        $sql = "Select * from reserva where id_reserva=?";
        $stm = $con->prepare($sql);

        if($stm!=false){
            $stm->bind_param("i",$idReserva);
            $stm->execute();
            $res=$stm->get_result();
            $reserva = $res->fetch_assoc();
            $stm->close();
        }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>Editar Reserva</title>
</head>
<body>
    <h1>Editar Reserva</h1>
    <form action="reservas_update.php?reserva=<?php echo $reserva['id_reserva']; ?>" method="post">
        <label>Hotel</label><input type="text" name="id_hotel" required value="<?php echo $reserva['id_hotel'];?>"><br>
        <label>Nº Quarto</label><input type="text" name="numquarto" required value="<?php echo $reserva['numquarto'];?>"><br>
        <label>data</label><input type="date" name="data" required value="<?php echo $reserva['data'];?>"><br>
        <input type="submit" name="enviar"><br>
    </form>
</body>
<?php
 }
 else{
     echo ("<h1>Houve um erro ao processar o seu pedido.<br>Dentro de segundos será reencaminhado!</h1>");
     header("refresh:5; url=hoteis_index.php");
 }
}
?>