<?php include "config.php";?>
<?php

if (isset($_POST['logar'])) {
    $email = $_POST['email-login'];
    $senha = $_POST['Senha-login'];

    

function validation($s1, $s2) {
    
    if ($s1 != $s2) {
        return ("as duas senhas precisam ser iguais");
    }

}

?>