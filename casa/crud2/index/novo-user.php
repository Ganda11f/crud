<h1><br>Novo Usuário</h1>
<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label for="email">E-mail</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="senha">Senha</label>
        <input type="password" name="senha" class="form=control">
    </div>
    <div class="mb-3">
        <label for="dt_nasc">Data de nascimento</label>
        <input type="date" name="dt_nasc" class="form-control">
    </div>
    <div class='mb-3'>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>