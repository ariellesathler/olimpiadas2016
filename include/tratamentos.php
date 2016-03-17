<?php

  // pegando o nome da página pela variável enviada por get
  if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
  }
  else {
    $pagina = "home";
  }

  $titulo = "";

  // tratando peculiaridades das páginas
	switch ($pagina) {

    case "home":
      $titulo = "Página principal";
    break;

    case "calendario":
      $titulo = "Calendário";
    break;

    case "modalidade":
      $titulo = "Modalidade";
    break;

    case "belohorizonte":
      $titulo = "Belo Horizonte";
    break;

    case "ajuda":
      $titulo = "Ajuda";
    break;


  }

?>
