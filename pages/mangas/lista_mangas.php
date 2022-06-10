<?php
require('../connection/verifica.php');
include_once('../connection/config.php');

if ($_SESSION["UsuarioNivel"] != "ADM") echo "<script>alert('Você não é Administrador!');top.location.href='sistema.php';</script>";

$sql = "SELECT * FROM manga ORDER BY idManga ASC";

if (isset($_GET['pagina'])) {
    $pag = $_GET['pagina'];
    $busca = "SELECT * FROM manga";
    $todos = mysqli_query($con, $busca);
    $registros = "5";
    $tr = mysqli_num_rows($todos);
    $tp = ceil($tr / $registros);
    $inicio = ($registros * $pag) - $registros;
    $limite = mysqli_query($con, "$busca LIMIT $inicio, $registros");
    $anterior = $pag - 1;
    $proximo = $pag + 1;
}

$result = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mangá Store - Mangás</title>
    <link rel="shortcut icon" href="../../src/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="lista_manga.css">
</head>

<body>
    <header>
        <nav class="menu">
            <h1 class="logo">Mangá Store</h1>
            <p class="bem-vindo">Bem-vindo a Mangá Store adm, <?php echo $_SESSION["email_usuario"]; ?></p>
            <ul class="nav-list">
                <li><a href="../sistema/sistemaAdm.php">Voltar</a></li>
                <li><a href="../login/login.php">Sair</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="sistema">
    <div class="sistema-box">
        <div class="sistema-container">
            <h2>Mangás</h2>
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Editora</th>
                            <th scope="col">Gênero</th>
                            <th scope="col">Sinopse</th>
                            <th scope="col">Preço</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($manga_data = mysqli_fetch_assoc($limite)) {
                            echo "<tr>";
                            echo "<td>" . $manga_data['nome'] . "</td>";
                            echo "<td>" . $manga_data['autor'] . "</td>";
                            echo "<td>" . $manga_data['editora'] . "</td>";
                            echo "<td>" . $manga_data['genero'] . "</td>";
                            echo "<td>" . $manga_data['sinopse'] . "</td>";
                            echo "<td>" . $manga_data['preco'] . "</td>";
                            echo "<td class='btns'>
                            <a class='btnEditar' href='edicao_mangas.php?id=$manga_data[idManga]' title='Editar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                            <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                        </svg></a>

                        <a class='btnExcluir' href='delete.php?id=$manga_data[idManga]' title='Excluir'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                            </svg>
                        </a>
                        </td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <nav class="paginacao-container">
                        <ul class="pagination">
                            <?php
                            if ($pag > 1) {
                            ?>
                                <li class="page-item">
                                    <a class="page-link" href="?pagina=<?= $anterior; ?>" aria-label="Anterior">
                                        <span aria-hidden="true">Anterior</span>
                                    </a>
                                </li>
                            <?php } ?>

                            <?php
                            for ($i = 1; $i <= $tp; $i++) {
                                if ($pag == $i) {
                                    echo "<li class='page-item active'><a class='page-link' href='?pagina=$i'>$i</a></li>";
                                } else {
                                    echo "<li class='page-item'><a class='page-link' href='?pagina=$i'>$i</a></li>";
                                }
                            }
                            ?>



                            <?php
                            if ($pag < $tp) {
                            ?>
                                <li class="page-item">
                                    <a class="page-link" href="?pagina=<?= $proximo; ?>" aria-label="Próximo">
                                        <span aria-hidden="true">Próximo</span>

                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </nav>
        </div>
    </div>
        </section>
    </main>
</body>

</html>