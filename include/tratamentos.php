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
    
    case "minha_area":
      $titulo = "Minha área";
    break;

    case "login":
      $titulo = "Login";
    break;

    case "efetualogin":
     require_once("efetualogin.php");
     exit;
    break;

    case "atualizadados":
     require_once("atualizadados.php");
     exit;
    break;

    case "eventos-acoes":
     require_once("eventos-acoes.php");
     exit;
    break;

    case "logout":
     require_once("logout.php");
     exit;
    break;


  }

?>
