<?php
if ($_SERVER['SCRIPT_NAME'] == "/escodigos/index.php") {
    $index = "index.php";
    $linguagens = "pages/linguagens.php";
    $tutoriais = "pages/tutoriais.php";
    $perfil = "pages/perfil.php";
    $login = "pages/login.php";
} else {
    $index = "../index.php";
    $linguagens = "linguagens.php";
    $tutoriais = "tutoriais.php";
    $perfil = "perfil.php";
    $login = "login.php";
}
?>

<header>
    <div class="container-elementos-header">
        <div class="logo-container">
            <a href=<?php echo $index; ?>><h1 class="up-text">Escola</h1></a>
            <a href=<?php echo $index; ?>><p class="down-text">do Código</p></a>
        </div>
        <nav>
            <ul class="lista-navegação">
                <li class="cabecalho-link"><a href=<?php echo $linguagens; ?>>linguagens</a></li>
                <li class="cabecalho-link"><a href=<?php echo $tutoriais; ?>>Tutoriais</a></li>

                <?php if (isset($_SESSION['id'])) { ?>

                    <li class="cabecalho-link"><a href=<?php echo $perfil; ?>>Perfil</a></li>

                <?php } else { ?>

                    <li class="cabecalho-link"><a href=<?php echo $login; ?>>Login</a></li>

                <?php } ?>

            </ul>
        </nav>
    </div>
</header>

<?php $GLOBALS['isIndex'] = false; ?>