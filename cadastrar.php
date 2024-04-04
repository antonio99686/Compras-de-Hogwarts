<?php
//conecta ao banco de dado
include('conexao.php');
// Verifica a conexão
if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}

// Função para criar uma nova lista de produto
function criarLista($ano, $mes, $categoria, $descricao, $quantidade) {
    global $conexao;
    $sql = "INSERT INTO produto
 (ano, mes, categoria, descricao, quantidade)
            VALUES ('$ano', '$mes', '$categoria', '$descricao', '$quantidade')";
    if ($conexao->query($sql) === TRUE) {
        echo "Lista de produto criada com sucesso.";
        header ('location:index.php');
    } else {
        echo "Erro ao criar lista de produto
: " . $conexao->error;
    }
}









// criarLista(2024, "Janeiro", "Alimento", "Pão", 10);

$conexao->close();
?>
