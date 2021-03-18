<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h1>Classes IP</h1>
        <h5>Digite o Endereço IP que pretende verificar:
        <form action="processa_ip.php">
            <input type="text" name="a">
            <input type="text" name="b">
            <input type="text" name="c">
            <input type="text" name="d">
            <input type="submit" value="Confirmar">
        </form>
        </h5>
        <br><br>
	    <h3>Protocolos</h3>
	    <h4>Selecione o protocolo:</h4>
	    <form action="processa_protocol.php">
  		    <select name="protocolo" id="cars">
		        <option value="dns">DNS</option>
		        <option value="ftp">FTP</option>
		        <option value="http">HTTP</option>
		        <option value="ip">IP</option>
  		    </select>
  		    <br><br>
  		    <input type="submit" value="Confirmar">
	    </form>
    </body>
</html>