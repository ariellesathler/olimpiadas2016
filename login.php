
<script src="scripts/calendario.js"></script>
<section id="sp-portfolio-wrapper" class=" ">
    <div class="container container-interno">
       <div class="row-fluid" id="portfolio">
            <div class="box first">
                    <div class="center">
                        <h2>Entrar</h2>
                        <p class="lead">Acesse sua conta </p>
                    </div>
                <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-4">
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <form role="form" action="?pagina=efetualogin" Method="POST">
                      <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="usuario" name="usuario" required>
                      </div>
                      <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha" required>
                      </div>
                      <input type="submit" class="btn btn-primary btn-block" value="Entrar">
                      <a href="?pagina=cadastro-usuario" class="btn btn-warning btn-block"> Se Cadastrar</a>
                      <div class="row">
                        <div class="col-sm-12 text-center">
                          <p><strong>ou</strong></p>
                        </div>
                      </div>
                      <?php

                        $fb = new Facebook\Facebook([
                          'app_id' => '1553162941655773',
                          'app_secret' => 'fe319e7ebd727d0abc8f5e17d7506e93',
                          'default_graph_version' => 'v2.5',
                        ]);
                        

                        $helper = $fb->getRedirectLoginHelper();
                        $permissions = ['email']; // optional
                        $loginUrl = $helper->getLoginUrl('http://localhost/olimpiadas2016/efetualoginfacebook.php', $permissions);

                        echo '<a href="' . $loginUrl . '">Entrar com Facebook!</a>';

                      ?>
                    </form>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-4">
                </div>
            </div>            
          <div id="status" class="btn btn-block">
          </div>
        </div>
</div>
