<?php


$servidor = "localhost";
$user = "root";
$senha = "";
$dbname = "coordenador";

$conn = mysqli_connect($servidor, $user, $senha, $dbname);
mysqli_set_charset($conn, 'utf8');


?>