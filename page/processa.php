<!DOCTYPE html>
<html>
<head>
    <style>


html, body{
	background-color: #0093E9;
	background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 50%, #5960b4 100%);
	height: 100%;
	width: 100%;
    
}
.cdtd{
  text-align: center;
	align-items: center;
	justify-content: center;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  font-size: 40px;
}
#buttom{
	border:none;
	cursor: pointer;

	background: gray;
	border-radius: 4px;
	background-color:aliceblue;
  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
  font-size: 40px;
}

    </style>
</head>
<div class="cdtd">

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
    echo "Obrigado Por Cadastrar-se";
    
  } else {
    echo "Error: ".$sql."<br>".mysqli_error($conexao);
  }
  mysqli_close($conexao);

}
 ?>

 <br>
 <br>
 <button id="buttom"  name="voltar" > <a href="../index.php">Concluir</a> </button>
 </div>

</html>