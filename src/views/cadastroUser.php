<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brasali - Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="cadastroUser.php">Dedetizadora|Cadastro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=novo">Novo Usuário</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                include("./conexao/conexao.php");
                switch (@$_REQUEST["page"]) {
                    case "novo":
                        include("./criar-usuario/novo-usuario.php");
                        break;

                    case "salvar":
                        include("./salvar/salvar-usuario.php");
                        break;

                    default:
                        print "<h1>Faça seu Cadastro! </h1><a class='nav-link button nav-btn mt-5' href='?page=novo'>CLIQUE AQUI!< Para se Cadastrar!</a>";

                        print("<br>");
                        print("<br>");

                        print "<h1>Retornar ao Login! </h1><a class='nav-link button nav-btn mt-5' href='index.php'>CLIQUE AQUI!< Para se retornar ao Login!</a>";
                }
                ?>

            </div>
        </div>
    </div>
</body>