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
       <h2> Ano </h2>
       <form method="POST">
        <select name="opcao"  class="btn btn-dark btn-lg" >
            <option value="1">2021</option>
            <option value="2">2022</option>
            <option value="3">2023</option>
            <option value="4">2024</option>
            <option value="5">2025</option>
            <option value="6">2026</option>
        </select>

        <select name="cat"  class="btn btn-dark btn-lg" >
            <option value="1">Sessão de Higiene</option>
            <option value="2">Sessão de Limpeza</option>
            <option value="3">Sessão de Alimento </option>
         
        </select>

        <input type="submit" value="Go" class="btn btn-dark btn-lg">
       </form>
        <?php
    include "in.php";
    if ( $_POST) {
        $opcao = $_POST["opcao"];
       

    }
    ?>
    
    </div>


    


    </main>
</body>

</html>