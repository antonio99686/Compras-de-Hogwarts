<?php
//conecta ao banco de dado
include('conexao.php');
// Verifica a conexão
if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}

// Função para excluir um item da lista de produto
function excluirItem($id) {
    global $conexao;
    $sql = "DELETE FROM produto
 WHERE id=$id";
    if ($conexao->query($sql) === TRUE) {
        echo "Item da lista excluído com sucesso.";
    } else {
        echo "Erro ao excluir item da lista: " . $conexao->error;
    }
}
$conexao->close();

// excluirItem(1);
?>