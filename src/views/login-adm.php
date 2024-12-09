<?php include_once('./middlewares/validaLoginAdm.php'); ?>

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
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="/assets/styles/style-log.css">
    <title>Dedetizadora|Login ADM</title>
</head>

<body>
    <div class="login-container">
        <h1>Login Admin</h1>
        <form action="" method="POST">
            <div class="input-container">
                <label for="email">Seu Nome</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="input-container">
                <label for="email">Seu Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-container">
                <label for="password">Sua Senha</label>
                <input type="password" id="password" name="senha" required>
            </div>

            <button class="btn btn-primary"> Entrar </button>

            <br>
            <a href="/src/views/index.html">Início</a>
            </a>
            <br>
            <a href="/src/views/index.php">Voltar</a>
            </a>


        </form>
    </div>
</body>

</html>