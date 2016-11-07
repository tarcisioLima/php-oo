<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class NomeModel extends CI_Model {
    // declarando o atributo como privado vc pode dar uma pele, enviando 
    // o array associativo, desta forma vc n envia direto ele publico.
    private $nm_login;
    
    public function __init__($nome){
        $this->nm_login = $nome;
    }
    
    public function toArray(){
        $data = array();
        $data["nm_login"] = $this->nm_login;
        return $data;
    }
    
    public function mostrar(){
        echo $this->nm_login;
    }
}



?>