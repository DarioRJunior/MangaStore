<?php
require('../connection/verifica.php');

if (!empty($_GET['id'])) {
    include_once('../connection/config.php');
    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuario WHERE id = $id";
    $result = $con->query($sqlSelect);

    if ($result->num_rows > 0) {
        while ($usuario_data = mysqli_fetch_assoc($result)) {
            $nome = $usuario_data['nome'];
            $email = $usuario_data['email'];
            $cpf = $usuario_data['cpf'];
            $senha = $usuario_data['senha'];
        }
    } else {
        header("Location: ../sistema/sistemaAdm.php");
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyStock - Editar Perfil</title>
    <link rel="shortcut icon" href="../../src/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="editar_perfil.css">
</head>

<body>
    <header>
        <nav class="menu">
            <h1 class="logo">Mangá Store</h1>
            <p class="bem-vindo">Bem-vindo a Mangá Store, <?php echo $_SESSION["nome"]; ?></p>
            <ul class="nav-list">
                <li><a href="../sistema/sistemaAdm.php">Voltar</a></li>
                <li><a href="../login/login.php">Sair</a></li>
            </ul>
        </nav>
    </header>

    <div class="box-login">
        <div class="box">
            <form action="saveEdit.php" method="POST">
                <fieldset>
                    <legend><b>Editar seu perfil</b></legend>
                    <br>
                    <div class="inputBox">
                        <img class="avatar" src="<?php echo $_SESSION["avatar"]; ?>" alt="">
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" value="<?php echo $nome ?>" class="inputUser" required>
                        <label for="nome" class="labelInput">Nome</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="cpf" id="cpf" maxlength="14" oninput="maskCPF(this)" value="<?php echo $cpf ?>" onblur="validar()" class="inputUser" required>
                        <label for="cpf" class="labelInput">Cpf</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="email" name="email" id="email" value="<?php echo $email ?>" class="inputUser" required>
                        <label for="email" class="labelInput">Email</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="password" name="senha" id="senha" value="<?php echo $senha ?>" class="inputUser" required>
                        <label for="senha" class="labelInput">Senha</label>
                        <br><br>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="submit" name="update" id="update" value="Atualizar" onclick="mensagem()">
                </fieldset>
            </form>
        </div>
    </div>
</body>

<script>
    function mensagem() {
        alert("Usuário atualizado com sucesso! Faça o login novamente para aplicar as alterações.");
    }
</script>
<script src="../cadastros/maskcpf.js"></script>
</html>