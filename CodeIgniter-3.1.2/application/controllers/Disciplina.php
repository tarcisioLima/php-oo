<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disciplina extends CI_Controller{
    
    public function frm(){
		$this->load->view('frm');
	}
    public function cadDisc(){
        $this->load->model('DisciplinaModel','disc');
        
        $nome      = $this->input->post("nome");
	    $descricao = $this->input->post("descricao");
	    
        $this->disc->__init__($nome, $descricao);
        // ORM - Object-Relational Mapping
        $b = $this->db->insert('tb_disciplina', $this->disc->toArray());
        echo "INSERIDO! $b";
    }
    
      public function perfil($id){
        echo $id;
        $this->load->model('DisciplinaModel','disc');
        $query = $this->db->query("SELECT * FROM tb_disciplina where id=$id;");
        $disciplina = $query->result('disciplina');
        $data["nome"] = $disciplina[0]->nome;
        $data["descr"] = $disciplina[0]->descricao;
        $this->load->view('perfil', $data);
        //var_dump($disciplina[0]);
    }
}

?>