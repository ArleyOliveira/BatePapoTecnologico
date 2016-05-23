<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('array');
        $this->load->library('table');
    }

   /*
    public function index() {
        $dados = array(
            'titulo' => 'Bate-Papo Tecnológico',
            'tela' => 'usuario/cadastrar',
        );
        $this->load->view("exibirDados", $dados);
    }
   */
    
    public function cadastrar(){
        $dados = array(
            'titulo' => 'Bate-Papo Tecnológico',
            'tela' => 'usuario/cadastrar',
        );
        $this->load->view("exibirDados", $dados);
    }

}
