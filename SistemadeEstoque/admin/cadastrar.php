<?php
  include_once"../conexao.php";

  try {
    $nome = filter_var($_POST['nome']);
    $email = filter_var($_POST['email']);

    $insert = $conectar->prepare("insert into qualquercoisa (nome,email) values (:nome, :email) ");
    $insert->bindParam(':nome' , $nome);
    $insert->bindParam(':email' , $email);
    $insert->execute();

    header("location: indexAdm.php");

  } catch (PODException $e) {
    
    echo 'Error:' . $e->getMessage();  
}


?>