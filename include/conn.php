<?php

$hostname_conex = "localhost";
$database_conex = "mototli_hackathon2022";
$username_conex = "mototli_bbva2022";
$password_conex = "Pruebastecmi1";
// creación de la conexión a la base de datos con mysql_connect()
$conn = mysqli_connect($hostname_conex, $username_conex, $password_conex, $database_conex) or 
die ("No se ha podido conectar al servidor de Base de datos"); 


?>
