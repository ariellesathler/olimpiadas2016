<?php

  // altera o cabeçalho do HTTP para retirar o cache e enviar como json (senão envia HTML)
  header('Cache-Control: no-cache, must-revalidate');
  header('Content-Type: application/json; charset=utf-8');

  // função para mostrar os erros (2 = mysql erros tambem, 1 = erros php, 0 = nada)
  ini_set('display_errors', 2);

  // conexão com o DB
  require_once("../include/conexao.php");

  // pega o ID por GET (enviado por URL)
  $id_evento = $_GET['id'];

  // SELECT para buscar os eventos
  $sql = "SELECT * FROM eventos WHERE idEvento = $id_evento ORDER BY datahora LIMIT 1";
  $query = mysql_query($sql);
  $return = mysql_fetch_array($query);

  //  cria o array (list) com o quadro
  $evento = array("id" => $return['idEvento'], "idModalidade" => $return['idModalidade'], "nome" => $return['nome'], "descricao" => $return['descricao'], "local" => $return['local'], "imagem" => $return['imagem'], "datahora" => $return['datahora']);

  // transforma em json
  $resposta = json_encode($evento);

  // mostra o json
  echo $resposta;

?>
