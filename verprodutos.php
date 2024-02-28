<h1>Todos os produtos cadastrados:</h1>

<?php 
    $sql = "SELECT * FROM produtos";

    $resultado = $conexao->query($sql);

    $qtdLinhas = $resultado->num_rows;


    if($qtdLinhas > 0){
       while($produto = $resultado->fetch_assoc()){
        echo 
        "<div class='card mt-4'>
            <div class='card-body'>
                <h2>Nome: {$produto['nome']}</h2>
                <h4>ID: {$produto['id']}</h4>
                <p>Descrição: {$produto['descricao']}</p>
                <p>Preço: {$produto['preco']}</p>
                <p>Peso: {$produto['peso']}</p>
                <button class=\"btn btn-success\" onclick=\"location.href='?page=edicao&id={$produto['id']}'\">Editar</button>
                <button class='btn btn-danger' onclick=\"location.href='?page=exclusao&id={$produto['id']}'\">Excluir</button>
            </div>
        </div>";
       } 
    }else{
        echo "<p class='alert alert-danger mt-4'>Não há produtos cadastrados no sistema.</p>";
    }

?>