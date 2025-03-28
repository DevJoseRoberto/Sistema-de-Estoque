<?php
  include_once "../conexao.php";

  try {
    $id = filter_var($_POST['id'],FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_var($_POST['nome']);
    $email = filter_var($_POST['email']);

    $update = $conectar->prepare("UPDATE qualquercoisa SET nome = :nome , email = :email WHERE id = :id");
    $update->bindParam(':id', $id);
    $update->bindParam(':nome', $nome);
    $update->bindParam(':email', $email);
    $update->execute();

    header('location: indexAdm.php');


} catch (PODException $e) {
    echo 'Error:' .$e->getMessage();  
}

?>