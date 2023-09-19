<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: dashboard.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $ra = $_POST['ra'];
    $placa = $_POST['placa'];

    $registro = "$nome|$ra|$placa" . PHP_EOL;

    $arquivo = fopen("arquivo.txt", "a");
    fwrite($arquivo, $registro);
    fclose($arquivo);
    header("Location: arquivo.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1> Cadastro Estacionamento da Fatec Araras </h1>
    </div>
    <form action="cadastro.php" method="post">
        <label for="nome">Nome Completo:</label>
        <input type="text" id="nome" name="nome"><br><br>
        <label for="ra">Registro Acadêmico (R.A.):</label>
        <input type="text" id="ra" name="ra"><br><br>
        <label for="placa">Placa do Carro ou Moto:</label>
        <input type="text" id="placa" name="placa"><br><br>
        <input class="btn btn-info" type="submit" value="Cadastrar">

    </form>
    <div class="page-header">
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </div>
</body>
</html>