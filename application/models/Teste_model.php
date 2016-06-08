<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Teste_model extends CI_Model {

    public function do_insert($dados = NULL) {
        if ($dados != NULL):
            $this->db->trans_start();
            $this->db->insert('teste', $dados);
                echo $this->db->insert_id();
                $this->db->trans_complete();
        endif;
    }

    

}
