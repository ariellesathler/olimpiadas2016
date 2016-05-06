<?php
	
	require_once("include/tratamentos.php");
	require_once("include/conexao.php");

	$email = $_POST['usuario'];
	$senha = md5($_POST['senha']);
	//$senha = $_POST['senha'];
	var_dump($senha);

	$sql = "select * from usuario where email = ? and senha = ?";
	$stmt = $conn->prepare($sql); 
	
	if ($stmt){
		var_dump($stmt);
		$stmt->bind_param('ss', $email, $senha);
		$stmt->execute();
		$result = $stmt->get_result(); 

		$linha = $result->fetch_assoc(); 
		var_dump($linha);

		if($linha){
		$_SESSION['nome'] = $linha['nome'];
		$_SESSION['id'] = $linha['id'];
		$_SESSION['email'] = $linha['email'];
		$_SESSION['usuario'] = $linha['usuario'];
		$_SESSION['role'] = $linha['role'];

			header("location: ?pagina=minha_area");
		} else {
			var_dump($senha);
			header("location: ?pagina=login&msg=Usuário e/ou senha inválidos.");
		}
	}
?>