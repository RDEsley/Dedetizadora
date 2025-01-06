<?php
include("../conexao/conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['acao']) && $_POST['acao'] == "cadastrar") {
    // Recuperar os dados do formulário e prevenir SQL Injection
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Hash da senha

    // Query usando prepared statements
    $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $senha);

    // Executar a query
    if ($stmt->execute()) {
        // Redirecionar para index.php após cadastro
        header("Location: index.php");
        exit();
    } else {
        echo "Erro: " . $stmt->error;
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
    <link href="https://fonts.googleapis.com/css2?family=inter:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="../../assets/styles/style-log.css">
    <title>Dedetizadora|Login</title>
</head>

<body>
    <div class="login-container">
        <h1>Cadastrar Usuário</h1>
        <form action="?page=salvar" method="POST">
            <input type="hidden" name="acao" value="cadastrar">

            <div class="input-container">
                <label for="nome">Seu Nome</label>
                <input type="nome" id="nome" name="nome" required>
            </div>
            <div class="input-container">
                <label for="email">Seu Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-container">
                <label for="password">Sua Senha</label>
                <input type="password" id="password" name="senha" required>
            </div>
            <br>

            <button> Cadastrar </button>

        </form>

        <br>
        <a href="../../src/views/index.php">Voltar ao Login</a>
        <br><br>
        <a href="../../src/views/index.html">Início</a>

    </div>

</body>

</html>