<?php session_start();
include "../script/consultas.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/perfil.css">
    <title> <?php if (isset($_POST['altnome'])) {echo "ta zoado";} else{echo "Perfil";}?> </title>
</head>

<?php include "../header.php"; ?>

<main>
    <div class="container">
        <ul>
            <li>nome:</li>
            <li>email:</li>
        </ul>
        <ul>
            <li><?php echo $nomeuser; ?></li>
            <li><?php echo $emailuser; ?></li>
        </ul>
        <ul>
            <form method="post" action="perfil.php">
                <button type="submit" name="altnome">alterar nome</button>
                <input type="text" name="NomeAlterado">
            </form>
            <form method="post" action="perfil.php">
                <button type="submit" name="altmail">alterar email</button>
                <input type="email" name="EmailAlterado">
            </form>
            <form method="post" action="perfil.php">
                <button type="submit" name="altsenha">alterar senha</button>
                <input type="text" name="SenhaAlterada">
            </form>
            <form method="post" action="perfil.php">
                <button type="submit" name="sair">sair</button>
            </form>
            <form method="post" action="perfil.php">
                <button type="submit" name="deletar">excluir conta</button>
            </form>
        </ul>
    </div>
</main>

<?php

if (isset($_POST['altnome']) and isset($_POST['NomeAlterado'])) {

    $alterar_nome = $conn->prepare('UPDATE `usuario` SET `nm_nome` = :nome WHERE `usuario`.`id_usuario` = :id');
    $alterar_nome->bindValue(':id',$_SESSION['id']);
    $alterar_nome->bindValue(':nome',$_POST['NomeAlterado']);
    $alterar_nome->execute();

    ?><script> 
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

    window.location.reload(false); 
    </script><?php
}
if (isset($_POST['altmail']) and isset($_POST['EmailAlterado'])) {

    $alterar_email = $conn->prepare('UPDATE `usuario` SET `ds_email` = :email WHERE `usuario`.`id_usuario` = :id');
    $alterar_email->bindValue(':id',$_SESSION['id']);
    $alterar_email->bindValue(':email',$_POST['EmailAlterado']);
    $alterar_email->execute();

    ?><script> 
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

    window.location.reload(false); 
    </script><?php
}
if (isset($_POST['altsenha']) and isset($_POST['SenhaAlterada'])) {

    $alterar_senha = $conn->prepare('UPDATE `usuario` SET `vl_senha` = :senha WHERE `usuario`.`id_usuario` = :id');
    $alterar_senha->bindValue(':id',$_SESSION['id']);
    $alterar_senha->bindValue(':senha',$_POST['SenhaAlterada']);
    $alterar_senha->execute();

    ?><script> 
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

    window.location.reload(false); 
    </script><?php
}
if (isset($_POST['sair'])) {

    session_destroy();
    
    ?><script>
        window.location.replace("login.php");
        //window.location.replace("https://siteteste69.000webhostapp.com/pages/login.php");
    </script><?php
} 
if (isset($_POST['deletar'])) {

    $deletar_conta = $conn->prepare('DELETE FROM `usuario` WHERE `usuario`.`id_usuario` = :id');
    $deletar_conta->bindValue(':id',$_SESSION['id']);
    $deletar_conta->execute();

    session_destroy();
    ?><script>
    window.location.replace("login.php");
    //window.location.replace("https://siteteste69.000webhostapp.com/pages/login.php");
    </script><?php
} ?>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>