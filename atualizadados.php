<?php

  	require_once("include/conexao.php");

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$cpf = $_POST['cpf'];
	$datanascimento = $_POST['datanascimento'];

	$idUsuario = $_SESSION['id'];

	$sql = "UPDATE usuario SET nome=?, email=?, senha=?, cpf=?, datanascimento=? WHERE id=$idUsuario LIMIT 1";
	
	$stmt = $conn->prepare($sql); 	

	if ($stmt){
		$stmt->bind_param('sssss', $nome, $email, $senha, $cpf, $datanascimento);
		$stmt->execute();
		$result = $stmt->get_result(); 
		$linhasAfetadas = $stmt->affected_rows;

		if($linhasAfetadas)
		{
			header("location: ?pagina=minha_area");
		}
	}


?>