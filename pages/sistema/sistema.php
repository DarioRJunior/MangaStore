<?php
require('../connection/verifica.php');
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mangá Store - Sistema</title>
    <link rel="shortcut icon" href="../../src/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../src/css/fontes.css">
    <link rel="stylesheet" href="sistema.css">
</head>

<body>
    <header>
        <nav class="menu">
            <h1 class="logo">Mangá Store</h1>
            <p class="bem-vindo">Bem-vindo a Mangá Store, <?php echo $_SESSION["nome"]; ?></p>
            <img class="avatar" src="<?php echo $_SESSION["avatar"]; ?>" alt="">
            <ul class="nav-list">
                <li><a href="../login/login.php">Sair</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="sistema">
            <div class="sistema-box">
                <div class="sistema-container">
                    <h2>O que deseja fazer?</h2>
                    <a href="../mangas/mangas_com_login.php">Ver mangás disponíveis</a>
                    <a href="../relatorio/relatorio.php">Ver relatório</a>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer">
        <p class="copyright"> Dario Junior &copy; 2022 </p>
    </footer>
</body>

</html>