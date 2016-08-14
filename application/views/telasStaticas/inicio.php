<?php
if ($this->session->flashdata('acessoInvalido')):
?>
    <script>
        $.growl.notice({title: "Acesso invalido!", message: <?php echo $this->session->flashdata('acessoInvalido'); ?>});
    </script>
<?php
endif;
?>
<h3>Texto sobre informações relavantes para inicio do site</h3>
