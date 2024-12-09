<?php
$sql = "SELECT * FROM usuarios WHERE id=" . $_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>


<h1>Editar Usuário</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Seu Nome</label>
        <input type="text" name="nome" class="form-control" value="<?php print $row->nome; ?>" required>
    </div>
    <div class="mb-3">
        <label>Seu E-mail</label>
        <input type="email" name="email" class="form-control" value="<?php print $row->email; ?>" required>
    </div>
    <div class="mb-3">
        <label>Sua Senha</label>
        <input type="password" name="senha" class="form-control" value="<?php print $row->senha; ?>" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
    <br>
    <a href="/src/views/index.php" class="btn btn-primary">Voltar ao Login</a>
    </a>
    <br>
    <br>
    <a href="/src/views/index.html" class="btn btn-primary">Voltar ao Início</a>

</form>