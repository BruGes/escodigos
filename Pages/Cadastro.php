<?php session_start();
include "../script/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>Cadastro</title>
</head>

<?php include "../header.php"; ?>

<main>
    <section>
        <div class="container">
            <div class="formulario-container">
                <form class="form" method="post" action="cadastro.php">
                    <h1>Cadastro</h1>
                        <div class="campos">
                                <div class="campos nome">
                              <input type="text" placeholder="Nome" name="nome" required>   
                            </div>
                                <div class="campos email">
                              <input type="email" placeholder="E-mail" name="email" required></div>
                                <div class="campos password">
                              <input type="password" placeholder="Senha" name="senha" required></div>
                                <div class="campos password2">
                              <input type="password" placeholder="Repita a Senha" name="senha2" required></div>
                        </div> 
                    <input type="submit" value="Cadastrar" class="btn-submit" name="submit"> 
                </form>
            </div>
        </div>
    </section>
</main>

<?php

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha2 = $_POST['senha2'];

    if ($senha == $senha2) {            $submit = $conn->prepare('INSERT INTO `usuario` (`id_usuario`, `nm_nome`, `ds_email`, `vl_senha`) VALUES (NULL, :nome, :email, :senha)');
        $submit->bindValue(':nome', $nome);
        $submit->bindValue(':email', $email);
        $submit->bindValue(':senha', $senha);
        $submit->execute();
        ?>
        <script>

            //window.location.replace("https://siteteste69.000webhostapp.com/pages/cadastro-Sucesso.php");
            window.location.replace("../pages/cadastro-Sucesso.php");
            
        </script>
        <?php
    }
} ?>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</html>