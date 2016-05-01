<?php

  session_start();

  // pegando o nome da página pela variável enviada por get
  if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
    
    //if (!isset($_SESSION['usuario'])){
      //$pagina = "home";
    //}
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

    case "belohorizonte":
      $titulo = "Belo Horizonte";
    break;

    case "ajuda":
      $titulo = "Ajuda";
    break;

    case "futebol":
      $titulo = "Futebol";
    break;

    case "voleibol":
      $titulo = "Voleibol";
    break;

    case "volei-praia":
      $titulo = "Vôlei de Praia";
    break;

    case "ginastica-artistica":
      $titulo = "Ginástica Artística";
    break;


  }

?>
