<?php

require_once "model/NomeDAO.php";
require_once "Nome.php";
require_once "model/Fabrica.php";

$classe = $_GET["classe"];
$met = $_GET["met"];
$arg0 = $_GET["arg0"];
$httpM = $_SERVER["REQUEST_METHOD"];

$nomeClasse = ucfirst($classe . "Resource" . $httpM);
$chamador = new $nomeClasse();
if(isset($arg0))
    $chamador->$met($arg0);
else
    $chamador->$met();
    
// exemplo rota: GET
// https://php-tarcisiolima.c9users.io/aula-24-10/web.php?classe=nome&met=manipular&arg0=5
?>

