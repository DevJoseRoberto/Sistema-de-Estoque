<?php
  include_once"../conexao.php";

  try {
    $valor = filter_var($_POST['valor']);
    $marca = filter_var($_POST['marca']);
    $categoria = filter_var($_POST['categoria']);

    $insert = $conectar->prepare("insert into cadastroproduto (valor,marca,categoria) values (:valor, :marca, :categoria) ");
    $insert->bindParam(':valor' , $valor);
    $insert->bindParam(':marca' , $marca);
    $insert->bindParam(':categoria' , $categoria);
    $insert->execute();

    header("location: index_Estoque.php");

  } catch (PODException $e) {
    
    echo 'Error:' . $e->getMessage();  
}

?>