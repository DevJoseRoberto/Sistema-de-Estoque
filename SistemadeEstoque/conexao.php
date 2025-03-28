<?php

// ../:host=localhost etc... para subpastar no banco de dados
 try {
    //faz conexão com o banco
   $conectar = new PDO("mysql:host=localhost;port=3306;dbname=sistemaestoque;","root","");
} catch (Exception $e) {
   echo" Nao foi possivel " . $e->getMessage();
 }

?>