<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

    include_once"../conexao.php";

      $id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);

        $consulta = $conectar->query("SELECT * FROM qualquercoisa WHERE id = '$id'");
        $linha = $consulta->fetch(PDO::FETCH_ASSOC);

  ?>

    <form action="editar.php" method="post"> 

    Nome: <input type="text" name="nome" value="<?php echo $linha['nome']?>" id="nome"><br>
    Email: <input type="text" name="email" value="<?php echo $linha['email']?>" id="email"><br>

    <input type="hidden" name="id" value="<?php echo $linha['id']?>">
    <input type="submit" value="Editar">
    </form>

</body>
</html>

