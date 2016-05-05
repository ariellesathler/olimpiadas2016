<?php

	$id = $_GET['id'];
	$idUsuario = $_SESSION['id'];

	$sql = "INSERT INTO compras (idUsuario, idEvento)VALUES (?,?)";
	
	$stmt = $conn->prepare($sql); 	

	if ($stmt){
		$stmt->bind_param('ii', $idUsuario, $id);
		$stmt->execute();
		$result = $stmt->get_result(); 
		$linhasAfetadas = $stmt->affected_rows;

		if($linhasAfetadas)
		{
			header("location: ?pagina=minha_area");
		}
	}




?>