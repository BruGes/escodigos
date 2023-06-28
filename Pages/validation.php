<?php
session_start();

$host_loginErrado = "https://siteteste69.000webhostapp.com/Pages/loginErrado.php";
$hub_loginErrado = "loginErrado.php";
$host_logado = "https://siteteste69.000webhostapp.com/Pages/logado.php";
$hub_logado = "logado.php";


if (isset($_POST['logar'])) {
    $email = $_POST['email-login'];
    $senha = $_POST['Senha-login'];

    include "config.php";
    $consulta = $conn->prepare('SELECT * FROM `usuario` WHERE `ds_email` = :emaill AND `vl_senha` = :senhal');
    $consulta->bindValue(':emaill',$email);
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
        window.location.replace($hub_loginErrado);
        </script>
        <?php
    }
    else{

        $_SESSION['id'] = $iduser;

        echo $_SESSION['id'];
        ?>
        <script>
                window.location.replace($hub_logado);
        </script>
        <?php
        
    }



}
    

?>