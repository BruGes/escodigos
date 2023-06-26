<!DOCTYPE html>
<html lang="en">
<?php include "config.php"; ?>
<?php include "validation.php"; ?>


<?php
    if (isset($_POST['submit'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $submit = $conn->prepare('INSERT INTO `usuario` (`id_usuario`, `nm_nome`, `ds_email`, `vl_senha`) VALUES (NULL, :nome, :email, :senha)');
        $submit->bindValue(':nome', $nome);
        $submit->bindValue(':email', $email);
        $submit->bindValue(':senha', $senha);
        $submit->execute();
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>Cadastro</title>
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

<main>
    <section>
        <div class="container">
            <div class="formulario-container">
                <form class="form" method="post" action="Cadastro.php">
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

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

</html>