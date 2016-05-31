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
        $this->load->model('Usuario_model', 'UsuarioDAO');
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

    public function create() {
        try {
            $dados = file_get_contents('php://input');
            $dados = json_decode($dados);
            $dados = array("nome" => $dados->nome, "dataNascimento" => $dados->dataNascimento, "sexo" => $dados->sexo, "avatar" => $dados->sexo, "dtype" => "usuario", "senha" => md5($dados->senha), "email" => $dados->email, "cpf" => $dados->cpf);
            $this->UsuarioDAO->getbyEmailAt($dados['email'], "usuario");
            $this->UsuarioDAO->getbyCpfAt($dados['cpf'], "usuario");
            $this->UsuarioDAO->insert($dados);
            echo json_encode(array("isSuccess" => true, "message" => "Dados registrados com exito!", "title" => IconsUtil::getIcone(IconsUtil::ICON_OK) . " Sucesso!"));
        } catch(EmailInvalidoExecption $eie){
            echo json_encode(array("isSuccess" => false, "message" => $eie->getMessage(),"title" =>IconsUtil::getIcone(IconsUtil::ICON_REMOVE) . " Falha!", "exception" => $eie));
        } catch(CpfInvalidoExecption $cie){
            echo json_encode(array("isSuccess" => false, "message" => $cie->getMessage(), "title" =>IconsUtil::getIcone(IconsUtil::ICON_REMOVE) . " Falha!", "exception" => $cie));
        } catch (Exception $e) {
            echo json_encode(array("isSuccess" => false, "message" => $e->getMessage(), "title" =>IconsUtil::getIcone(IconsUtil::ICON_REMOVE) . " Falha!", "exception" => $e));
        } 
    }

    public function cadastrar() {
        $dados = array(
            'titulo' => 'Bate-Papo Tecnológico',
            'tela' => 'usuario/cadastrar',
        );
        $this->load->view("exibirDados", $dados);
    }

}
