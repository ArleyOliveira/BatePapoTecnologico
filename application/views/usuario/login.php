
<style type="text/css">
    .login-page {
        width: 360px;
        padding: 8% 0 0;
        margin: auto;
    }
    .form {
        position: relative;
        z-index: 1;
        background: #FFFFFF;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }
    .form input {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 0px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
    }
    .form button {
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #4CAF50;
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
    }
    .form button:hover,.form button:active,.form button:focus {
        background: #43A047;
    }
    .form .message {
        margin: 15px 0 0;
        color: #b3b3b3;
        font-size: 12px;
    }
    .form .message a {
        color: #4CAF50;
        text-decoration: none;
    }
    .form .register-form {
        display: none;
    }
    .container {
        position: relative;
        z-index: 1;
        max-width: 300px;
        margin: 0 auto;
    }
    .container:before, .container:after {
        content: "";
        display: block;
        clear: both;
    }
    .container .info {
        margin: 50px auto;
    }
    .container .info h1 {
        margin: 0 0 15px;
        padding: 0;
        font-size: 36px;
        font-weight: 300;
        color: #1a1a1a;
    }
    .container .info span {
        color: #4d4d4d;
        font-size: 12px;
    }
    .container .info span a {
        color: #000000;
        text-decoration: none;
    }
    .container .info span .fa {
        color: #EF3B3A;
    }
    body {
        font-family: "Roboto", sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;      
    }
    .marginTop{
        margin-top: -20px;
        margin-bottom: 20px;
        margin-left: 5px;
    }
</style>
<script src="<?php echo base_url('lib/angularApplications/angular-md5.js') ?>"></script>
<script>
    var app = angular.module('myApp', ['angular-md5']);
    app.controller('formCtrl', function ($scope, $http, md5) {
        $scope.salvar = function (email, senha) {
            $scope.login.senha = md5.createHash(senha);
            $scope.login.email = email;
            $http({
                method: "POST",
                url: $scope.urlbase + "WSUsuario/login",
                data: $scope.login
            }).then(function mySucces(response) {
                if (response.data.isSuccess) {
                $.growl.notice({title: response.data.title, message: response.data.message});
            } else {
                $.growl.error({title: response.data.title, message: response.data.message});
            }
            }, function myError(response) {
                $.growl.error({title: "Erro desconhecido!", message: "Falha ao se conectar com o servidor."});
            });
        };
    });
</script>
<div class="row" ng-controller="formCtrl" ng-init="login = {email:'', senha:'', application: 'web'}">
    
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h2 class="text-primary text-center" > Entre e participe do nosso projeto!</h2>
        <hr>
        <div class="login-page">
            <div class="form">
                <form class="login-form" name="formUsuario">
                    <input data-ng-model="email" placeholder="E-mail" value="{{email}}" id="email" type="email" name="email" required/>
                    <span class="marginTop">
                        <span class="text-danger marginTop" ng-show="formUsuario.email.$touched && formUsuario.email.$invalid">Campo Obrigatório!</span>
                    </span>


                    <input type="password" placeholder="Senha" name="senha" id="senha" data-ng-model="senha"  value="{{senha}}" required/>
                    <span class="marginTop">
                        <span class="text-danger marginTop" ng-show="formUsuario.senha.$touched && formUsuario.senha.$invalid">Campo Obrigatório!</span>
                    </span>
                    <button type="submit" ng-disabled="formUsuario.email.$invalid || formUsuario.senha.$invalid" ng-click="salvar(email, senha)">Entrar</button>
                    <p class="message">Não é registrado? <a href="<?php echo base_url("usuario/cadastrar") ?>">Crie sua conta</a></p>
                </form>
            </div>
        </div>
    </div>
</div>
