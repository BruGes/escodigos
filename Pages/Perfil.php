<?php include "../script/consultas.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/perfil.css">
    <title>Perfil</title>
</head>

<?php include "header.php"; ?>

<main>
    <div class="container">
        <ul>
            <li>nome:</li>
            <li>email:</li>
        </ul>
        <ul>
            <li><?php echo $nomeuser; ?></li>
            <li><?php echo $emailuser; ?></li>
            <form method="post" action="perfil.php">
                <input type="submit" value="sair" name="sair">
            </form>
        </ul>
    </div>
</main>

<?php
if (isset($_POST['sair'])) {

    session_abort();
    session_destroy();

?>

    <script>
        window.location.replace("login.php");
        //window.location.replace("https://siteteste69.000webhostapp.com/pages/login.php");
    </script>

<?php } ?>