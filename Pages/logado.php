<?php include "consultas.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/logado.css">
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
        </ul>
    </div>
</main>