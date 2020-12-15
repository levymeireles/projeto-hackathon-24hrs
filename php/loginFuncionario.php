<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="../lib/bootstrap.css">
    <link rel="stylesheet" href="../css/login.css">
    <script type="text/javascript" src="../lib/jquery-3.4.0.min.js"></script>
    <script type="text/javascript" src="../js/loginFuncionario.js"></script>

</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card">
                    <div class="container">
                        <h1>Funcionário </h1>
                    </div>
                    <div class="card-body">
                        <form id="login" method="post" action="lib/concluir-login-funcionario.php" autocomplete="off">
                            <div class="form-group">
                                <label for="username">Usuário:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Senha:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="container botoes">
                                <input type="button" class="btn btn-primary" value="Voltar" id="id-voltar">
                                <input name="entrar" type="submit" class="btn btn-primary" value="Entrar" id="id-entrar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>