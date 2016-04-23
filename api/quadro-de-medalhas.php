<?php

  // altera o cabeçalho do HTTP para retirar o cache e enviar como json (senão envia HTML)
  header('Cache-Control: no-cache, must-revalidate');
  header('Content-Type: application/json; charset=utf-8');

  // função para mostrar os erros (2 = mysql erros tambem, 1 = erros php, 0 = nada)
  ini_set('display_errors', 2);

  // conexão com o DB
  require_once("../include/conexao.php");

  // SELECT para buscar o quadro de medalhas
  $sql = "SELECT * FROM quadro ORDER BY pais ASC";
  $query = mysql_query($sql);

  //  cria o array (list) com o quadro
  $quadro = array();

  while($row = mysql_fetch_array($query)){

    array_push($quadro, array("id" => $row['idPais'], "pais" => $row['pais'], "ouro" => $row['ouro'], "prata" => $row['prata'], "bronze" => $row['bronze'], "total" => $row['total']));

  }
  // transforma em json
  $resposta = json_encode($quadro);

  // mostra o json
  echo $resposta;

?>
