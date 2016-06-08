<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script>
var app = angular.module('myApp', []);

app.controller('myCtrl', function ($scope, $http) {
     $http({
            method: "GET",
            url: $scope.urlbase + "WSUsuario/getAll"
        }).then(function mySucces(response) {
            $scope.usuarios = response.data;
        }, function myError(response) {
           
        });
   
});
</script>

<div ng-controller="myCtrl"> 
    <table class="table table-striped table-responsive">
        <tr>
            <th> Nome </th>
            <th> Data Nascimento </th>
            <th> CPF </th>
        </tr>
        <tr ng-repeat="x in usuarios">
            <td> {{x.nome}} </td>
            <td> {{x.dataNascimento}} </td>
            <td> {{x.cpf}} </td>
        </tr>
    </table>
</div>