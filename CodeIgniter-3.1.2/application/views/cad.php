<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <title> CADASTRO BANCO </title>
    <body>
        <form action="inserir" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome"><br>
            <label for="idade">Idade</label>
            <input type="number" name="idade"><br>
            <label for="cpf">Cpf</label>
            <input type="number" name="cpf"><br>
            <input type="submit" value="enviar">
        </form>
    </body>
</html>
