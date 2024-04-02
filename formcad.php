<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashbord.css">
    <link rel="shortcut icon" href="img/logo.png">
    <title>Hogwarts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand"> Hogwarts</a>
            <?php
            include ("conexao.php");
            $sql = "SELECT * FROM produto";
            $resultado = mysqli_query($conexao, $sql);
            $dados = mysqli_fetch_assoc($resultado);
            ?>
        </div>

    </nav>





    <div class="perfil">

    <form action="cadastrar.php" method="POST">
    <p><label class="login__label">
            <span>Alimento</span>
            <input type="text" name="alimento" class="input">
          </label></p>
            <span>Quantidade</span>
            <input type="text" name="qtd" class="input">
          </label></p>
          <span>Ano</span>
          <input type="text" name="ano" class="input">
        </label></p>
        <span>Fabricado</span>
        <input type="date" name="datas" class="input">
      </label></p>
            <span>Validade</span>
            <input type="date" name="validade" class="input">
          </label></p>
          
    
        
     <button type="submit" class="btn btn-dark btn-lg"> Enviar </button>
    </form>
    </div>

   
    


    </main>
</body>

</html>