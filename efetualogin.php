<?

	session_start();

	include("includes/connect.php");

	$email = $_POST['email'];
	//$senha = md5($_POST['senha']);
	$senha = $_POST['senha'];

	$sql = "SELECT * FROM usuarios WHERE email=? AND senha=?";
	$stmt = $conn->prepare($sql); 
	if ($stmt){
		$stmt->bind_param('ss', $email, $senha);
		$stmt->execute();
		$result = $stmt->get_result(); 

		$linha = $result->fetch_assoc(); 

		if($linha){
		$_SESSION['nome'] = $linha['nome'];
		$_SESSION['id'] = $linha['id'];
		$_SESSION['email'] = $linha['email'];
		$_SESSION['usuario'] = $linha['usuario'];

			header("location: minha_area.php");
		} else {
			header("location: login.php?msg=Usuário e/ou senha inválidos.");
		}
	}
?>