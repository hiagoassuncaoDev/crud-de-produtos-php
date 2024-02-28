
<?php 
    $id = $_GET["id"];
    $sql = "SELECT * FROM produtos
            WHERE id={$id};";
    $resultado = $conexao->query($sql);

    $quantidadeDeLinhas = $resultado->num_rows;

    if($quantidadeDeLinhas > 0){
        $produto = $resultado->fetch_assoc();
        echo "<h2>Você tem certeza que deseja excluir esse produto?</h2>";
        echo 
            "<div class=\"card mt-4\">
                <div class=\"card-body\">
                    <h2>Nome: {$produto['nome']}</h2>
                    <h4>ID: {$produto['id']}</h4>
                    <p>Descrição: {$produto['descricao']}</p>
                    <p>Preço: {$produto['preco']}</p>
                    <p>Peso: {$produto['peso']}</p>
                    <form action=\"?page=atuarNoBanco\" method=\"post\">
                        <input type=\"hidden\" name=\"acao\" value=\"deletar\">
                        <input type=\"hidden\" name=\"id\" value=\"{$produto['id']}\">
                        <button type=\"submit\" class=\"btn btn-success\">Sim</button>
                    </form>
                    <button type=\"\"class=\"btn btn-danger mt-2\" onclick=\"location.href='?page=verprodutos'\">Não</button>
                </div>    
            </div>";
    }else{
        echo "<p class=\"alert alert-danger mt-4\">Não foi possível encontrar este produto.</p>";
    }
?>