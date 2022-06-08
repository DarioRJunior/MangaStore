<?php 

if (!empty($_GET['id'])) {
    include_once('../connection/config.php');
    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM manga WHERE idManga = $id";
    $result = $con->query($sqlSelect);

    if ($result->num_rows > 0) {
        $sqlDelete = "DELETE FROM manga WHERE idManga =$id";
        $resultDelete = $con->query($sqlDelete);
    }
}
    header("Location: lista_mangas.php");
?>