<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: dashboard.php");
    exit;
}

$dados = file("arquivo.txt");
?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<head>
    <title>Registro</title>
</head>

<body>

    <h2>Alunos Cadastrados</h2>
    <ul>
        <?php foreach ($dados as $registro) {
            echo $registro . "<br>";}

        ?>
    </ul>
    <h3> Ir para Tela de Login </h3>
    <a href="logout.php" class="btn btn-danger">Login</a>

</body>

</html>