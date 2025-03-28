<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/estoque.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            color: #ffffff;
        }
        section{
            padding: 200px ;
            background-color: #36454f;
            box-shadow: 0 0 20px black;
            width: 250px;
            height: 150px;
            margin-left: 570px;
            margin-top: 150px;
            border-radius: 10px;
        }

        table{
            margin-left: 43px;
            margin-top: 20px;
        }

        a{
            text-align: center;
            color: white; /* o que ele faz? */
            text-decoration: none; /* o que ele faz? */
            font-weight: bold; /* o que ele faz? */
            padding: 50px; /* o que ele faz? */
            transition: background-colo 0.3s, color 0.3s; /* o que ele faz? */
            border-radius: 5px; /* o que ele faz? */
            margin-top: 1px;
            font-size: 20px;
        }   

        header{
            background-color: bisque;
        }

        input[type="submit"]{
            background-color: #e67e22;
            color: #ffffff;
            border: none;
            width: 250px;
            padding: 15px;
            font-size: 1rem;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-align: center;
            margin-left: 1px;
            margin-top: 150px;
            font-size: 20px;
        }

    </style>
</head>
<body>
    <?php
        include_once "../conexao.php";

            try {
                $consulta = $conectar->query("SELECT * FROM qualquercoisa");
                echo"<section>";
                
                echo"<a class='pesquisa' href='formcadastro.html'>novo cadastro</a>";

                echo"<table border='1'><tr><td>nome</td><td>Email</td><td>açoes</td></tr>";

                    while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
                        echo"<tr><td>$linha[nome]<td>$linha[email]</td><td><a href='formeditar.php? id=$linha[id]'>Editar</a> = <a href='excluir.php? id=$linha[id]'>Excluir</a>
                        </td></tr>";

                    }
                    echo"</table>";
                    echo"<form action='../logout.php' method='post'><input type='submit' value='exit'></form>";
                    echo $consulta->rowCount() . "Lista de registro";
                    
                    echo"</section>";




            } catch (PODException $e) {
            echo $e->getMesage();
            }
    ?>
    
</body>
</html>