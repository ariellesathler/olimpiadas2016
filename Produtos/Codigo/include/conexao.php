<?php

	$dbname = 'acsm_c3e5a30c054a371';
	$dbserver = 'us-cdbr-azure-central-a.cloudapp.net';
	$dbuser = 'bdd662bb70113f';
	$dbpass = '35611b61';

	$dbname = 'olimpiadas_2016';
	$dbserver = 'localhost';
	$dbuser = 'root';
	$dbpass = '';

	$db = mysql_connect("$dbserver", "$dbuser", "$dbpass");
	mysql_select_db("$dbname", $db) or die ("Conexão com o Banco de Dados não foi Possível no momento. Tente mais tarde!!");

?>
