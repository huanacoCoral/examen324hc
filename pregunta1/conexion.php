<?php
$servername = "nombre_del_servidor";
//$username = "nombre_de_usuario";
//$password = "contraseña";
$database = "nombre_de_la_base_de_datos";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


// Ejemplo de consulta
$sql = "SELECT * FROM nombre_de_la_tabla";
$result = $conn->query($sql);


// Cerrar la conexión cuando hayas terminado
$conn->close();
?>
