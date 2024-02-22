<?php
include('conexion.php');
$nom = $_POST['nom'];
$apel = $_POST['apel'];
$ced = $_POST['ced'];
$dir = $_POST['dir'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$cont = $_POST['cont'];


$consulta = "INSERT INTO tabla_aquistore VALUES ('$nom','$apel','$ced','$dir','$tel','$email','$cont')";
mysqli_query ($conn, $consulta);
header("location: registrarme.html");

?>