<?php
include_once('../connection/config.php');

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    $sqlUpdate = "UPDATE usuario SET nome = '$nome',  email = '$email', cpf = '$cpf', senha = '$senha' WHERE id = '$id'";
    $result = mysqli_query($con, $sqlUpdate);
}

header("Location: ../login/login.php");
