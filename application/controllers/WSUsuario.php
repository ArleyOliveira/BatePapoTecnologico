<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class WSUsuario extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->helper('url');
        $this->load->model('Usuario_model', 'UsuarioDAO');
    }

    public function getAll() {
        echo json_encode($this->UsuarioDAO->getAll());
    }

    public function login() {
        try {
            $login = json_decode(file_get_contents('php://input'));
            $usuario = $this->UsuarioDAO->login($login->email, $login->senha); 
            if ($login->application === "web") {
                $this->session->set_userdata($usuario);
                echo json_encode(array("isSuccess" => true, "message" => "Login efetuado com sucesso!", "title" => " Secesso!"));
            } else if ($login->application === "mobile") {
                echo json_encode(array("isSuccess" => true, "data" => json_encode($usuario)));
            }
        } catch (DadosInvalidoExecption $die) {
            echo json_encode(array("isSuccess" => false, "message" => $die->getMessage(), "title" => " Falha!", "exception" => $die));
        } catch (LoginInvalidoExecption $lie) {
            echo json_encode(array("isSuccess" => false, "message" => $lie->getMessage(), "title" => " Falha!", "exception" => $lie));
        }
    }

    public function create() {
        try {
            $dados = file_get_contents('php://input');
            $dados = json_decode($dados);
            $dados = array("nome" => $dados->nome, "dataNascimento" => $dados->dataNascimento, "sexo" => $dados->sexo, "avatar" => $dados->sexo . ".jpg", "dtype" => "usuario", "senha" => md5($dados->senha), "email" => $dados->email, "cpf" => $dados->cpf);
            $this->UsuarioDAO->getbyEmailAt($dados['email'], "usuario");
            $this->UsuarioDAO->getbyCpfAt($dados['cpf'], "usuario");
            $this->UsuarioDAO->insert($dados);
            echo json_encode(array("isSuccess" => true, "message" => "Dados registrados com exito!", "title" => IconsUtil::getIcone(IconsUtil::ICON_OK) . " Sucesso!"));
        } catch (EmailInvalidoExecption $eie) {
            echo json_encode(array("isSuccess" => false, "message" => $eie->getMessage(), "title" => IconsUtil::getIcone(IconsUtil::ICON_REMOVE) . " Falha!", "exception" => $eie));
        } catch (CpfInvalidoExecption $cie) {
            echo json_encode(array("isSuccess" => false, "message" => $cie->getMessage(), "title" => IconsUtil::getIcone(IconsUtil::ICON_REMOVE) . " Falha!", "exception" => $cie));
        } catch (Exception $e) {
            echo json_encode(array("isSuccess" => false, "message" => $e->getMessage(), "title" => IconsUtil::getIcone(IconsUtil::ICON_REMOVE) . " Falha!", "exception" => $e));
        }
    }

}
