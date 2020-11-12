<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "pedidos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: Pos falló " . $conn->connect_error);
}
echo "Conexión Exitosa";

    $nombre=$_POST['nombre'];
    $juego=$_POST['juego'];
    $cantidad=$_POST['cantidad'];
    $email=$_POST['email'];
    $estado=$_POST['estado'];
    $direccion=$_POST['direccion'];
    

    $sql = "INSERT INTO pedidos VALUES ('$nombre', '$juego','$cantidad', '$email', '$estado', '$direccion')";

    if ($conn->query($sql) === TRUE) {
        echo"<br>Su Pedido ha Sido Enviado Corectamente<br><a href='pedidos.html'>Volver</a>";
      } else {
        echo "Error: No se envío nada, intente de nuevo" . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();

?>