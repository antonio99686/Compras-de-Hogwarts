<?php

//conecta ao banco de dado
include('conexao.php');


//dados do formulario
$alimento =  $_POST['alimento'];
$qtd = $_POST['qtd'];
$data = $_POST['datas'];
$ano = $_POST['ano'];
$validade = $_POST['validade'];




//cadastramento no banco
$sql = "INSERT  INTO produto(
 alimento,quantidade,
  datas,ano,
  validade)
 VALUES 
 ('$alimento','$qtd',
 '$data','$ano',
 '$validade')";

// Executar o comando SQL
if (mysqli_query($conexao, $sql)){
        echo "Produto cadastrado com sucesso!";
        header('Location: index.php');
}else{
        echo "Falha ao casdastrar produto.";
}



 ?>
