<?php

  // altera o cabeçalho do HTTP para retirar o cache e enviar como json (senão envia HTML)
  header('Cache-Control: no-cache, must-revalidate');
  header('Content-Type: application/json; charset=utf-8');

  // função para mostrar os erros (2 = mysql erros tambem, 1 = erros php, 0 = nada)
  ini_set('display_errors', 2);

  // conexão com o DB
  require_once("../include/conexao.php");

  // SELECT buscando todas as modalidades
  $sql = "SELECT * FROM modalidades ORDER BY nome ASC";
  $query = mysql_query($sql);

  // cria o array (list) com as modalidades

  $modalidades = array();

  while($row = mysql_fetch_array($query)){

    array_push($modalidades, array("id" => $row['idModalidade'], "nome" => $row['nome'], "descricao" => $row['descricao'],  "finalidade" => $row['finalidade'], "composicaoequipe" => $row['composicaoequipe'], "regras" => $row['regras'], "estreia" => $row['estreia']));

  }

  // transforma em json
  $resposta = json_encode($modalidades);

  // mostra o json
  echo $resposta;

?>
