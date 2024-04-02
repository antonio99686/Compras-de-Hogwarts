<link rel="stylesheet" href="css/dashbord.css">
<?php
include ("conexao.php");
$sql = "SELECT * FROM produto";
$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_assoc($resultado);


if ( $_POST) {
    $opcao = $_POST["opcao"];
    $cat = $_POST["cat"];
    

    switch ($opcao . $cat) {
        case 1:
            echo '<div class="table">
  <table>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Alimento</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Ano</th>
      <th scope="col">Validade</th>


    </tr>';

while ($dados = mysqli_fetch_assoc($resultado)) {
      echo "<td>" .  $dados['id_produto']    .  "</td>";
      echo "<td>" .  $dados['alimento']    .  "</td>";
      echo "<td>" .  $dados['quantidade'] .  "</td>";
      echo "<td>" .  $dados['ano'] .  "</td>";
      echo "<td>" .  $dados['validade'] .  "</td>";
   
      echo "<td><id=".$dados['id_produto']."&alimento=".$dados['alimento'].
      "&quantidade=".$dados['quantidade']."&ano=".$dados['ano']."&validade=".$dados['validade'].
      "'>";


      
    echo '</tr>';
     
}
echo '</table>
</div>';
         
            break;
        default:
            echo "Opção inválida!";
    }
}
    

    ?>