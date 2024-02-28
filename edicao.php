<h1>Página de edição: </h1>

<?php 
    $id = $_GET["id"];
    $sql = "SELECT * FROM produtos WHERE id={$id}";
    $resultado = $conexao->query($sql);
    $produto = $resultado->fetch_object();

    $nomeProduto = $produto->nome;
    $descricaoProduto = $produto->descricao;
    $precoProduto = $produto->preco;
    $pesoProduto = $produto->peso;
    
?>
<form action="?page=atuarNoBanco" method="post" class="mt-4">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label for="nome">Nome do produto: </label>
    <input type="text" name="nome" placeholder="Digite o nome do produto" class="form-control mt-2 mb-3" value="<?php echo $nomeProduto; ?>">
    <label for="descricao">Descrição do produto: </label>
    <input type="text" name="descricao" placeholder="Digite a descrição do produto" class="form-control mt-2 mb-3" value="<?php echo $descricaoProduto; ?>">
    <label for="preco">Preço do produto: </label>
    <input type="text" name="preco" placeholder="Digite o preço do produto" class="form-control mt-2 mb-3" value="<?php echo $precoProduto; ?>">
    <label for="peso">Peso do produto: </label>
    <input type="text" name="peso" placeholder="Digite o peso do produto" class="form-control mt-2 mb-3" value="<?php echo $pesoProduto; ?>">
    <button type="submit" class="btn btn-success">Editar</button>
</form>