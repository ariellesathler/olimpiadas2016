<?php

  require_once("include/conexao.php");
  require_once("include/tratamentos.php");
  require_once("include/facebook-php-sdk-v4-5.0.0/src/Facebook/autoload.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $titulo; ?> - Olimpíadas 2016</title>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href="styles/bootstrap.min.css" rel="stylesheet">
    <link href="styles/font-awesome.min.css" rel="stylesheet">
    <link href="styles/prettyPhoto.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
    <link href="styles/styles.css" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="0">

    <header id="header" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="?pagina=home"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li <?php if($pagina == "belohorizonte"){ ?> class="active" <?php } ?>><a href="?pagina=belohorizonte">Belo Horizonte</a></li>
                        <li <?php if($pagina == "calendario"){ ?> class="active" <?php } ?>><a href="?pagina=calendario">Calendário</a></li>                        
                        <li <?php if($pagina == "ingressos"){ ?> class="active" <?php } ?>><a href="?pagina=ingressos">Ingressos</a></li>

                        <li <?php if($pagina == "quadro-medalhas"){ ?> class="active" <?php } ?>><a href="?pagina=quadro-medalhas">Medalhas</a></li>

                        <?php if(isset($_SESSION['id'])){ ?>

                        <?php if($_SESSION['role'] == "admin"){ ?>
                        <li <?php if($pagina == "cadastro-evento"){ ?> class="active" <?php } ?>><a href="?pagina=cadastro-evento">Cadastrar Eventos</a></li>
                        <?php } ?>

                        <li <?php if($pagina == "minha_area"){ ?> class="active" <?php } ?>><a href="?pagina=minha_area">Minha área</a></li>
                        <li><a href="?pagina=logout">Sair</a></li>
                        <?php } else { ?>
                        <li <?php if($pagina == "login"){ ?> class="active" <?php } ?>><a href="?pagina=login">Login</a></li>
                        <?php } ?>
                         <li <?php if($pagina == "ajuda"){ ?> class="active" <?php } ?>><a href="?pagina=ajuda">Ajuda</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header><!--/#header-->

    <div class="main">

      <div class="wrap-center">

        <?php

          require_once($pagina . ".php");

        ?>

        <div class="clearfix"></div>

      </div><!-- fim wrap-center -->

    </div><!-- fim main -->

    <section id="contact">
        <div class="container">
            <div class="box last">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="text-center">Olimpíadas nas redes</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="social">
                                    <li class="col-md-2"><a href="https://www.facebook.com/rio2016pt/?brand_redir=1102184159816462" target="_blank"><i class="icon-facebook icon-social"></i> Facebook</a></li>
                                    <li class="col-md-2"><a href="https://plus.google.com/+Rio2016" target="_blank"><i class="icon-google-plus icon-social"></i> Google Plus</a></li>
                                    <li class="col-md-2"><a href="https://twitter.com/rio2016" target="_blank"><i class="icon-twitter icon-social"></i> Twitter</a></li>
                                    <li class="col-md-2"><a href="https://www.instagram.com/rio2016/" target="_blank"><i class="icon-instagram icon-social"></i> Instagram</a></li>
                                    <li class="col-md-2"><a href="https://www.youtube.com/rio2016" target="_blank"><i class="icon-youtube icon-social"></i> Youtube</a></li>
                                    <li class="col-md-2"><a href="https://www.linkedin.com/company/rio-2016-organizing-committee-for-the-olympic-games" target="_blank"><i class="icon-linkedin icon-social"></i> LinkedIn</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--/.col-sm-6-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#contact-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016 - PUC Minas Barreiro. Todos os direitos reservados.
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

   <!-- <script src="scripts/OLD/jquery-1.12.0.min.js"></script>-->
    <script src="scripts/OLD/jquery-1.12.0.min.js"></script>    
    <script src="scripts/OLD/main.js"></script>
    <!--<script src="scripts/main.js"></script>-->
  
    <script>
      // This is called with the results from from FB.getLoginStatus().
      function statusChangeCallback(response) {
        console.log('statusChangeCallback');
        console.log(response);
        // The response object is returned with a status field that lets the
        // app know the current login status of the person.
        // Full docs on the response object can be found in the documentation
        // for FB.getLoginStatus().
        if (response.status === 'connected') {
          // Logged into your app and Facebook.
          testAPI();
        } else if (response.status === 'not_authorized') {
          // The person is logged into Facebook, but not your app.
          document.getElementById('status').innerHTML = 'Please log ' +
            'into this app.';
        } else {
          // The person is not logged into Facebook, so we're not sure if
          // they are logged into this app or not.
          document.getElementById('status').innerHTML = 'Please log ' +
            'into Facebook.';
        }
      }

      // This function is called when someone finishes with the Login
      // Button.  See the onlogin handler attached to it in the sample
      // code below.
      function checkLoginState() {
        FB.getLoginStatus(function(response) {
          statusChangeCallback(response);
        });
      }

      window.fbAsyncInit = function() {
      FB.init({
        appId      : '1553162941655773',
        cookie     : true,  // enable cookies to allow the server to access 
                            // the session
        xfbml      : true,  // parse social plugins on this page
        version    : 'v2.2' // use version 2.2
      });

      // Now that we've initialized the JavaScript SDK, we call 
      // FB.getLoginStatus().  This function gets the state of the
      // person visiting this page and can return one of three states to
      // the callback you provide.  They can be:
      //
      // 1. Logged into your app ('connected')
      // 2. Logged into Facebook, but not your app ('not_authorized')
      // 3. Not logged into Facebook and can't tell if they are logged into
      //    your app or not.
      //
      // These three cases are handled in the callback function.

      FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
      });

      };

      // Load the SDK asynchronously
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));

      // Here we run a very simple test of the Graph API after login is
      // successful.  See statusChangeCallback() for when this call is made.
      function testAPI() {
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me', function(response) {
          console.log('Successful login for: ' + response.name);
          document.getElementById('status').innerHTML =
            'Thanks for logging in, ' + response.name + '!';
        });
      }
    </script>


  </body>
</html>
