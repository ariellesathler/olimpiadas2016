<?php

	session_unset($_SESSION['nome']);
	session_unset($_SESSION['id']);
	session_unset($_SESSION['email']);
	session_unset($_SESSION['usuario']);


	header("location: ?pagina=home");

?>