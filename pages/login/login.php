<?php
include('../connection/config.php');
session_start(); // Inicia a sessão

//Validar Login
if (@$_REQUEST['submit'] == "Entrar") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha' ";
    $result = mysqli_query($con, $query);
    while ($coluna = mysqli_fetch_array($result)) {
        $_SESSION["id_usuario"] = $coluna["id"];
        $_SESSION["nome"] = $coluna["nome"];
        $_SESSION["avatar"] = $coluna["avatar"];
        $_SESSION["email_usuario"] = $coluna["email"];
        $_SESSION["UsuarioNivel"] = $coluna["nivel"];

        // caso queira direcionar para páginas diferentes
        $niv = $coluna['nivel'];
        if ($niv == "USER") {
            header("Location: ../sistema/sistema.php");
            exit;
        }

        if ($niv == "ADM") {
            header("Location: ../sistema/sistemaAdm.php");
            exit;
        }
        // ----------------------------------------------
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mangá Store - Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="../../src/img/favicon.png" type="image/x-icon">
</head>


<body>
    <header>
        <nav class="menu">
            <h1 class="logo">Mangá Store</h1>
            <ul class="nav-list">
                <li><a href="../../index.html" class="home">Home</a></li>
                <li><a href="../cadastros/cadastro.php" class="btn-cadastrar">Cadastrar</a></li>
                <li><a href="login.php" class="btn-login">Login</a></li>
            </ul>
        </nav>
    </header>

    <div class="box-login">
        <h1>Login</h1>
        <form action="login.php" method="POST">
            <input type="email" name="email" placeholder="email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputsubmit" type="submit" name="submit" value="Entrar">
        </form>
    </div>
</body>

</html>