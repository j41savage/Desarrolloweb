<?php
require_once("conexion.php");

$Ncorreo = $_POST["correon"];
$Ncontrasena = $_POST["contran"];
$Nnombre = $_POST["nombren"];
$Napellido = $_POST["apellidon"];


$sql = "INSERT into usuarios (nombres, apeliidos, correo, contrasena) values (?,?,?,md5(?))";

$stmt = $conn->prepare($sql); 

if ($stmt === false) { die("Error en la preparación de la consulta: " . $conn->error); } 

$stmt->bind_param("ssss", $Nnombre, $Napellido,$Ncorreo,$Ncontrasena); 

$stmt->execute();

$result = $stmt->get_result(); 

echo "Se ha creado el usuario con las siguientes credenciales:" . "<br>"."Nombre: ". $Nnombre. "Apellido: " . $Napellido . "Correo: " . $Ncorreo;

?>
