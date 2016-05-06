    <section id="main-slider" class="slider-eventos carousel">
      <div class="carousel-inner">
        <div class="item active">
            <div class="container">
            </div>
        </div><!--/.item-->
      </div><!--/.carousel-inner-->
    </section><!--/#main-slider-->


    <section id="services">
        <div class="container">
            <div class="box first">

                <h3>Seus ingressos</h3>

                <?php

                    $sql_compras = "select * from compras join eventos on compras.idEvento = eventos.idEvento where compras.idUsuario = ?";
                    $stmt = $conn->prepare($sql_compras); 

                    if ($stmt):
                        $stmt->bind_param('i', $_SESSION['id']);
                        $stmt->execute();
                        $result = $stmt->get_result(); 

                        while ($linha = $result->fetch_array()):

                ?>

                <div class="row">

                    <div class="col-lg-12">
                        <h4><?php echo $linha['nome']; ?></h4>
                        <p><?php echo $linha['descricao']; ?></p>
                        <p><?php echo $linha['local']; ?></p>
                        <p><?php echo date('d/m/Y H:i', strtotime($linha['datahora'])); ?></p>
                    </div>

                    <hr>

                </div>

                <?php

                        endwhile;

                    endif;

                ?>


                <form class="row" action="?pagina=atualizadados" method="post">

                    <div class="col-lg-6 col-lg-offset-3">
                        <div class="row">
                            <div class="col-lg-12">
                                
                                <h3>Atualizar dados</h3>
                                
                                <?php

                                    $sql_usuario = "select * from usuario where id = ?";
                                    $stmt_usuario = $conn->prepare($sql_usuario); 

                                    if ($stmt_usuario){
                                        $stmt_usuario->bind_param('i', $_SESSION['id']);
                                        $stmt_usuario->execute();
                                        $result = $stmt_usuario->get_result(); 

                                        $linha_usuario = $result->fetch_assoc();
                                    }

                                ?>

                                <label>Nome</label>
                                <input type="text" class="form-control" name="nome" value="<?php echo $linha_usuario['nome']; ?>">
                            </div>  
                        </div>  

                        <div class="row">
                            <div class="col-lg-6">
                                <label>E-mail</label>
                                <input type="text" class="form-control" name="email" value="<?php echo $linha_usuario['email']; ?>">
                            </div>  

                            <div class="col-lg-6">
                                <label>Senha</label>
                                <input type="password" class="form-control" name="senha" value="<?php echo $linha_usuario['senha']; ?>">
                            </div>  
                        </div>  

                         <div class="row">
                            <div class="col-lg-6">
                                <label>CPF</label>
                                <input type="text" class="form-control" name="cpf" maxlength="14" onKeyPress="formatar('###.###.###-##', this);" value="<?php echo $linha_usuario['cpf']; ?>">
                            </div>  

                            <div class="col-lg-6">
                                <label>Data de nascimento</label>
                                <input type="text" class="form-control" name="datanascimento"  maxlength="10"  OnKeyPress="formatar('##/##/####', this);"  value="<?php echo $linha_usuario['datanascimento']; ?>">
                            </div>  
                            </div>  

                        <div class="row">
                            <div class="col-lg-12 text-right">
                                <input type="submit" class="btn btn-primary btn-block" value="Atualizar">
                            </div>
                        </div>  
                    </div>  

                </form>

            </div>
        </div>
    </section>