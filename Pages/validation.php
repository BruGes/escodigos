
<?php

if (isset($_POST['logar'])) {
    $email = $_POST['email-login'];
    $senha = $_POST['Senha-login'];
    $email2;
    include "config.php";
    $consulta = $conn->prepare('SELECT * FROM `usuario` WHERE `ds_email` = :emaill AND `vl_senha` = :senhal');
    $consulta->bindValue(':emaill',$email);
    $consulta->bindValue(':senhal',$senha);
    $consulta->execute();
    if($consulta->rowCount()==0){
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-página-inicial.css">
    <title>Escola do Código</title>
</head>
<header>
    <div class="container-elementos-header">
        <div class="logo-container">
            <a href="../index.html"><h1 class="up-text">Escola</h1></a>
            <a href="../index.html"><p class="down-text">do Código</p></a>
        </div>
        <nav>
            <ul class="lista-navegação">
                <li class="cabecalho-link"><a href="Linguagens.php">Linguagens</a></li>
                <li class="cabecalho-link"><a href="Tutoriais.php">Tutoriais</a></li>
                <li class="cabecalho-link"><a href="Perfil.php">Perfil</a></li>
            </ul>
        </nav>
    </div>
</header>
        <?php
    }
    else{
        ?>
        <h1>2222222222222222222</h1>
        <?php
    }



}
    

?>