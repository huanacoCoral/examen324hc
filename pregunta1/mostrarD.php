<?php
$servername = "mibd_huanacocondori";/// cambiar
//$username = "nombre_de_usuario";
//$password = "contraseña";
$database = "mibd_huanacocondori";

// Crear una conexión
$conn = new mysqli($servername, "", "", $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL
$sql = "SELECT nombre FROM estudiante";
$result = $conn->query($sql);

// Verificar si se encontraron resultados
if ($result->num_rows > 0) {
    // Recorrer los resultados y mostrarlos
    while ($row = $result->fetch_assoc()) {
        echo "nombre 1: " . $row["campo1"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión cuando hayas terminado
$conn->close();
?>
