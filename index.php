<?php

  require_once("include/conexao.php");
  require_once("include/tratamentos.php");

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>

    <meta charset="UTF-8">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

    <title><?php echo $titulo; ?> - Olimpíadas 2016</title>

    <link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/main.css">

  </head>
  <body>

    <header class="cabecalho">

      <div class="wrap-center">

        <a href="index.php" class="logo">
          <img src="images/logo.jpg" alt="Olimpíadas 2016" />
        </a>

        <ul>
          <li><a href="#">Modalidades</a></li>
          <li class="divisor">|</li>
          <li><a href="#">Calendário</a></li>
          <li class="divisor">|</li>
          <li><a href="#">Belo Horizonte</a></li>
          <li class="divisor">|</li>
          <li><a href="#">Ajuda</a></li>
          <li class="divisor">|</li>
          <li><a href="#">Login</a></li>
        </ul>

        <div class="clearfix">

        </div>

      </div>

    </header>

    <div class="main">

      <div class="wrap-center">

        <?php

          require_once($pagina . ".php");

        ?>

      </div><!-- fim wrap-center -->

    </div><!-- fim main -->

    <footer class="rodape">

      <p>
        Olimpíadas 2016 - Trabalho realizado por alunos da PUC Minas.
      </p>

    </footer>

    <script src="scripts/jquery-1.12.0.min.js"></script>
    <script src="scripts/main.js"></script>
  </body>
</html>
