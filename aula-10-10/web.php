<?php
//Classe para efetuar conexão com o banco de dados
class Connection{
    //127.0.0.1, "Username: tarcisiolima", "", "db_webservice", 3306
    public static function getConn($ip, $login, $pass, $db, $porta){
        return mysqli_connect($ip, $login, $pass, $db, $porta);
    }
}

interface NomeResource{
    function manipular($id);
}

class NomeResourcePOST implements NomeResource{
    private $conn; //Variavel que possuirá a conexão
    
    public function __construct(){ //Realizar conexão no construtor
        $this->conn = Connection::getConn("127.0.0.1", "tarcisiolima", "", "db_web", 3306);
    }
    
    public function manipular($id=0){
        $json = file_get_contents('php://input'); 
        $obj = json_decode($json);
        $stmt = $this->conn->prepare("INSERT INTO tb_teste (nm_login) VALUES(?)") or die("2".$conn->error);
        $stmt->bind_param("s", $obj->nome) or die("3".$stmt->error);
        $stmt->execute() or die("4".$stmt->error);
    }
}

class NomeResourceGET implements NomeResource{
    private $conn;
    
    public function __construct(){
        $this->conn = Connection::getConn("127.0.0.1", "tarcisiolima", "", "db_web", 3306);
    }
    
    public function manipular($id=1){
        $st = $this->conn->prepare("SELECT * FROM tb_teste WHERE cd_login=?") or die("1".$conn->error);
        $st->bind_param("i",$id) or die("3".$stmt->error);
        $st->execute() or die("2".$st->error);
        $st->bind_result($col0,$col1);
        $st->fetch();
        echo $col1; 
    }
}
class NomeResourcePUT implements NomeResource{
     private $conn;
    
    public function __construct(){
        $this->conn = Connection::getConn("127.0.0.1", "tarcisiolima", "", "db_web", 3306);
    }
     public function manipular($id=0){
        $json = file_get_contents('php://input');
        $obj = json_decode($json);
        $stmt = $this->conn->prepare("UPDATE tb_teste set nm_login =(?) WHERE cd_login =?") or die("2".$conn->error);
        $stmt->bind_param("si", $obj->nome, $obj->id) or die("3".$stmt->error);
        $stmt->execute() or die("4".$stmt->error);
        echo "PUT, ATUALIZADO";
    }
}
class NomeResourceDELETE implements NomeResource{
     private $conn;
    
    public function __construct(){
        $this->conn = Connection::getConn("127.0.0.1", "tarcisiolima", "", "db_web", 3306);
    }
     public function manipular($id=0){
        $json = file_get_contents('php://input');
        $obj = json_decode($json);
        $stmt = $this->conn->prepare("DELETE FROM tb_teste WHERE cd_login =?") or die("2".$conn->error);
        $stmt->bind_param("i", $obj->id) or die("3".$stmt->error);
        $stmt->execute() or die("4".$stmt->error);
        echo "DELETE";
    }
}


$classe = $_GET["classe"];
$met = $_GET["met"];
$arg0 = $_GET["arg0"];
$httpM = $_SERVER["REQUEST_METHOD"];

//Aqui é utilizado o conceito de variavel variavel para instanciar um objeto.
//https://php-tarcisiolima.c9users.io/aula-10-10/web.php?classe=NomeResource&met=manipular&arg0=1
$nomeClasse = $classe . $httpM;
$chamador = new $nomeClasse();

if(isset($arg0))
    $chamador->manipular($arg0);
else
    $chamador->manipular();
?>