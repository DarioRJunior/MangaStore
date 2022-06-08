<?php
require('../connection/verifica.php');
include_once('../connection/config.php');

$sql = "SELECT * FROM manga ORDER BY idManga ASC";

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
                                while ($manga_data = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $manga_data['nome'] . "</td>";
                                    echo "<td>" . $manga_data['autor'] . "</td>";
                                    echo "<td>" . $manga_data['editora'] . "</td>";
                                    echo "<td>" . $manga_data['genero'] . "</td>";
                                    echo "<td>" . $manga_data['sinopse'] . "</td>";
                                    echo "<td>" . $manga_data['preco'] . "</td>";
                                    echo "<td class='btns'>
                            <a class='btnComprar' href='#' title='Comprar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart4' viewBox='0 0 16 16'>
                            <path d='M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z'/>
                        </svg></a>
                        </td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>