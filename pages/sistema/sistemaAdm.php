<?php
require('../connection/verifica.php');

if ($_SESSION["UsuarioNivel"] != "ADM") echo "<script>alert('Você não é Administrador!');top.location.href='sistema.php';</script>";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mangá Store - Adm</title>
    <link rel="shortcut icon" href="../../src/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../src/css/fontes.css">
    <link rel="stylesheet" href="sistemaAdm.css">

</head>

<body>
    <header>
        <nav class="menu">
            <h1 class="logo">Mangá Store</h1>
            <p class="bem-vindo">Bem-vindo a Mangá Store adm, <?php echo $_SESSION["nome"]; ?></p>
            <img class="avatar" src="<?php echo $_SESSION["avatar"]; ?>" alt="">
            <ul class="nav-list">
                <li><a href="../perfil/editar_perfil_adm.php?id=<?php echo $_SESSION["id_usuario"]; ?>">Editar Perfil</a></li>
                <li><a href="../login/login.php">Sair</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="sistema">
            <div class="sistema-box">
                <div class="sistema-container">
                    <h2>O que deseja fazer?</h2>
                    <a href="../mangas/cadastro_mangas.php">Cadastrar novo mangá</a>
                    <a href="../mangas/lista_mangas.php?pagina=1">Ver todos os mangás</a>
                    <a href="../relatorio-clientes/relatorio-clientes.php">Ver usuários cadastrados</a>
                    <a href="../../src/manual/MangaStore-Manual_do_Sistema_adm.pdf" download="Manual do Sistema Adiministração">Manual do Sistema Adm</a>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer">
        <p class="copyright"> Dario Junior &copy; 2022 </p>
    </footer>
</body>

</html>