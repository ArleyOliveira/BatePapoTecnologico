<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('array');
        $this->load->library('table');
    }

   
    public function index() {
        $dados = array(
            'titulo' => 'Bate-Papo Tecnológico',
            'tela' => 'telasStaticas/inicio',
        );
        $this->load->view("exibirDados", $dados);
    }
    
    public function info() {
        $dados = array(
            'titulo' => 'Bate-Papo Tecnológico',
            'tela' => 'telasStaticas/informacoes',
        );
        $this->load->view("exibirDados", $dados);
    }
    
    public function sobre() {
        $dados = array(
            'titulo' => 'Bate-Papo Tecnológico',
            'tela' => 'telasStaticas/sobre',
        );
        $this->load->view("exibirDados", $dados);
    }
    
    public function organizacao() {
        $dados = array(
            'titulo' => 'Bate-Papo Tecnológico',
            'tela' => 'telasStaticas/organizacao',
        );
        $this->load->view("exibirDados", $dados);
    }
    
    public function eventos() {
        $dados = array(
            'titulo' => 'Bate-Papo Tecnológico',
            'tela' => 'telasStaticas/eventos',
        );
        $this->load->view("exibirDados", $dados);
    }

    public function contato() {
        $dados = array(
            'titulo' => 'Bate-Papo Tecnológico',
            'tela' => 'telasStaticas/contato',
        );
        $this->load->view("exibirDados", $dados);
    }
}
