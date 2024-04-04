<?php
//conecta ao banco de dado
include('conexao.php');
// Verifica a conexão
if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}
// Função para excluir uma lista completa
function excluirListaCompleta($ano, $mes) {
    global $conexao;
    $sql = "DELETE FROM produto
 WHERE ano='$ano' AND mes='$mes'";
    if ($conexao->query($sql) === TRUE) {
        echo "Lista de produto
 excluída com sucesso.";
    } else {
        echo "Erro ao excluir lista de produto
: " . $conexao->error;
    }
}
$conexao->close();

// excluirListaCompleta(2024, "Janeiro");
?>