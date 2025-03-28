<?php
    include_once "../conexao.php";
    try {
        $id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
        $delete = $conectar->prepare("delete from qualquercoisa where id = :id");
        $delete->bindParam('id', $id);
        $delete->execute();

        header('location: indexAdm.php');


    } catch (PODException $e) {
        echo'erro:' . $e->getMessage();
    }
?>         