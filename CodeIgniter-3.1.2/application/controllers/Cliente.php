<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {
    
    public function cadastro(){
        $this->load->view('cad');
    }   
    
    public function inserir(){
        $dado["nome"]  = $this->input->post("nome");
        $dado["idade"] = $this->input->post("idade");
        $dado["cpf"]   = $this->input->post("cpf");
        
		$this->db->insert('cliente3', $dado);
		$this->load->view('sucCad',$dado);
    }
}

?>