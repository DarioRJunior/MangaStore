<?php
require('../connection/verifica.php');
include_once('../connection/config.php');

if (isset($_POST['ASC'])) {
    $asc_query = "SELECT * FROM relatorio WHERE id_usuario = '" . $_SESSION["id_usuario"] . "' ORDER BY data ASC";
    $result = $con->query($asc_query);
}

// Descending Order
elseif (isset($_POST['DESC'])) {
    $desc_query = "SELECT * FROM relatorio WHERE id_usuario = '" . $_SESSION["id_usuario"] . "' ORDER BY data DESC";
    $result = $con->query($desc_query);
} elseif (isset($_POST['Normal'])) {
    $default_query = "SELECT * FROM relatorio WHERE id_usuario = '" . $_SESSION["id_usuario"] . "'";
    $result = $con->query($default_query);
} else {
    $default_query = "SELECT * FROM relatorio WHERE id_usuario = '" . $_SESSION["id_usuario"] . "'";
    $result = $con->query($default_query);
}

$query_relatorio = "SELECT COUNT(id) AS qnt_relatorio FROM relatorio WHERE id_usuario = '" . $_SESSION["id_usuario"] . "'";
$query_valor = "SELECT SUM(preco) AS valor_total FROM relatorio WHERE id_usuario = '" . $_SESSION["id_usuario"] . "'";

function invdata($data)
{
    $parte = explode("-", $data);
    return ($parte[2] . "-" . $parte[1] . "-" . $parte[0]);
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mangá Store - Mangás</title>
    <link rel="shortcut icon" href="../../src/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="relatorio.css">
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
                <div class="box-ordenar">
                    <form action="relatorio.php" method="POST">
                        <div id="ordenar">
                            <p>Ordenar relatório de compras por:</p>
                            <input class="btn-ordenar" type="submit" name="Normal" value="Ordem Padrão">
                            <input class="btn-ordenar" type="submit" name="ASC" value="Compra Mais Antiga">
                            <input class="btn-ordenar" type="submit" name="DESC" value="Compra Mais Recente">
                        </div>
                </div>
                <div class="sistema-container">
                    <h2>Relátorio de Compras</h2>
                    <div class="table-container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Quantidade</th>
                                    <th scope="col">Preço</th>
                                    <th scope="col">Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($manga_data = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $manga_data['titulo'] . "</td>";
                                    echo "<td>" . $manga_data['quantidade'] . "</td>";
                                    echo "<td>" . $manga_data['preco'] . "</td>";
                                    echo "<td>" . invdata($manga_data['data']) . "</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <?php
                    $result_relatorio = $con->query($query_relatorio);
                    $relatorio_data = mysqli_fetch_assoc($result_relatorio);
                    echo "<p class='qnt-relatorio'>Total de Mangás: " . $relatorio_data['qnt_relatorio'] . "</p>";

                    $result_valor = $con->query($query_valor);
                    $valor_data = mysqli_fetch_assoc($result_valor);
                    echo "<p class='valor-total'>Valor Total: R$ " . $valor_data['valor_total'] . "</p>";
                    ?>
                    <button><a href="gerarPdf.php" target="_blank" class="btn-baixar">Baixar relatório</a></button>
                </div>
                </form>
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
        window.location = 'relatorio.php?search=' + search.value;
    }
</script>

</html>