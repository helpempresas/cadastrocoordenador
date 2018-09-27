<?php  
require_once ("conexao.php");
 //load_country.php  
 
$output = array();  
$post = json_decode(file_get_contents("php://input"));
$data = json_decode(json_encode($post),true);
$idUnidade = $_GET["idUnidade"];
$cursoCoordenador = $_GET["cursoCoordenador"];
 $query = "SELECT * FROM tbl_coordenador where unidadeCoordenador = ".$idUnidade." AND cursoCoordenador = ".$cursoCoordenador." ORDER BY nomeCoordenador ASC";  
 $result = mysqli_query($conn, $query);  
 while($row = mysqli_fetch_array($result))  
 {  
      $output[] = $row;  
 }  
 echo json_encode($output);  

 ?>  