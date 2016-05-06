<?php

  	require_once("include/conexao.php");

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);
	$cpf = $_POST['cpf'];
	$datanascimento = $_POST['datanascimento'];
	$role = "user";

	$sql = "INSERT INTO usuario (email, nome, senha, cpf, datanascimento, role)VALUES (?,?,?,?,?,?)";
	
	$stmt = $conn->prepare($sql); 	

	if ($stmt){
		$stmt->bind_param('ssssss', $email, $nome, $senha, $cpf, $datanascimento, $role);
		$stmt->execute();
		$result = $stmt->get_result(); 
		$linhasAfetadas = $stmt->affected_rows;


		if($linhasAfetadas)
		{
			header("location: ?pagina=login");

		}
	}



?>