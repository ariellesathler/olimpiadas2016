<?php

	require_once("include/conexao.php");

	switch($_GET['acao']){

		case("novo"):

			$idModalidade = $_POST['idModalidade'];
			$titulo = $_POST['titulo'];
			$local = $_POST['local'];
			$descricao = $_POST['descricao'];
			$dataevento = $_POST['datadoevento'];

			$sql = "INSERT INTO eventos (idModalidade, nome, local, descricao, datahora) VALUES (?,?,?,?,?)";

			$stmt = $conn->prepare($sql); 	

			if ($stmt){
				$stmt->bind_param('issss', $idModalidade, $titulo, $local, $descricao, $dataevento);
				$stmt->execute();
				$result = $stmt->get_result(); 
				$linhasAfetadas = $stmt->affected_rows;

				echo mysqli_error($conn);

				if($linhasAfetadas)
				{
					header("location: ?pagina=ingressos");

				}
			}

		break;

		case("editar"):

			$idEvento = $_POST['idEvento'];
			$idModalidade = $_POST['idModalidade'];
			$titulo = $_POST['titulo'];
			$local = $_POST['local'];
			$descricao = $_POST['descricao'];
			$dataevento = $_POST['datadoevento'];

			$sql = "UPDATE eventos SET idModalidade=?, nome=?, local=?, descricao=?, datahora=? WHERE id=?";
			

			$stmt = $conn->prepare($sql); 	

			if ($stmt){
				$stmt->bind_param('issssi', $idModalidade, $titulo, $local, $descricao, $dataevento, $idEvento);
				$stmt->execute();
				$result = $stmt->get_result(); 
				$linhasAfetadas = $stmt->affected_rows;

				echo mysqli_error($conn);

				if($linhasAfetadas)
				{
					header("location: ?pagina=cadastro-evento");

				}
			}

		break;

		case("deletar"):


			$idEvento = $_GET['idEvento'];

			$sql = "DELETE FROM eventos WHERE idEvento=? LIMIT 1";

			$stmt = $conn->prepare($sql); 	

			if ($stmt){
				$stmt->bind_param('i', $idEvento);
				$stmt->execute();
				$result = $stmt->get_result(); 
				$linhasAfetadas = $stmt->affected_rows;

				echo mysqli_error($conn);

				if($linhasAfetadas)
				{
					header("location: ?pagina=cadastro-evento");

				}
			}


		break;

	}

?>