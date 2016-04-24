<?php

	$dbname = 'olimpiadas2016';
	$dbserver = 'localhost';
	$dbuser = 'root';
	$dbpass = '';

	 $conn  = new mysqli("$dbserver", "$dbuser", "$dbpass");
	 $conn->set_charset('utf8');
	  // Verifica conexão
	  if ($conn->connect_error) {
	    die("Conexão com o Banco de Dados não foi Possível no momento. Tente mais tarde!" . $conn->connect_error);	
	  }

?>
