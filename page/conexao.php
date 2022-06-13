<?php

$hostname = "localhost";
$bancodedados = "cadastro_develop";
$usuario = "root";
$senha = "";

$conexao = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($conexao->connect_errno) {
    die("Falha ao conectar: (" . $conexao->connect_errno . ")" . $conexao->connect_errno); 
}else 
 echo  "Cadastro Efetuado","<br>";

?>


