<header>
    <div class="container-elementos-header">
        <div class="logo-container">
            <a href="../index.php"><h1 class="up-text">Escola</h1></a>
            <a href="../index.php"><p class="down-text">do Código</p></a>
        </div>
        <nav>
            <ul class="lista-navegação">
                <li class="cabecalho-link"><a href="../pages/linguagens.php">Linguagens</a></li>
                <li class="cabecalho-link"><a href="../pages/tutoriais.php">Tutoriais</a></li>

                <?php if (isset($_SESSION['id'])) { ?>

                    <li class="cabecalho-link"><a href="../pages/Perfil.php">Perfil</a></li>

                <?php } else { ?>

                    <li class="cabecalho-link"><a href="../pages/login.php">Login</a></li>

                <?php } ?>

            </ul>
        </nav>
    </div>
</header>