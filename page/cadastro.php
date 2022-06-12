<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../estilo/cadastro.css">
    <title>Cadastro</title>
</head>

<body>
        <div class="container justify-content-center"> 
            <form class="p-3 mb-2 bg-primary text-white" name="form1" method="post" action="processa.php">
                <h3>Cadastro</h3>
                <div class="campos">

                <label> Nome de Completo:</label> <input class="form-control" type="name" name="nome" placeholder="Nome" required><br>
                <label> Numero de Telefone:</label> <input class="form-control" type="tel" name="telefone" placeholder="Telefone" required><br>
                <label> Email:</label> <input class="form-control" type="Gmail" name="email" placeholder="exemplo@gmail.com" required><br>
                <label> Crie uma Senha Forte:</label><input class="form-control" type="password" name="senha" placeholder="Senha" required><br>
                sexo: <select name="sexo">
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                    <option value="I">Prefiro não dizer</option>
                </select>
                <br><br>
                </div>
               
                <input id="buttom" type="submit" value="Cadastrar" name="cadastrar">

                <button id="buttom"  name="voltar" > <a href="../index.php">Inicio</a> </button>
                <button id="buttom" name="consultar">Consultar</button>
    </div>


    </form>
</body>

</html>
