<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class NomeModel extends CI_Model {
    public $nome;
    
    public function init($nome){
        $this->nome = $nome;
    }
    
    public function mostrar(){
        echo $this->nome;
    }
}



?>