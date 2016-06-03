<!DOCTYPE html>
<!--[if lte IE 9]>
<html lang="en" class="oldie">
<![endif]-->
<!--[if gt IE 9]><!-->
<html lang="pt-br">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#3b4ba7">

        <link REL="SHORTCUT ICON" HREF="<?php echo base_url('icon/icon.ico') ?>">
        
        <!-- Jquery -->
        <script src="<?php echo base_url('lib/jquery/jquery-2.1.4.min.js') ?>" type="text/javascript"></script>
       
        <!-- Angular JS-->
        <script src="<?php echo base_url('lib/angular/angular.js') ?>"></script>

        <!-- Puglin para edição de texto -->
        <script src="<?php echo base_url('lib/tinymce/tinymce.min.js') ?>"></script>
        <script src="<?php echo base_url('lib/tinymce/tinymce.js') ?>"></script>
        
        <!-- MDL -->
        <script src="<?php echo base_url('lib/mdl/material.min.js') ?>"></script>    
        <link rel="stylesheet" href="<?php echo base_url('lib/mdl/material.min.css') ?>">  
        <link rel="stylesheet" href="<?php echo base_url('lib/mdl/font.css') ?>">
        <!--<link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons"> -->

         <!-- Plugin for modal in Jquery and MDL -->
        <script src="<?php echo base_url('lib/jquerymodal/mdl-jquery-modal-dialog.js') ?>"></script>    
        <link rel="stylesheet" href="<?php echo base_url('lib/jquerymodal/mdl-jquery-modal-dialog.css') ?>">  
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url('lib/bootstrap/css/bootstrap.min.css') ?>">
        <script src="<?php echo base_url('lib/bootstrap/js/bootstrap.min.js') ?>"></script>
        
        <!-- Growl -->
        <link rel="stylesheet" href="<?php echo base_url('lib/jquerygrowl/jquery.growl.css') ?>">
        <script src="<?php echo base_url('lib/jquerygrowl/jquery.growl.js') ?>"></script> 

        
        <!-- My Style-->
        <link rel="stylesheet" href="<?php echo base_url('lib/mystyle/style.css') ?>">

       
        <title> <?php echo $titulo; ?> </title>

        <style type="text/css">
            object[type^=application]{ display: none;}
        </style>
    </head>
    <body ng-app="myApp" ng-init="urlbase = '<?php echo site_url() ?>'">