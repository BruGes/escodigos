<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/loginerrado.css">
    <title>Perfil</title>
</head>

<?php include "../header.php"; ?>

<main>
    <div class="container-caixa">
        <h1>
            Login não realizado
        </h1>
        <img src="../assets/RedX.png">
        <p>As informações passadas estão incorretas ou não existem em nosso sistema.</p>
        <p>Se não for cadastrado, vá para a <a href="cadastro.php">página de cadastro</a></p>
        <p>Caso já seja cadastrado entre em contato pelo nosso email: escodigos@gmail.com</p>
        <p>Voltar para a <a href="login.php">página de login</a>.</p>    
    </div>
</main>