<?php
include_once('../connection/config.php');

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $nivel = $_POST['nivel'];

    $sqlUpdate = "UPDATE usuario SET nome = '$nome',  email = '$email', cpf = '$cpf', senha = '$senha', nivel = '$nivel' WHERE id = '$id'";
    $result = mysqli_query($con, $sqlUpdate);
}

header("Location: ../relatorio-clientes/relatorio-clientes.php");
