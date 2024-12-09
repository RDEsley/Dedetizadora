<?php
include('../conexao/conexao.php');

if (isset($_POST['email']) || isset($_POST['senha'])) {

    if (strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $conn->real_escape_string($_POST['email']);
        $senha = $conn->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");
        } else {

            echo "Falha ao logar! E-mail ou senha incorretos";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https:>//fonts.googleapis.com/css2?family=inter:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/styles/style-log.css">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <title>Dedetizadora|Login</title>
</head>

<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="" method="POST">
            <div class="input-container">
                <label for="email">Seu Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-container">
                <label for="password">Sua Senha</label>
                <input type="password" id="password" name="senha" required>
            </div>

            <button> Entrar </button>

            <br>
            <a href="/src/views/index.html">Início</a>
            <br>
            <a href="/src/views/cadastrarV2.php">Cadastrar-se</a>
            <br>
            <a href="/src/views/login-adm.php">Entrar como Admin</a>

        </form>
    </div>
</body>

</html>