<?php

	session_start(); 

	require_once("include/conexao.php");
  require_once("include/facebook-php-sdk-v4-5.0.0/src/Facebook/autoload.php");


  $fb = new Facebook\Facebook([
    'app_id' => '1553162941655773',
    'app_secret' => 'fe319e7ebd727d0abc8f5e17d7506e93',
    'default_graph_version' => 'v2.5',
  ]);

	$helper = $fb->getRedirectLoginHelper();

	try {
	  $accessToken = $helper->getAccessToken();
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
	  // When Graph returns an error
	  echo 'Graph returned an error: ' . $e->getMessage();
	  exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
	  // When validation fails or other local issues
	  echo 'Facebook SDK returned an error: ' . $e->getMessage();
	  exit;
	}

	if (! isset($accessToken)) {
	  if ($helper->getError()) {
	    header('HTTP/1.0 401 Unauthorized');
	    echo "Error: " . $helper->getError() . "\n";
	    echo "Error Code: " . $helper->getErrorCode() . "\n";
	    echo "Error Reason: " . $helper->getErrorReason() . "\n";
	    echo "Error Description: " . $helper->getErrorDescription() . "\n";
	  } else {
	    header('HTTP/1.0 400 Bad Request');
	    echo 'Bad request';
	  }
	  exit;
	}

	// Logged in
	echo '<h3>Access Token</h3>';
	//var_dump($accessToken->getValue());

	// The OAuth 2.0 client handler helps us manage access tokens
	$oAuth2Client = $fb->getOAuth2Client();

	// Get the access token metadata from /debug_token
	$tokenMetadata = $oAuth2Client->debugToken($accessToken);
	//echo '<h3>Metadata</h3>';
	//var_dump($tokenMetadata);

	// Validation (these will throw FacebookSDKException's when they fail)
	$tokenMetadata->validateAppId('1553162941655773'); // Replace {app-id} with your app id
	// If you know the user ID this access token belongs to, you can validate it here
	//$tokenMetadata->validateUserId('123');
	$tokenMetadata->validateExpiration();

	if (! $accessToken->isLongLived()) {
	  // Exchanges a short-lived access token for a long-lived one
	  try {
	    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
	  } catch (Facebook\Exceptions\FacebookSDKException $e) {
	    echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
	    exit;
	  }

	  echo '<h3>Long-lived</h3>';
	  var_dump($accessToken->getValue());
	}



	try {
	  // Returns a `Facebook\FacebookResponse` object
	  $response = $fb->get('/me?fields=id,name,email', $accessToken);
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
	  echo 'Graph returned an error: ' . $e->getMessage();
	  exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
	  echo 'Facebook SDK returned an error: ' . $e->getMessage();
	  exit;
	}

	$user = $response->getGraphUser();

	// echo 'Name: ' . $user['name'];
	// OR
	// echo 'Name: ' . $user->getName();

	// var_dump($user);

	// User is logged in with a long-lived access token.
	// You can redirect them to a members-only page.
	//header('Location: https://example.com/members.php');

	$sql_exists = "SELECT id, email FROM usuario WHERE email = '".$user['email']."' LIMIT 1";
	$result_exists = $conn->query($sql_exists);
  
  if ($result_exists->num_rows >0){

  	$linha = $result_exists->fetch_assoc(); 

		$_SESSION['nome'] = $linha['nome'];
		$_SESSION['id'] = $linha['id'];
		$_SESSION['email'] = $linha['email'];
		$_SESSION['usuario'] = $linha['usuario'];
		$_SESSION['role'] = $linha['role'];

		header("location: http://localhost/olimpiadas2016?pagina=minha_area");

  }
  else { 

		$role = "facebook";

		$sql = "INSERT INTO usuario (email, nome, role)VALUES (?,?,?)";
		
		$stmt = $conn->prepare($sql); 	

		if ($stmt){
			$stmt->bind_param('sss', $user['email'], $user['name'], $role);
			$stmt->execute();
			$result = $stmt->get_result(); 
			$linhasAfetadas = $stmt->affected_rows;

			if($linhasAfetadas)
			{

				$_SESSION['nome'] = $user['name'];
				$_SESSION['id'] = mysqli_insert_id($conn);
				$_SESSION['email'] = $user['email'];
				$_SESSION['role'] = 'facebook';

				header("location: http://localhost/olimpiadas2016?pagina=minha_area");
			}
			else {
				echo "ERROR: ".mysqli_error($conn);
			}
		}
		else {
			echo mysqli_error($conn);
		}
	}

?>