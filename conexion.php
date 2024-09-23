<?php

$servername = "localhost:3307"; // Cambia esto por el nombre del servidor si es diferente 

$username = "root"; // Cambia esto por tu nombre de usuario de MySQL 

$password = ""; // Cambia esto por tu contraseña de MySQL 

$database = "basededatos"; // Cambia esto por el nombre de tu base de datos 

 // Crear una conexión a la base de datos 

$conn = new mysqli($servername, $username, $password, $database); 

 // Verificar la conexión 

if ($conn->connect_error) { 

 die("Conexión fallida: " . $conn->connect_error); 

}else{  echo "Conexión exitosa a la base de datos"; 

}

?>
