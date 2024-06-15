<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "tienda";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para obtener los productos
$sql = "SELECT nombre, precio, foto FROM productos";
$result = $conn->query($sql);

// Crear un array para almacenar los datos
$productos = array();

if ($result->num_rows > 0) {
    // Obtener cada fila de resultados y almacenarla en el array
    while($row = $result->fetch_assoc()) {
        $productos[] = $row;
    }
}

// Cerrar conexión
$conn->close();

// Devolver la respuesta JSON
header('Content-Type: application/json');
echo json_encode($productos);
?>
