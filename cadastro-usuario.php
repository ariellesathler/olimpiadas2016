<section class="container container-interno">
   <div class="box first">
      <form class="row" action="?pagina=atualizadados" method="post">
         <div class="col-lg-6 col-lg-offset-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center">
                     <h2>Cadastre-se</h2>
                    </div>
                    <div class="clearfix"></div>
                    
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
                    <input type="text" class="form-control" name="cpf" value="<?php echo $linha_usuario['cpf']; ?>">
                </div>  

                <div class="col-lg-6">
                    <label>Data de nascimento</label>
                    <input type="text" class="form-control" name="datanascimento" value="<?php echo $linha_usuario['datanascimento']; ?>">
                </div>  
                </div>  

            <div class="row">
                <div class="col-lg-12 text-right">
                    <input type="submit" class="btn btn-primary" value="Atualizar">
                </div>
            </div>  
        </div>  
      </form>
   </div>
</section>