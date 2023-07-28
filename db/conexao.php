<?php
require("config.php");

$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO) or
    die("ERRO AO CONECTAR NO BANCO DE DADOS" . mysqli_connect_error());

?>