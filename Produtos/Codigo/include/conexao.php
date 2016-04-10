<?php

	$dbname = 'olimpiadas2016';
	$dbserver = 'localhost';
	$dbuser = 'root';
	$dbpass = '';

	$db = mysql_connect("$dbserver", "$dbuser", "$dbpass");
	mysql_select_db("$dbname", $db) or die ("Conexão com o Banco de Dados não foi Possível no momento. Tente mais tarde!!");

?>
