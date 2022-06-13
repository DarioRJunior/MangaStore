<?php

if (isset($_POST['submit'])) {
    include_once('../connection/config.php');
    $dir = "../../src/img/";
    $avatar = $_FILES['avatar'];
    $destino = "$dir".$avatar['name'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    $result = mysqli_query($con, "INSERT INTO usuario (avatar, nome, email, cpf, senha, nivel) VALUES ('$destino', '$nome', '$email', '$cpf', '$senha', 'USER')");


    if(move_uploaded_file($avatar['tmp_name'], $destino)) {
        echo "Upload realizado com sucesso!";
    } else {
        echo "Erro no upload!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mangá Store - Cadastro</title>
    <link rel="shortcut icon" href="../../src/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="cadastro.css">
</head>


<body>
    <header>
        <nav class="menu">
            <h1 class="logo">Mangá Store</h1>
            <ul class="nav-list">
                <li><a href="../../index.html" class="home">Home</a></li>
                <li><a href="cadastro.php" class="btn-cadastrar">Cadastrar</a></li>
                <li><a href="../login/login.php" class="btn-login">Login</a></li>
            </ul>
        </nav>
    </header>

    <div class="box-login">
        <div class="box">
            <form id="frm" action="cadastro.php" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <legend><b>Fórmulário de Clientes</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="file" name="avatar" id="avatar" class="inputUser" required>
                        <label for="avatar" class="labelInput"></label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="nome" class="labelInput">Nome</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="email" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelInput">Email</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="cpf" id="cpf" class="inputUser" maxlength="14" oninput="maskCPF(this)" onblur="validar()" required>
                        <label for="cpf" class="labelInput">Cpf</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="password" name="senha" id="senha" class="inputUser" required>
                        <label for="senha" class="labelInput">Senha</label>
                        <br><br>
                    </div>
                    <input type="submit" name="submit" id="submit" value="Cadastrar" onclick="usuarioCadastrado()">
                </fieldset>
            </form>
        </div>
    </div>
</body>
<script src="maskcpf.js"></script>

<script>
    function usuarioCadastrado() {
        alert("Usuário cadastrado com sucesso!");
    }
</script>
</html>