<?php 
//conecta ao banco de dado
include('conexao.php');
// Verifica a conexão
if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}
// Função para listar os anos e meses disponíveis
function listarAnosEMeses() {
    global $conexao;
    $sql = "SELECT DISTINCT ano, mes FROM produto
 ORDER BY ano DESC, FIELD(mes, 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro')";
    $result = $conexao->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row["ano"] . "<br>";
            echo $row["mes"] . "<br>";
           
        }
    } else {
        echo "Nenhuma lista de produto
 encontrada.";
    }
}

$conexao->close();
// listarAnosEMeses();
?>