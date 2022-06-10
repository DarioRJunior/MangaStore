<?php
require('../connection/verifica.php');
include_once('../connection/config.php');

if (!empty($_GET['search'])) {
    $data = $_GET['search'];
    $sql = "SELECT * FROM manga WHERE nome LIKE '%$data%' OR autor Like '%$data%' OR editora LIKE '%$data%' OR genero LIKE '%$data%' OR sinopse LIKE '%$data%' OR preco LIKE '%$data%'";
} else {
    $sql = "SELECT * FROM manga ORDER BY idManga ASC";
}

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
    <link rel="stylesheet" href="../../src/css/index.css">
</head>

<body>
    <header>
        <nav class="menu">
            <h1 class="logo">Mangá Store</h1>
            <p class="bem-vindo">Bem-vindo a Mangá Store, <?php echo $_SESSION["nome"]; ?></p>
            <img class="avatar" src="<?php echo $_SESSION["avatar"]; ?>" alt="">
            <ul class="nav-list">
                <li><a href="../sistema/sistema.php">Voltar</a></li>
                <li><a href="../login/login.php">Sair</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="sistema">
            <div class="sistema-box">
                <div class="box-search">
                    <input type="search" placeholder="Pesquisar" id="pesquisar">
                    <button onclick="searchData()" class="btn-search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                </div>
                <div class="sistema-container">
                    <h2>Mangás</h2>
                    <div class="table-container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nome</a></th>
                                    <th scope="col">Autor</th>
                                    <th scope="col">Editora</th>
                                    <th scope="col">Gênero</th>
                                    <th scope="col">Sinopse</th>
                                    <th scope="col">Preço</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($dados = mysqli_fetch_array($limite)) {
                                    $nome = $dados['nome'];
                                    $autor = $dados['autor'];
                                    $editora = $dados['editora'];
                                    $genero = $dados['genero'];
                                    $sinopse = $dados['sinopse'];
                                    $preco = $dados['preco'];
                                ?>
                                    <tr>
                                        <td><?= $nome ?></td>
                                        <td><?= $autor ?></td>
                                        <td><?= $editora ?></td>
                                        <td><?= $genero ?></td>
                                        <td><?= $sinopse ?></td>
                                        <td><?= $preco ?></td>
                                        <td class="btns">
                                            <a class='btnComprar' href='#' title='Comprar'>
                                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart4' viewBox='0 0 16 16'>
                                                    <path d='M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z' />
                                                </svg></a>
                                        </td>
                                    </tr>
                                <?php } ?>
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
<script>
    var search = document.getElementById('pesquisar');
    search.addEventListener("keydown", function(event) {
        if (event.key == "Enter") {
            searchData();
        }
    });

    function searchData() {
        window.location = 'mangas_com_login.php?search=' + search.value;
    }
</script>

</html>