<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../estilo/login.css">
    <title>Login</title>
</head>

<body>
    <! -- Formulario de login com alterações usando a biblioteca do bootstrap -->
    <div class="container justify-content-center">
        <form class="p-3 mb-2 bg-primary text-white" name="form1" method="post" action="percorrer.php">
            <div class="campos">
                <h3>Login-Tk Lanches</h3>
               

                <input class="form-control" type="email" name="email" placeholder="exemplo@gmail.com" required><br>
                <input class="form-control" type="password" name="senha" placeholder="Senha" required><br><br>


            </div>

            <input id="botao" type="submit" value="Entrar" name="Entrar">
            <button type="button" id="botao"><a href="cadastro.php">Cadastrar-se</a></button>

        </form>
    </div>
</body>
</html>

