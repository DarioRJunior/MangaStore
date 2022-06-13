<?php

require('../connection/verifica.php');


if ($_SESSION["UsuarioNivel"] != "ADM") echo "<script>alert('Você não é Administrador!');top.location.href='sistema.php';</script>";
if (!empty($_GET['id'])) {
    include_once('../connection/config.php');
    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM manga WHERE idManga =$id";
    $result = $con->query($sqlSelect);

    if ($result->num_rows > 0) {
        while ($manga_data = mysqli_fetch_assoc($result)) {
            $nome = $manga_data['nome'];
            $autor = $manga_data['autor'];
            $editora = $manga_data['editora'];
            $genero = $manga_data['genero'];
            $sinopse = $manga_data['sinopse'];
            $preco = $manga_data['preco'];
        }
    } else {
        header("Location: lista_mangas.php");
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameCity - Cadastro de anúncio</title>
    <link rel="shortcut icon" href="../../src/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="cadastro_mangas.css">
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
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Editar Mangá</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" value="<?php echo $nome ?>" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="autor" id="autor" value="<?php echo $autor ?>" class="inputUser" required>
                    <label for="autor" class="labelInput">Autor</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="editora" id="editora" value="<?php echo $editora ?>" class="inputUser" required>
                    <label for="editora" class="labelInput">Editora</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="genero" id="genero" value="<?php echo $genero ?>" class="inputUser" required>
                    <label for="genero" class="labelInput">Genero</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="sinopse" id="sinopse" value="<?php echo $sinopse ?>" class="inputUser" required>
                    <label for="sinopse" class="labelInput">Sinopse</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="preco" id="preco" value="<?php echo $preco ?>" class="inputUser" required>
                    <label for="preco" class="labelInput">Preço:</label>
                </div>
                <br><br>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update" value="Atualizar">
            </fieldset>
        </form>
    </div>
</body>

</html>