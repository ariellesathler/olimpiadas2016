<?php

  // altera o cabeçalho do HTTP para retirar o cache e enviar como json (senão envia HTML)
  header('Cache-Control: no-cache, must-revalidate');
  header('Content-Type: application/json; charset=utf-8');

  // função para mostrar os erros (2 = mysql erros tambem, 1 = erros php, 0 = nada)
  ini_set('display_errors', 2);

  // conexão com o DB
  require_once("../include/conexao.php");

  // SELECT para buscar os eventos
  $sql = "SELECT * FROM eventos ORDER BY datahora";
  $query = mysql_query($sql);

  //  cria o array (list) com o quadro
  $eventos = array();

  while($row = mysql_fetch_array($query)){

    array_push($eventos, array("id" => $row['idEvento'], "idModalidade" => $row['idModalidade'], "nome" => $row['nome'], "descricao" => $row['descricao'], "local" => $row['local'], "imagem" => $row['imagem'], "datahora" => $row['datahora']));

  }
  // transforma em json
  $resposta = json_encode($eventos);

  // mostra o json
  echo $resposta;

?>
