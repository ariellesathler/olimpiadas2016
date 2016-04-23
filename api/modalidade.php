<?php

  // altera o cabeçalho do HTTP para retirar o cache e enviar como json (senão envia HTML)
  header('Cache-Control: no-cache, must-revalidate');
  header('Content-Type: application/json; charset=utf-8');

  // função para mostrar os erros (2 = mysql erros tambem, 1 = erros php, 0 = nada)
  ini_set('display_errors', 2);

  // conexão com o DB
  require_once("../include/conexao.php");

  // pega o ID por GET (enviado por URL)
  $id_modalidade = $_GET['id'];

  // SELECT para pegar o valor
  $sql = "SELECT * FROM modalidades WHERE idModalidade = $id_modalidade LIMIT 1";
  $query = mysql_query($sql);
  $return = mysql_fetch_array($query);

  // cria o array (list) com as modalidades
  $modalidade = array("id" => $return['idModalidade'], "nome" => $return['nome'], "descricao" => $return['descricao'], "finalidade" => $return['finalidade'], "composicaoequipe" => $return['composicaoequipe'], "regras" => $return['regras'], "estreia" => $return['estreia']);

  // transforma em json
  $resposta = json_encode($modalidade);

  // mostra o json
  echo $resposta;

?>
