<?php
require('../connection/verifica.php');

if ($_SESSION["UsuarioNivel"] != "ADM") echo "<script>alert('Você não é Administrador!');top.location.href='sistema.php';</script>";
if (isset($_POST['submit'])) {
    include_once('../connection/config.php');
    $nome = $_POST['nome'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $genero = $_POST['genero'];
    $sinopse = $_POST['sinopse'];
    $preco = $_POST['preco'];

    $result = mysqli_query($con, "INSERT INTO manga (nome, autor, editora, genero, sinopse, preco) VALUES ('$nome', '$autor', '$editora', '$genero', '$sinopse', '$preco')");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mangá Store - Cadastro de mangas</title>
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

    <div class="box-login">
        <div class="box">
            <form action="cadastro_mangas.php" method="POST">
                <fieldset>
                    <legend><b>Cadastrar mangás</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="nome" class="labelInput">Nome</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="autor" id="autor" class="inputUser" required>
                        <label for="autor" class="labelInput">Autor</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="editora" id="editora" class="inputUser" required>
                        <label for="editora" class="labelInput">Editora</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="genero" id="genero" class="inputUser" required>
                        <label for="genero" class="labelInput">Genero</label>
                        <br><br>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="sinopse" id="sinopse" class="inputUser" required>
                        <label for="sinopse" class="labelInput">Sinopse</label>
                        <br><br>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="preco" id="preco" class="inputUser" required>
                        <label for="preco" class="labelInput">Preço</label>
                        <br><br>
                    </div>
                    <input type="submit" name="submit" id="submit" value="Cadastrar" onclick="mensagem()">
                </fieldset>
            </form>
        </div>
    </div>
</body>
<script>
    function mensagem(){
        alert("Mangá Registrado com sucesso!");
    }
</script>
</html>