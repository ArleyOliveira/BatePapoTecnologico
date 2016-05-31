<div class="row" ng-app="myApp">
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
            $.growl.notice({ title: "Notificação", message: $scope.tinymceModel });
        };
        
        $scope.setContent = function () {
            $scope.tinymceModel = 'Time: ' + (new Date());
        };
        $scope.tinymceOptions = {
            height: 300,
            language: 'pt_BR',
            mode: "exact",
            editor_selector: "mceAdvanced",
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table contextmenu paste code'
            ],
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            content_css: [
                '//192.168.0.103/BatePapo/lib/tinymce/font/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
                '//192.168.0.103/BatePapo/lib/tinymce/font/codepen.min.css'
            ]
        };
    });
    
    
</script>

<script type="text/javascript">
  $.growl({ title: "Growl", message: "The kitten is awake!" });
  $.growl.error({ message: "The kitten is attacking!" });
  $.growl.notice({ message: "The kitten is cute!" });
  $.growl.warning({ message: "The kitten is ugly!" });
</script>