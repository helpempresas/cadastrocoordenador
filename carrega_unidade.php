<?php  
require_once ("conexao.php");
 //load_country.php  
 
 $output = array();  
 $query = "SELECT * FROM tbl_unidade ORDER BY nomeUnidade ASC";  
 $result = mysqli_query($conn, $query);  
 while($row = mysqli_fetch_array($result))  
 {  
      $output[] = $row;  
 }  
 echo json_encode($output);  
 ?>  