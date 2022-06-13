<?php

include_once('../connection/config.php');

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $genero = $_POST['genero'];
    $sinopse = $_POST['sinopse'];
    $preco = $_POST['preco'];

    $sqlUpdate = "UPDATE manga SET nome='$nome', autor='$autor', editora='$editora', genero='$genero', sinopse='$sinopse', preco='$preco' WHERE idManga='$id'";

    $result = mysqli_query($con, $sqlUpdate);
}
header("Location: ../mangas/lista_mangas.php?pagina=1");
