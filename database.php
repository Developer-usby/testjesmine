<?php
$servername = "sql12.freemysqlhosting.net";
$username = "sql12598699";
$password = "u4Q6qAEvUf";
$dbname = "sql12598699";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si hay errores en la conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";
?>