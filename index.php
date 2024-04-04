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
    <title>sistema</title>
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
            
        </div>

    </nav>





    <div class="perfil" >
    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras de Hogwarts</title>
</head>
<body>
    <h1>Lista de Compras de Hogwarts</h1>

    <h2 class="btn btn-outline-primary">Criar Nova Lista de Compras</h2>
    <form action="cadastrar.php" method="post">
        <label for="ano">Ano:</label>
        <input type="text" id="ano" name="ano" required><br>
        <label for="mes">Mês:</label>
        <input type="text" id="mes" name="mes" required><br>
        <label for="categoria">Categoria:</label>
        <input type="text" id="categoria" name="categoria" required><br>
        <label for="descricao">Descrição:</label>
        <input type="text" id="descricao" name="descricao" required><br>
        <label for="quantidade">Quantidade:</label>
        <input type="number" id="quantidade" name="quantidade" required><br><br>
        <button type="submit"  class="btn btn-dark btn-lg">Criar Lista</button>
    </form>
<br>
<br>
<br>
<br>
    <h2 class="btn btn-outline-primary">Listar Anos e Meses Disponíveis</h2>
    <ul>
        <?php
        include 'listarAnosEMeses.php';
        ?>
    </ul>

    <h2 class="btn btn-outline-primary">Editar Item da Lista de Compras</h2>
    <form action="editar.php" method="post">
        <label for="id">ID do Item:</label>
        <input type="number" id="id" name="id" required><br>
        <label for="nova_quantidade">Nova Quantidade:</label>
        <input type="number" id="nova_quantidade" name="nova_quantidade" required><br><br>
        <button type="submit"  class="btn btn-dark btn-lg">Editar Item</button>
    </form>
<br>
<br>
<br>
<br>
    <h2  class="btn btn-outline-primary">Excluir Item da Lista de Compras</h2>
    <form action="excluir.php" method="post">
        <label for="id_excluir">ID do Item:</label>
        <input type="number" id="id_excluir" name="id_excluir" required><br><br>
        <button type="submit"  class="btn btn-dark btn-lg">Excluir Item</button>
    </form>
<br>
<br>
<br>
<br>
    <h2 class="btn btn-outline-primary" >Excluir Lista de Compras Completa</h2>
    <form action="excluirListaCompleta.php" method="post">
        <label for="ano_excluir">Ano:</label>
        <input type="text" id="ano_excluir" name="ano_excluir" required><br>
        <label for="mes_excluir">Mês:</label>
        <input type="text" id="mes_excluir" name="mes_excluir" required><br><br>    
        <button type="submit"  class="btn btn-dark btn-lg">Excluir Lista Completa</button>
    </form>
</body>
</html>

    
    </div>


    


    </main>
</body>

</html>