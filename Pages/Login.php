<?php include "validation.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/perfil.css">
    <title>Login</title>
</head>

<?php include "header.php"; ?>

<main>
    <div class="container">
        <div class="formulario-container">
        <h1 class="titulo">Login</h1>
        <form class="formulario"  method="POST" action="validation.php">
            <div class="email-container">
                <input type="email" placeholder="E-mail" id="email-login" name="email-login" class="campo email" required>
                <span class="span-login hidden">Email Incorreto</span>
            </div>
            <div class="password-container">
                <input type="password" placeholder="Senha" id="password-login" name="Senha-login" class="campo senha" required>
                <span class="span-login hidden">Senha Incorreta</span>
            </div>
            <a href="Cadastro.php" class="btn cadastro">Cadastre-se</a>
            <button type="submit" class="btn btn-login" name="logar">Logar</button>
        </form>
        
        </div>
    </div>
    
</main>
</html>