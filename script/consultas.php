<?php include "config.php";

$nome_consulta = $conn->prepare('SELECT `nm_nome` FROM `usuario` WHERE `id_usuario` = :id');
$nome_consulta->bindValue(':id',$_SESSION['id']);
$nome_consulta->execute();
$nomeuser = $nome_consulta->fetchColumn();

$email_consulta = $conn->prepare('SELECT `ds_email` FROM `usuario` WHERE `id_usuario` = :id');
$email_consulta->bindValue(':id',$_SESSION['id']);
$email_consulta->execute();
$emailuser = $email_consulta->fetchColumn();

$senha_consulta = $conn->prepare('SELECT `vl_senha` FROM `usuario` WHERE `id_usuario` = :id');
$senha_consulta->bindValue(':id',$_SESSION['id']);
$senha_consulta->execute();
$senhauser = $senha_consulta->fetchColumn();

?>