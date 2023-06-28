<?php
include "config.php";
session_start();

$nome_consulta = $conn->prepare('SELECT `nm_nome` FROM `usuario` WHERE `id_usuario` = :id');
$nome_consulta->bindValue(':id',$_SESSION['id']);
$nome_consulta->execute();
$nomeuser = $nome_consulta->fetchColumn();

$email_consulta = $conn->prepare('SELECT `ds_email` FROM `usuario` WHERE `id_usuario` = :id');
$email_consulta->bindValue(':id',$_SESSION['id']);
$email_consulta->execute();
$emailuser = $email_consulta->fetchColumn();

echo $nomeuser . "</br>";
echo $emailuser;

?>