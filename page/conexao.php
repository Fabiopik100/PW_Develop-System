<?php

$hostname = "localhost";
$bancodedados = "cadastro_develop";
$usuario = "root";
$senha = "";

$conexao = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($conexao->connect_errno) {
    die("Falha ao conectar: (" . $conexao->connect_errno . ")" . $conexao->connect_errno); 
}else 
<<<<<<< HEAD
 echo  "Conectado";
=======
 echo  "Cadastro Efetuado","<br>";
>>>>>>> 2222afd8872ef9136a62e3c0eac002638ce48578

?>


