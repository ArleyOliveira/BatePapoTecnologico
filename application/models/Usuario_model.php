<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

    public function insert($dados = NULL) {
        $pessoa = array("nome" => $dados['nome'], "dataNascimento" => $dados['dataNascimento'], "sexo" => $dados['sexo'], "avatar" => $dados['sexo'], "dtype" => $dados['dtype']);
        $usuario = array("codigo" => NULL, "cpf" => $dados['cpf'], "senha" => $dados['senha'], "email" => $dados['email']);
        if ($pessoa != NULL):
            $this->db->trans_start();
            $this->db->insert('pessoa', $pessoa);
            $usuario['codigo'] = $this->db->insert_id();
            $this->db->insert('usuario', $usuario);
            $this->db->trans_complete();
            return true;
        endif;
    }

    public function do_delete($condicao = NULL) {

        if ($condicao != NULL):
            $this->db->delete('usuario', $condicao);
            $this->session->set_flashdata('excluirok', IconsUtil::getIcone(IconsUtil::ICON_OK) . ' Registro deletado com sucesso!');
        endif;
    }

    public function getAll() {
        return $this->db->get('consultaUsuario')->result();
    }

    public function login($email = NULL, $senha = NULL) {
        if ($email != NULL && $senha != NULL):
            $sql = "SELECT * FROM consultaUsuario WHERE email = ? AND senha = ?";
            $query = $this->db->query($sql, array($email, $senha));
            if ($query->num_rows() > 0 && $query->num_rows() === 1):
                $usuario = NULL;
                foreach ($query->result() as $linha):
                    $usuario = array (
                        'nome' => $linha->nome,
                        'email' => $linha->email,
                        'sexo' => $linha->sexo,
                        'isAdmin' => $linha->isAdmin,
                        'isModerado' => $linha->isModerador,
                        'avatar' => $linha->avatar,
                        'cpf' => $linha->cpf,
                        'dtype' => $linha->dtype,
                    );
                endforeach;
                return $usuario;
            else:
                throw new LoginInvalidoExecption("Email ou senha invalidos!");
            endif;
        else:
            throw new DadosInvalidoExecption("Os dados informados são invalidos!");
        endif;
    }

    public function getbyEmailAt($email = NULL, $tabela = NULL) {
        if ($email != NULL && $tabela != NULL):
            $this->db->where('email', $email);
            $this->db->limit(1);
            $query = $this->db->get($tabela);
            if ($query->num_rows() > 0):
                throw new EmailInvalidoExecption("E-mail já esta sendo usado!");
            endif;
        else:
            throw new Exception("Dados invalidos");
        endif;
    }

    public function getbyCpfAt($cpf = NULL, $tabela = NULL) {
        if ($cpf != NULL && $tabela != NULL):
            $this->db->where('cpf', $cpf);
            $this->db->limit(1);
            $query = $this->db->get($tabela);
            if ($query->num_rows() > 0):
                throw new CpfInvalidoExecption("Cpf já cadastrado");
            endif;
        else:
            throw new Exception("Dados invalidos");
        endif;
    }

    public function do_update($dados = NULL, $condicao = NULL) {
        if ($dados != NULL && $condicao != NULL):
            $this->db->update('usuario', $dados, $condicao);
            $this->session->nome = $dados['nome'];
            $this->session->set_flashdata('edicaook', IconsUtil::getIcone(IconsUtil::ICON_OK) . ' Dados alterado com sucesso!');
            redirect('usuario/update/');
        endif;
    }

    public function do_updatepassword($dados = NULL, $condicao = NULL) {
        
    }

}

;
