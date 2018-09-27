<?php
require_once('conexao.php');

?>

<!DOCTYPE html>
<html ng-app="myapp">
<head>

<script type="text/javascript" src="angular/angular.min.js"></script>


	<title></title>


</head>

<body>
    
 <div class="col-md-4"> 
            <div  ng-controller="usercontroller" ng-init="carregaUnidade()">  
             

       
                <hr>
                {{curso}}
                {{unidade.nomeUnidade}}

            {{coordenador}}
            




    <div id="seletor-cad">
                <h2>Como podemos</h2>
                <h1>AJUDAR VOCÊ?</h1>
                <h3>Selecione seu curso</h3>
                <hr>
                <div> 
                   <select name="unidade" ng-model="unidade" class="btn-cad" ng-change="carregaCursos()">  
                  <option value="">Selecione Unidade</option>  
                  <option ng-repeat="unidade in unidades track by unidade.nomeUnidade" value="{{unidade.idUnidade}}">{{unidade.nomeUnidade}}</option>  
             </select>  
                    
                </div>
                <br>
                <div>
                    <select name="curso" ng-model="curso" class="btncad" ng-change="carregaCoordenador()">  
                  <option value="">Selecione Curso</option>  
                  <option ng-repeat="curso in cursos " value="{{curso.idCurso}}">  
                       {{curso.nomeCurso}}  
                  </option>  
             </select>  
                </div>
                <hr>
                <span>Reponsavel pelo seu curso</span><br>
                <div ng-model="coord">
             
               <div ng-repeat="coord in coordenador ">  
                
                
                 <h3>{{coord.nomeCoordenador}}</h3>
                
           
                <div id="telefone-cad">{{coord.telefoneCoordenador}}</div>
                <br>
                <div id="email-cad">{{coord.emailCoordenador}}</div>
            </div>
                </div>
            </div>
        </div>



          </div>  
   
</body>
</html>
<script>  


 var app = angular.module("myapp",[]);  
 app.controller("usercontroller", function($scope, $http) {  
      $scope.carregaUnidade = function(){  
         $http({method: 'GET', url: 'carrega_unidade.php'}).then(function(success) {
            $scope.unidades = success.data;
       
        })      
      }  

$scope.carregaCoordenador = function(){
    const coUrl = 'carrega_coordenador.php?idUnidade=' + $scope.unidade + '&cursoCoordenador=' + $scope.curso
    $http({method:'GET', url: coUrl}).then(function(success){
        $scope.coordenador = success.data;
    })
}

  $scope.carregaCursos = function(){  
    const baseUrl ='carrega_cursos.php?idUnidade=' + $scope.unidade
         $http({method: 'GET', url: baseUrl}).then(function(success) {
            $scope.cursos = success.data;
       
        })      
      }  



 });  


 </script>
