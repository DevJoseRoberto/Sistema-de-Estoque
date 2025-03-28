<?php
   

   session_start();
   include('conexao.php');


   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // recebe os dados do formulario
     $login = $_POST['login'];
     $senha = $_POST['senha'];

      //prepara a consulta do banco de dados

      $sql = "SELECT * FROM tablogin WHERE login = :login AND senha = :senha";
      $stmt = $conectar->prepare($sql);
      $stmt -> bindParam(':login',$login);
      $stmt -> bindParam(':senha',$senha);
      $stmt ->execute();

      //verificar se encontrou o usuario

     if($stmt->rowCount() > 0){

        $usuario = $stmt ->fetch(PDO::FETCH_ASSOC);   
        // colocar o usuario em determiinada pagina
        $_SESSION['login'] = $usuario['login'];
        $_SESSION['tipoUsuario'] = $usuario['tipoUsuario'];

        //direcionamento

        if ($usuario['tipoUsuario'] == 'adm') {
            header("Location:admin/indexAdm.php");
            exit();
        }elseif($usuario['tipoUsuario'] == 'funcionario') {
            header("Location:cadastro/indexCadastro.html");
            exit();
        }elseif($usuario['tipoUsuario'] == 'cliente'){
            header("Location:index_Estoque.php");
            exit();
        }else{
            echo"<script>alert('Login ou senha incorreta');
            window.location.hrf = 'index.html'</script>";
        }

        
     }else{
        header("Location:index.html");
        exit();
     }
    }
?>