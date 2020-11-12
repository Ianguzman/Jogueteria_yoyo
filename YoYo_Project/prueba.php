<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "tabla";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: Pos falló " . $conn->connect_error);
}
echo "Conexión Exitosa";

    //$nombre=$_POST['nombre'];

    $nombre = false;
    if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
    } 

    //$email=$_POST['email'];

    $email = false;
    if(isset($_POST['email'])){
    $email = $_POST['email'];
    } 

    //$mensaje=$_POST['mensaje'];

    $mensaje = false;
    if(isset($_POST['mensaje'])){
    $mensaje = $_POST['mensaje'];
    } 

    $sql = "INSERT INTO base VALUES ('$nombre', '$email','$mensaje')";

    if ($conn->query($sql) === TRUE) {
        echo"<br>Su Comentario ha sido enviado correctamente<br><a href='contacto.html'>Volver</a>";
      } else {
        echo "Error: No se envío ni merga" . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
    

?>