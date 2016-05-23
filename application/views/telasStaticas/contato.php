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
        //var a = tinyMCE.get('texto').getContent();

    });
</script>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8" >
        <div>
            <p>Input something in the input box:</p>
            <p>Name : <textarea id="texto" type="text" placeholder="Enter name here"></textarea></p>
            
            <button type="button" id="btn" class="btn btn-success"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span>Ver Texto</button>
            <div id="result"></div>
        </div>
        <div class="col-md-2"></div>
    </div>


    <script>
        $(document).ready(function () {
            $("#btn").click(function () {
                $("#result").html(tinyMCE.get('texto').getContent());
            });
        });
    </script>