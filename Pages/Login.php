<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>

<?php include "header.php"; ?>

<main>
    <div class="container">
        <div class="formulario-container">
        <h1 class="titulo">Login</h1>
        <form class="formulario"  method="POST" action="login.php">
            <div class="email-container">
                <input type="email" placeholder="E-mail" id="email-login" name="email-login" class="campo email" required>
                <span class="span-login hidden">Email Incorreto</span>
            </div>
            <div class="password-container">
                <input type="password" placeholder="Senha" id="password-login" name="senha-login" class="campo senha" required>
                <span class="span-login hidden">Senha Incorreta</span>
            </div>
            <a href="cadastro.php" class="btn cadastro">Cadastre-se</a>
            <button type="submit" class="btn btn-login" name="logar">Logar</button>
        </form>
        
        </div>
    </div>
    
</main>
</html>

<?php

if (isset($_POST['logar'])) {
    $email = $_POST['email-login'];
    $senha = $_POST['senha-login'];

    include "../script/config.php";
    $consulta = $conn->prepare('SELECT * FROM `usuario` WHERE `ds_email` = :email AND `vl_senha` = :senhal');
    $consulta->bindValue(':email',$email);
    $consulta->bindValue(':senhal',$senha);
    $consulta->execute();

    $idconsulta = $conn->prepare('SELECT `id_usuario` FROM `usuario` WHERE `ds_email` = :emaill AND `vl_senha` = :senhal');
    $idconsulta->bindValue(':emaill',$email);
    $idconsulta->bindValue(':senhal',$senha);
    $idconsulta->execute();
    $iduser = $idconsulta->fetchColumn();


    if($consulta->rowCount()==0){
        ?>
        <script>
            window.location.replace("loginErrado.php");
            //window.location.replace("https://siteteste69.000webhostapp.com/pages/loginErrado.php");
        </script>
        <?php
    }
    else{

        $_SESSION['id'] = $iduser;

        ?>
        <script>
            window.location.replace("Perfil.php");
            //window.location.replace("https://siteteste69.000webhostapp.com/Perfil.php");
        </script>
        <?php
        
    }



}
    

?>