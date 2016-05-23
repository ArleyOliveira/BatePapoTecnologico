<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos extends CI_Controller {

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
            'tela' => 'eventos',
        );
        $this->load->view("exibirDados", $dados);
    }
    
    public function cursoPHP() {
        $dados = array(
            'titulo' => 'Bate-Papo Tecnológico',
            'tela' => 'evento/cursoPHP',
        );
        $this->load->view("exibirDados", $dados);
    }
    
    public function cursoPYTHON() {
        $dados = array(
            'titulo' => 'Bate-Papo Tecnológico',
            'tela' => 'evento/cursoPYTHON',
        );
        $this->load->view("exibirDados", $dados);
    }

}
