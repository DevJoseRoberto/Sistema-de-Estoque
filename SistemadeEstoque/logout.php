<?php

  session_start();


  // destruir todas as variaveis da sessao
  session_unset();

  // destroi a sessão
  session_destroy();

 // redirecionamento

  header("Location: index.html");


?>