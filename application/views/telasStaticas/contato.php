
<script type="text/javascript">
    angular.element(document).ready(function () {
        componentHandler.upgradeAllRegistered();
    });

    var myAppModule = angular.module('myApp', ['ui.tinymce']);
    myAppModule.controller('TinyMceController', function ($scope) {

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

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 mdl-layout" >
        <form ng-controller="TinyMceController">
            <textarea id="descricao" ui-tinymce="tinymceOptions" ng-model="tinymceModel"></textarea>
            <button ng-click="getContent()" class="btn btn-primary">Get content</button>
            <button ng-click="setContent()" class="btn btn-info">Set content</button>


            <span id="t">{{tinymceModel}}</span>
        </form>
    </div>
    <div class="col-md-2"></div>
</div>
