<?php

    if (isset($_POST['submit'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $senha2 = $_POST['senha2'];

        if ($senha == $senha2) {
            $submit = $conn->prepare('INSERT INTO `usuario` (`id_usuario`, `nm_nome`, `ds_email`, `vl_senha`) VALUES (NULL, :nome, :email, :senha)');
            $submit->bindValue(':nome', $nome);
            $submit->bindValue(':email', $email);
            $submit->bindValue(':senha', $senha);
            $submit->execute();
            ?>
            <script>

                //window.location.replace("https://siteteste69.000webhostapp.com/Pages/Cadastro-Sucesso.php");
                window.location.replace("../paginas/Cadastro-Sucesso.php");
                
            </script>
            <?php
        }
    }
?>