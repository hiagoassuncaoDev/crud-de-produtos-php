<h1>Página de Cadastro</h1>

<form action="?page=atuarNoBanco" method="post" class="mt-4">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="nome" class="mb-2">Nome do produto: </label>
        <input type="text" name="nome" class="form-control " required placeholder="Digite o nome do produto">
    </div>
    <div class="mb-3">
        <label for="descricao" class="mb-2">Descrição do produto: </label>
        <input type="text" name="descricao" class="form-control" required placeholder="Digite a descrição do produto">
    </div>
    <div class="mb-3">
        <label for="preco" class="mb-2">Preço do produto: </label>
        <input type="text" name="preco" class="form-control" required placeholder="Digite o preço do produto em reais">
    </div>
    <div class="mb-3">
        <label for="peso" class="mb-2">Peso do produto: </label>
        <input type="text" name="peso" class="form-control" required placeholder="Digite o peso do produto em gramas">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>