<?php 
    $acaoASerFeita = $_POST["acao"];

    switch($acaoASerFeita){
        case "cadastrar":
            $nome = $_POST["nome"];
            $descricao = $_POST["descricao"];
            $preco = $_POST["preco"];
            $peso = $_POST["peso"];

            $sql = "INSERT INTO produtos(id, nome, descricao, preco, peso) 
                        VALUES('DEFAULT', '{$nome}', '{$descricao}', '{$preco}', '{$peso}');";

            $resultado = $conexao->query($sql);

            if($resultado){
                echo "<script>
                    alert('Produto cadastrado com sucesso!')
                    </script>";
                echo "<script>
                        location.href='?page=verprodutos'
                    </script>";
            }else{
                echo "<script>
                    alert('Houve um erro ao cadastrar esse produto. Tente novamente mais tarde!')
                    </script>";
                echo "<script>
                        location.href='?page=verprodutos'
                    </script>";
            }
            break;
        case "editar":
            $nome = $_POST["nome"];
            $descricao = $_POST["descricao"];
            $preco = $_POST["preco"];
            $peso = $_POST["peso"];
            $id = $_POST["id"];

            $sql = "UPDATE produtos
            SET nome= '{$nome}',
                descricao= '{$descricao}',
                preco= '{$preco}',
                peso= '{$peso}'
                WHERE id={$id}";

            $resultado = $conexao->query($sql);

            if($resultado){
                echo 
                "<script>
                    alert(\"Produto editado com sucesso!\");
                </script>";
                echo 
                "<script>
                    location.href='?page=verprodutos';
                </script>";
            }else {
                echo 
                "<script>
                    alert(\"Houve um erro ao tentar editar esse produto. Tente novamente mais tarde!\");
                </script>";
                echo 
                "<script>
                    location.href='?page=verprodutos';
                </script>";
            }
            break;
        case "deletar":
            $id = $_POST["id"];
            $sql = "DELETE FROM produtos
                    WHERE id={$id}";

            $resultado = $conexao->query($sql);

            if($resultado){
                echo
                "<script>
                    alert(\"Produto deletado com sucesso!\");
                </script>";
                echo
                "<script>
                    location.href=\"?page=verprodutos\";
                </script>";
            }else{
                "<script>
                    alert(\"Houve um erro ao tentar deletar este produto. Tente novamente mais tarde.\");
                </script>";
                echo
                "<script>
                    location.href=\"?page=verprodutos\";
                </script>";
            }
            break;
    }
?>