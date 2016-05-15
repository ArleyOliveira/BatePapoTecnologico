<?php
$this->load->view('telasUteis/header');
$this->load->view('telasUteis/menubar');
if ($tela != '')
    $this->load->view($tela);
$this->load->view('telasUteis/footer');
