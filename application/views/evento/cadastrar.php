<script type="text/javascript">
    angular.element(document).ready(function () {
        componentHandler.upgradeAllRegistered();
    });

    var app = angular.module('myApp', ['ui.tinymce']);
    app.controller('formCtrl', function ($scope) {

        $scope.tinymceModel = 'Initial content';

        $scope.getContent = function () {
            $("#t").html($scope.tinymceModel);
            //console.log('Editor content:', $scope.tinymceModel);
            $.growl.notice({title: "Notificação", message: $scope.tinymceModel});
        };

        $scope.setContent = function () {
            $scope.tinymceModel = 'Time: ' + (new Date());
        };
        $scope.tinymceOptions = {
            selector: "textarea",
            theme: "modern",
            height: 400,
            language: 'pt_BR',
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
            ],
            toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
            toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
            image_advtab: true,
            external_filemanager_path: $scope.urlbase + "lib/filemanager/filemanager/",
            filemanager_title: "Responsive Filemanager",
            external_plugins: {"filemanager": $scope.urlbase + "lib/filemanager/filemanager/plugin.min.js"}
        };
    });

</script>

<div class="row" ng-controller="formCtrl">
    <form name="formEvento"  data-ng-submit="">
        <div class="col-md-3"></div>
        <div class="col-md-8">
            <h1 class="text-primary"> Cadastro de Eventos </h1>
            <hr>
            <div class="text-left">
                <h5 class="text-info"> Os campos com (*) são obrigatórios. </h5>
            </div>
            <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-2">
                    <button type="submit" ng-disabled="validaForm(formUsuario, usuario)" ng-click="openDialog(usuario)" type="button" class="btn btn-success btn-block"> <span class="glyphicon glyphicon-ok" aria-hidden="true"> </span> Próximo</button>
                    <!--<!button type="button" class="btn btn-danger btn-block"> <span class="glyphicon glyphicon-remove" aria-hidden="true"> </span> Cancelar</button> -->
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label" for="nome">Nome do Evento * </label>
                <input type="text" placeholder="Nome do Evento" class="form-control" name="nome" id="nome" data-ng-model="evento.nome"  value="{{ evento.nome}}" aria-describedby="inputError2Status" required>
                <span ng-show="formEvento.nome.$touched && formEvento.nome.$invalid" id="inputError2Status" class="sr-only">Preencha este campo!</span>
                <span ng-show="formEvento.nome.$touched && formEvento.nome.$invalid" class="glyphicon glyphicon-remove form-control-feedback text-danger"></span>
                <span class="text-danger" ng-show="formEvento.nome.$touched && formEvento.nome.$invalid">Campo Obrigatório!</span>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group has-feedback">
                        <label class="control-label" for="dataIncio">Data de Inicio * </label>
                        <input type="date" class="form-control" name="dataIncio" id="dataIncio" data-ng-model="evento.dataInicio"  aria-describedby="inputError2Status" placeholder="dd-mm-aaaa">
                        <span ng-show="formEvento.dataNascimento.$touched && formEvento.dataNascimento.$invalid" class="glyphicon glyphicon-remove form-control-feedback text-danger"></span>
                        <span class="text-danger" ng-show="formEvento.dataNascimento.$touched && formEvento.dataNascimento.$error.date">Campo Obrigatório!</span>
                        <span class="help-block"></span>
                    </div>
                </div>
            </div>
            <label class="control-label" for="detalhes">Detalhes * </label>
            <textarea id="destalhes" ui-tinymce="tinymceOptions" ng-model="detalhes"></textarea>
            <br/>
            <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-2">
                    <button type="submit" ng-disabled="validaForm(formUsuario, usuario)" ng-click="openDialog(usuario)" type="button" class="btn btn-success btn-block"> <span class="glyphicon glyphicon-ok" aria-hidden="true"> </span> Próximo</button>
                    <!--<!button type="button" class="btn btn-danger btn-block"> <span class="glyphicon glyphicon-remove" aria-hidden="true"> </span> Cancelar</button> -->
                </div>
            </div>

        </div>
        <div class="col-md-2"></div>
    </form>
</div>