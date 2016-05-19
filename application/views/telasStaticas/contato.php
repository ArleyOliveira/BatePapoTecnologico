<script>
    document.addEventListener('mdl-componentupgraded', function (e) {
        //In case other element are upgraded before the layout  
        if (typeof e.target.MaterialLayout !== 'undefined') {
            tinymce.init({
                selector: "textarea",
                height: 100,
                mode: "specific_textareas",
                editor_selector: "mceAdvanced",
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table contextmenu paste code'
                ],
                toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                content_css: [
                    '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
                    '//www.tinymce.com/css/codepen.min.css'
                ]
            });

        }
    });
</script>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8" ng-app="">
        <div ng-app="">
            <p>Input something in the input box:</p>
            <p>Name : <textarea type="text" ng-model="name" placeholder="Enter name here"></textarea></p>
            <h1 id="test">Hello</h1>
        </div>
        
        <div class="col-md-2"></div>

    </div>
    <script>
        $(document).ready(function () {
            $("#test").click(function () {
                $("#test").html("<b>Hello world!</b>"));
            });
        });
    </script>
