<?php include "config.php";?>
<?php

if (isset($_POST['logar'])) {
    $email = $_POST['email-login'];
    $senha = $_POST['Senha-login'];
    $email2;
    $consulta = $conn->prepare('SELECT * FROM `usuario` WHERE `ds_email` == :emaill AND `vl_senha` == :senhal');
    $consulta->bindValue(':emaill',$email);
    $consulta->bindValue(':senhal',$senha);
    $consulta->execute();
    if($consulta->rowCount()==0){
        echo "Não existe";
    }
    else{
        echo "Existe";
    }



}
    

?>