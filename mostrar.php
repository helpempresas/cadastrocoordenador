<?php
require_once('conexao.php');
$query_unidade = "SELECT * FROM tbl_unidade ORDER BY nomeUnidade";
$resultado_unidade = mysqli_query  ($conn, $query_unidade);
?>

<!DOCTYPE html>
<html ng-app="myapp">
<head>

<script type="text/javascript" src="angular/angular.min.js"></script>
<script>  


 var app = angular.module("myapp",[]);  
 app.controller("usercontroller", function($scope, $http) {  
      $scope.carregaUnidade = function(){  
         $http({method: 'GET', url: 'carrega_cursos.php'}).then(function(success) {
            $scope.unidades = success.data;
       
        })      
      }  




      $scope.carregaCursos = function(){  
          $http({method: 'GET', url: 'carrega_cursos.php'}).then(function(success) {
            $scope.cursos = success.data;
          
        })      
      }  


 });  


 </script>

	<title></title>


</head>

<body>
    
 <div class="col-md-4"> 
            <div  ng-controller="usercontroller" ng-init="carregaUnidade()">  
             
                {{unidades}}
       
                <hr>
{{cursos}}
           
             <select name="unidade" ng-model="unidade" class="form-control" ng-change="carregaCursos()">  
                  <option value="">Selecione Unidade</option>  
                  <option ng-repeat="unidade in unidades track by unidade.nomeUnidade" value="{{unidade.idUnidade}}">{{unidade.nomeUnidade}}</option>  
             </select>  
             {{cursos}}
             <br />  
             <select name="curso" ng-model="curso" class="form-control" >  
                  <option value="">Selecione Curso</option>  
                  <option ng-repeat="curso in cursos " value="{{curso.idCurso}}">  
                       {{curso.nomeCurso}}  
                  </option>  
             </select>  
          </div>  
    
</body>
</html>
