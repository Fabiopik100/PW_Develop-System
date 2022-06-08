<?php

include_once 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$sexo = $_POST['sexo'];

if($_POST['cadastrar']){
  $sql = "INSERT INTO cadastro_usuario(nome,email,telefone,senha,sexo) VALUES ('$nome','$email','$telefone', '$senha', '$sexo')";
  // $conexao = mysqli_connect($hostname, $usuario, $senha, $bancodedados);
  
  if (mysqli_query($conexao, $sql)) {
    echo "Informações confirmadas";
  } else {
    echo "Error: ".$sql."<br>".mysqli_error($conexao);
  }
  mysqli_close($conexao);

}
 ?>