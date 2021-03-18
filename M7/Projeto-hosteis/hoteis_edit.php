<?php
if($_SERVER['REQUEST_METHOD']=="GET"){

    if(isset($_GET['hotel']) && is_numeric($_GET['hotel'])){
        $idHotel = $_GET['hotel'];
        $con = new mysqli("localhost","root","","hotel");

        if($con->connect_errno!=0){
            echo "<h1>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        $sql = "Select * from hotel where id_hotel=?";
        $stm = $con->prepare($sql);

        if($stm!=false){
            $stm->bind_param("i",$idHotel);
            $stm->execute();
            $res=$stm->get_result();
            $hotel = $res->fetch_assoc();
            $stm->close();
        }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>Editar Hotel</title>
</head>
<body>
    <h1>Editar Hotel</h1>
    <form action="hoteis_update.php?hotel=<?php echo $hotel['id_hotel']; ?>" method="post">
        <label>Hotel</label><input type="text" name="hotel" required value="<?php echo $hotel['hotel'];?>"><br>
        <label>Preco</label><input type="numeric" name="preco" required value="<?php echo $hotel['preco'];?>"><br>
        <label>Localidade</label><input type="numeric" name="localidade" required value="<?php echo $hotel['localidade'];?>"><br>
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