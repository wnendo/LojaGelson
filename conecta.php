<?php
$hostname = "localhost";
$user = "root";
$password = "";
$database = "loja";
$conexao = mysqli_connect($hostname, $user, $pass, $database);

if(!$conexao){
    print "Falha na conexão com o Banco de Dados";
}

