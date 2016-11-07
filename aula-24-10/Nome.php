<?php

interface NomeResource{
    function manipular($id);
} 

class NomeResourcePOST implements NomeResource{
    
    public function manipular($id=0){
       $accept = $_SERVER["CONTENT_TYPE"];
        echo $accept;
        if($accept === "application/json"){
            $json = file_get_contents('php://input');
            $obj = json_decode($json);
            $ndao = new NomeDAO();
            $ndao->inserir($obj);
            echo "Ok!";
        }else{
            echo "Headers inválidos";
            http_response_code(400);
        }
    }
    public function __call($m, $arg){
        echo "$m nao achado para POST";
        http_response_code(404);
    }
    
}

class NomeResourceDELETE implements NomeResource{
    
    public function manipular($id=1){
      $ndao = new NomeDAO();
      $ndao->deletar($id);
    }
    public function __call($m, $arg){
        echo "$m nao achado para DELETE";
        http_response_code(404);
    }
}

class NomeResourcePUT implements NomeResource{
    public function manipular($id=1){
        $accept = $_SERVER["CONTENT_TYPE"];
        echo $accept;
        if($accept === "application/json"){
            $json = file_get_contents('php://input');
            $obj = json_decode($json);
            $ndao = new NomeDAO();
            $ndao->atualizar($id, $obj);
        }else{
            echo "TA metendo o loko parça. aqui só passa JSON.";
        }
    }
    
    public function __call($m, $arg){
        echo "$m nao achado para PUT";
        http_response_code(404);
    }
    
}

class NomeResourceGET implements NomeResource{
    
    public function manipular($id=1){
        $ndao = new NomeDAO();
        echo $ndao->getNome($id);
    }
    
    public function todos(){
        echo "Error";
        http_response_code(405);
    }
    
    public function __call($m, $arg){
        echo "$m nao achado para GET";
        http_response_code(404);
    }
}

class NomeResourceOPTIONS implements NomeResource{
    
    public function manipular($id){
      header('Allow: OPTIONS, GET, POST, DELETE, PUT');
    }
    
    public function todos(){
        //COLOCAR OS METODOS QUE RETORNAM RESPONSES POSITIVOS (NAO-ERRO)
        header('Allow: OPTIONS, GET');
    }
    public function __call($m, $arg){
        echo "$m nao achado para OPTIONS";
        http_response_code(404);
    }
}

?>