<?php
include_once('../connection/config.php');
require('../connection/verifica.php');

if ($_SESSION["UsuarioNivel"] != "ADM") echo "<script>alert('Você não é Administrador!');top.location.href='sistema.php';</script>";

$sql = "SELECT * FROM usuario ORDER BY id ASC";

$result = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mangá Store - Relatório de clientes</title>
    <link rel="shortcut icon" href="../../src/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="relatorio-clientes.css">
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
                    <h2>Usuários Cadastrados no sistema</h2>
                    <div class="table-container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">CPF</th>
                                    <th scope="col">Senha</th>
                                    <th scope="col">Nível</th>
                                    <th scope="col">...</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($usuario_data = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $usuario_data['nome'] . "</td>";
                                    echo "<td>" . $usuario_data['email'] . "</td>";
                                    echo "<td>" . $usuario_data['cpf'] . "</td>";
                                    echo "<td>" . $usuario_data['senha'] . "</td>";
                                    echo "<td>" . $usuario_data['nivel'] . "</td>";
                                    echo "<td class='btns'>
                            <a class='btnEditar' href='editar_perfil_clientes.php?id=$usuario_data[id]' title='Editar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                            <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                        </svg></a>

                        <a class='btnExcluir' href='delete.php?id=$usuario_data[id]' title='Excluir' onclick='mensagemDeletar()'>
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
                </div>
            </div>
        </section>
    </main>
</body>

<script>
    function mensagemDeletar() {
        alert("Usuário Deletado com Sucesso!");
    }
</script>
</html>