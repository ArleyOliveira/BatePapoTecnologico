<script src="<?php echo base_url('lib/angularApplications/createUser.js') ?>"></script>
<div class="row" ng-controller="formCtrl">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h1 class="text-primary"> Registre-se! </h1>
        <hr>
        <div class="thumbnail">
            <!-- MDL Spinner Component -->   
            <form name="formUsuario"  data-ng-submit="">
                <!--nome-->
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-8">
                        <div class="text-left">
                            <h5 class="text-info"> Os campos com (*) são obrigatórios. </h5>
                        </div>
                        <div class="form-group has-feedback">
                            <label class="control-label" for="nome">Nome * </label>
                            <input type="text" placeholder="Nome" class="form-control" name="nome" id="nome" data-ng-model="usuario.nome"  value="{{ usuario.nome}}" aria-describedby="inputError2Status" required>
                            <span ng-show="formUsuario.nome.$touched && formUsuario.nome.$invalid" id="inputError2Status" class="sr-only">Preencha este campo!</span>
                            <span ng-show="formUsuario.nome.$touched && formUsuario.nome.$invalid" class="glyphicon glyphicon-remove form-control-feedback text-danger"></span>
                            <span class="text-danger" ng-show="formUsuario.nome.$touched && formUsuario.nome.$invalid">Campo Obrigatório!</span>
                            <span class="help-block" ng-model="urlbase"></span>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <!-- CPF -->
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="cpf">CPF * </label>
                            <input type="text" placeholder="CPF" class="form-control" name="cpf" id="cpf" data-ng-model="usuario.cpf"  value="{{ usuario.cpf}}" aria-describedby="inputError2Status" data-ng-pattern="/^[0-9]{11,11}$/i" cpf-directive required>
                            <span ng-show="formUsuario.cpf.$touched && !formUsuario.cpf.$valid" class="glyphicon glyphicon-remove form-control-feedback text-danger" aria-hidden="true"></span>
                            <span ng-show="formUsuario.cpf.$valid" class="glyphicon glyphicon-ok form-control-feedback text-success" aria-hidden="true"></span>
                            <span class="text-danger" ng-show="formUsuario.cpf.$touched && formUsuario.cpf.$error.required && !formUsuario.cpf.$valid">Campo Obrigatório!</span>
                            <span class="error text-danger" data-ng-show="formUsuario.cpf.$touched && !formUsuario.cpf.$valid">CPF Inválido, são permitidos apenas números com 11 digitos</span>
                            <!--
                            <span> touched {{formUsuario.cpf.$touched}} </span>
                            <span> pattern {{formUsuario.cpf.$error.pattern}} </span>
                            <span> valid {{formUsuario.cpf.$valid}} </span>
                            <span class="help-block"></span>-->
                        </div> <!-- div col-md-8-->
                    </div>
                    <div class="col-md-3"></div>
                </div> <!--/ row-->

                <!-- Data Nascimento -->
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="dataNascimento">Data Nascimento * </label>
                            <input type="date" class="form-control" name="dataNascimento" id="dataNascimento" data-ng-model="usuario.dataNascimento"  aria-describedby="inputError2Status" placeholder="dd-mm-aaaa">
                            <span ng-show="formUsuario.dataNascimento.$touched && formUsuario.dataNascimento.$invalid" class="glyphicon glyphicon-remove form-control-feedback text-danger"></span>
                            <span class="text-danger" ng-show="formUsuario.dataNascimento.$touched && formUsuario.dataNascimento.$error.date">Campo Obrigatório!</span>
                            <span class="help-block"></span>

                        </div>
                    </div><!--/ col-md-6 conteúdo-->
                    <div class="col-md-2"></div>
                </div><!-- /row -->

                <!-- Sexo -->
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-6">
                        <label class="control-label" for="sexo">Sexo * </label> <br />

                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="masculino">
                            <input type="radio" id="masculino" ng-model="usuario.sexo" value="Masculino" class="mdl-radio__button" name="sexo" checked>
                            <span class="mdl-radio__label">Masculino</span>
                        </label>
                        &nbsp; &nbsp;
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="feminino">
                            <input type="radio" id="feminino" ng-model="usuario.sexo" value="Feminino" class="mdl-radio__button" name="sexo">
                            <span class="mdl-radio__label">Feminino</span>
                        </label>
                        <br /> <br />
                    </div><!--/ col-md-6 conteúdo-->
                    <div class="col-md-2"></div>
                </div><!-- /row -->

                <!-- Email -->
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-8">

                        <div class="form-group has-feedback">
                            <label class="control-label" for="email">Email *</label>
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input data-ng-model="usuario.email" placeholder="Email" value="{{ usuario.email}}" type="email" name="email" class="form-control" id="email" aria-describedby="inputGroupSuccess1Status" required>
                            </div>
                            <span ng-show="formUsuario.email.$dirty && !formUsuario.email.$invalid" class="glyphicon glyphicon-ok form-control-feedback text-success" aria-hidden="true"></span>
                            <span ng-show="formUsuario.email.$touched && formUsuario.email.$invalid" class="glyphicon glyphicon-remove form-control-feedback text-danger" aria-hidden="true"></span>
                            <span class="text-danger" ng-show="formUsuario.email.$touched && formUsuario.email.$error.required">Campo Obrigatório!<br /> </span>
                            <span class="text-danger" ng-show="formUsuario.email.$touched && formUsuario.email.$error.email"> Endereço de email inválido!</span>
                        </div>
                    </div><!--/ col-md-6 conteúdo-->
                    <div class="col-md-2"></div>
                </div><!-- /row -->
                <!-- Senha-->
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="senha">Senha * </label>
                            <input type="password" placeholder="Senha" class="form-control" name="senha" id="senha" data-ng-model="usuario.senha"  value="{{ usuario.senha}}" data-ng-pattern="/^{6,6}$/i" aria-describedby="inputError2Status" ng-minlength="8" required>
                            <span ng-show="formUsuario.senha.$touched && formUsuario.senha.$invalid" id="inputError2Status" class="sr-only">Preencha este campo!</span>
                            <span ng-show="formUsuario.senha.$touched && formUsuario.senha.$invalid" class="glyphicon glyphicon-remove form-control-feedback text-danger"></span>
                            <span class="text-danger" ng-show="formUsuario.senha.$touched && formUsuario.senha.$invalid">Campo Obrigatório!</span>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>

                <!-- Repita a Senha-->
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="repitaSenha">Repita a senha * </label>
                            <input type="password" placeholder="Repita a senha" class="form-control" name="repitaSenha" id="nome" ng-keydown="verificarSenha(usuario.senha, usuario.repitaSenha)" data-ng-model="usuario.repitaSenha"  value="{{ usuario.repitaSenha}}" aria-describedby="inputError2Status"  ng-minlength="8" required>
                            <span ng-show="formUsuario.repitaSenha.$touched && formUsuario.repitaSenha.$invalid" id="inputError2Status" class="sr-only">Preencha este campo!</span>
                            <span ng-show="formUsuario.repitaSenha.$touched && formUsuario.repitaSenha.$invalid" class="glyphicon glyphicon-remove form-control-feedback text-danger"></span>
                            <span class="text-danger" ng-show="formUsuario.repitaSenha.$touched && formUsuario.repitaSenha.$invalid">Campo Obrigatório!</span>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>

                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <button type="submit" ng-disabled="validaForm(formUsuario, usuario)" ng-click="openDialog(usuario)" type="button" class="btn btn-success btn-block"> <span class="glyphicon glyphicon-ok" aria-hidden="true"> </span> Salvar</button>
                        <!--<!button type="button" class="btn btn-danger btn-block"> <span class="glyphicon glyphicon-remove" aria-hidden="true"> </span> Cancelar</button> -->
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker5').datetimepicker({
            defaultDate: "11/1/2013",
            disabledDates: [
                moment("12/25/2013"),
                new Date(2013, 11 - 1, 21),
                "11/22/2013 00:53"
            ]
        });
    });
</script>