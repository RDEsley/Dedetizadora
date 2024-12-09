<?php include_once("/src/controllers/editar-usuario.php"); ?>

<?php {?>


<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Seu Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Seu E-mail</label>
        <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Sua Senha</label>
        <input type="password" name="senha" value="<?php print $row->senha; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
    <br>
    <a href="/src/views/indexCad.php?page=listar" class="btn btn-primary">Voltar</a>

</form>

<?php }?>