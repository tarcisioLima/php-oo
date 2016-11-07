<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <title> DISCIPLINA </title>
    <body>
        <form action="cadDisc" method="post">
            <label for="nome">Nome da disciplina</label>
            <input type="text" name="nome"><br>
            <label for="nome">Descrição da disciplina</label>
            <input type="text" name="descricao"><br>
            <input type="submit" value="enviar">
        </form>
    </body>
</html>
