<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DisciplinaModel extends CI_Model {
    private $nome, $descricao;
    
    public function __init__($nome, $descricao){
        $this->nome = $nome;
        $this->descricao = $descricao;
    }
    
    public function toArray(){
        $data = array();
        // get_object_vars($this) joga todos as variaveis e retorna um array associativo.
        $data["nome"] = $this->nome;
        $data["descricao"] = $this->descricao;
        return $data;
    }
}

?>