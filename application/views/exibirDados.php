<?php

$this->load->view('telasUteis/header');
if ($tela != '')
    $this->load->view($tela);
$this->load->view('telasUteis/footer');
