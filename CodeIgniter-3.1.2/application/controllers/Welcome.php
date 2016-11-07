<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		// o segundo parametro representa o nome do objeto
		// que possui referencia de memoria do tipo NomeModel, ou seja, o
		// segundo eh o nome O NOME DO OBJETO DO TIPO NomeModel.
		$this->load->model('NomeModel','nome');
        $this->nome->init("Teste!");
		$this->nome->mostrar();
		$this->load->view('welcome_message');
	}
	
	public function teste(){
		$this->load->model('NomeModel','nm_login');
        $this->nm_login->__init__("Ayrton");
        // ORM - Object-Relational Mapping
        $b = $this->db->insert('tb_teste',$this->nm_login->toArray());
        echo "ACABOU! $b";
	}
	
	public function ola(){
		$this->load->view('ola');
		$sess = $this->session->userdata("nome");
		if(isset($sess)){
			echo $sess;
		}else{
			echo "Nao ha session";
		}
	}
	
	public function formulario(){
		$this->load->view('formulario');
	}
	
	public function postar(){
		$nome = $_POST['nome'];
		//HOJE NAO TEMOS OS MODEL 
		$dado["nm_login"] = $nome;
		$this->db->insert('tb_teste', $dado);
		echo "acabou";
	}
	
	public function outro(){
		$postagem = $this->input->post("nome");
		$this->session->set_userdata("nome", $postagem);
		
	}
}
