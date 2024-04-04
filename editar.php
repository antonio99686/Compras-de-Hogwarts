<?php
//conecta ao banco de dado
include('conexao.php');
// Verifica a conexão
if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}

// Função para editar um item da lista de produto
function editarItem($id, $quantidade) {
    global $conexao;
    $sql = "UPDATE produto
 SET quantidade='$quantidade' WHERE id=$id";
    if ($conexao->query($sql) === TRUE) {
        echo "Item da lista atualizado com sucesso.";
    } else {
        echo "Erro ao atualizar item da lista: " . $conexao->error;
    }
}
$conexao->close();

// editarItem(1, 15);
?>