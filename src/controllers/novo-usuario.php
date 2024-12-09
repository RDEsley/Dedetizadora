<h1>Novo Usuário</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Seu Nome</label>
        <input type="text" name="nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Seu E-mail</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Sua Senha</label>
        <input type="password" name="senha" class="form-control" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Criar Usuário</button>
    </div>
    <br>
    <a href="/src/views/index.php" class="btn btn-primary">Voltar ao Login</a>
    </a>
    <br>
    <br>
    <a href="/src/views/index.html" class="btn btn-primary">Voltar ao Início</a>

</form>