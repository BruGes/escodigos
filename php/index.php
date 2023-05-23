<?php include "config.php"; ?>

<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $__POST['senha'];

    if (isset($_POST['submit'])) {
        $submit = $conn->prepare('INSERT INTO `usuario` (`id_usuario`, `nm_nome`, `ds_email`, `vl_senha`) VALUES (NULL, :nome, :email, :senha)');
        $submit->bindValue(':nome', $nome);
        $submit->bindValue(':email', $email);
        $submit->bindValue(':senha', $senha);
        $submit->execute();
    }
?>