<?php
function Conectar(){
    try{
        $opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
        $con = new PDO("mysql:host=localhost; dbname=coordenador;", "root", "", $opcoes);
        return $con;
    } catch (Exception $e){
        echo 'Erro: '.$e->getMessage();
        return null;
    }
}

$servidor = "localhost";
$user = "root";
$senha = "";
$dbname = "coordenador";

$conn = mysqli_connect($servidor, $user, $senha, $dbname);
mysqli_set_charset($conn, 'utf8');


?>