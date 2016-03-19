<?php

  //require_once("include/conexao.php");
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

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/main.css">

  </head>
  <body>

    <header class="cabecalho">

      <div class="wrap-center">

        <a href="index.php" class="logo">
          <img src="images/logo2016.png" alt="Olimpíadas 2016" />
        </a>

        <ul>
          <li><a href="?pagina=home">Página Principal</a></li>
          <li class="divisor">|</li>
          <li><a href="?pagina=calendario">Calendário</a></li>
          <li class="divisor">|</li>
          <li><a href="?pagina=belohorizonte">Belo Horizonte</a></li>
          <li class="divisor">|</li>
          <li><a href="?pagina=ajuda">Ajuda</a></li>
          <li class="divisor">|</li>
          <li><a href="?pagina=login">Login</a></li>
          <li class="divisor">|</li>
          <li><a href="?pagina=ingressos">Ingressos</a></li>
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
        
        <div class="clearfix"></div>

      </div><!-- fim wrap-center -->

    </div><!-- fim main -->

    <footer class="rodape">
      <div>
          <ul class="redes" id="social">
            <li class="twitter"><a href="https://twitter.com/rio2016" target="_blank" ></a></li>
            <li class="facebook"><a href="https://www.facebook.com/rio2016pt/?brand_redir=1102184159816462" target="_blank" ></a></li>
            <li class="gplus"><a href="https://plus.google.com/+Rio2016/posts" target="_blank"></a></li>
          </ul>
        </div>
      <p>
        Olimpíadas 2016 - Trabalho realizado por alunos da PUC Minas.
      </p>

      
    </footer>

    <script src="scripts/jquery-1.12.0.min.js"></script>
    <script src="scripts/main.js"></script>
  </body>
</html>
