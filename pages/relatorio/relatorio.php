<?php
require('../connection/verifica.php');
include_once('../connection/config.php');

$sql = "SELECT * FROM relatorio WHERE id_usuario = '" . $_SESSION["id_usuario"] . "'";
$query_relatorio = "SELECT COUNT(id) AS qnt_relatorio FROM relatorio WHERE id_usuario = '" . $_SESSION["id_usuario"] . "'";
$query_valor = "SELECT SUM(preco) AS valor_total FROM relatorio WHERE id_usuario = '" . $_SESSION["id_usuario"] . "'";
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
                <div class="sistema-container">
                    <h2>Relátorio de Compras</h2>
                    <div class="table-container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Quantidade</th>
                                    <th scope="col">Preço</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($manga_data = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $manga_data['titulo'] . "</td>";
                                    echo "<td>" . $manga_data['quantidade'] . "</td>";
                                    echo "<td>" . $manga_data['preco'] . "</td>";
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
                    <button><a href="gerarPdf.php" target="_blank">Baixar relatório</a></button>
                </div>
            </div>
        </section>
    </main>
</body>

</html>