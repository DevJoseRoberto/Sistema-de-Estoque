<!DOCTYPE html>
<html lang="en">

<head>
   <style>
    section{
        padding: 200px ;
        background-color: #36454f;
        box-shadow: 0 0 20px black;
        width: 250px;
        height: 250px;
        margin-left: 600px;
        margin-top: 100px;
        border-radius: 10px;
        font-family: Arial, Helvetica, sans-serif;
    }

    h1{
        text-align: center;
        color: #ffffff;
        margin-top: -20px;
        font-size: 50px;
    }

    input[type="text"]{
            width: 250px;
            padding: 5px;
            margin-top: 10px;
            margin-bottom: 5px;
            border: 5px solid #ccc;
            border-radius: 5px;
            font-size: 20px;
        }
    input[type="submit"]{
        background-color: #e67e22;
        color: #ffffff;
        border: none;
        width: 270px;
        padding: 15px;
        font-size: 1rem;
        border-radius: 10px;
        cursor: pointer;
        transition: background-color 0.3s;
        text-align: center;
        margin-left: 1px;
        margin-top: 50px;
        font-size: 20px;
    }
   </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>
<body>

<?php
        include_once "../conexao.php";

            try {
                $consulta = $conectar->query("SELECT * FROM cadastroproduto");
                echo"<section>";

                echo"<table border='1'><tr><td>nome</td><td>Email</td><td>Categoria</td></tr></table>";
                    echo"<form action='../logout.php' method='post'><input type='submit' value='exit'></form>";
                    echo $consulta->rowCount() . "Lista de registro";
                    
                    echo"</section>";
            } catch (PODException $e) {
            echo $e->getMesage();
            }
    ?>
</body>

</html>