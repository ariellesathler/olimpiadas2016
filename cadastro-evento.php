<section class="container container-interno">
   <div class="box first">
      <form class="row" action="?pagina=atualizadados" method="post">
         <div class="col-lg-6 col-lg-offset-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center">
                     <h2>Cadastro de Evento</h2>
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

                    <label>Título do evento: </label>
                    <input type="text" class="form-control" name="nomedoevento" value="<?php echo $linha_usuario['nomedoevento']; ?>">
                </div>  
            </div>  

            <div class="row">
                <div class="col-lg-6">
                    <label>Cidade</label>
                    <input type="text" class="form-control" name="cidade" value="<?php echo $linha_usuario['cidade']; ?>">
                </div>  

                <div class="col-lg-6">
                    <label>Estado</label>
                    <input type="text" class="form-control" name="estado" value="<?php echo $linha_usuario['estado']; ?>">
                </div>  
                
                <div class="col-lg-6">
                    <label>Endereço</label>
                    <input type="text" class="form-control" name="Endereço" value="<?php echo $linha_usuario['endereço']; ?>">
                </div>  
                
            </div>  

             <div class="row">
                <div class="col-lg-6">
                    <label>Data do evento: </label>
                    <input type="text" class="form-control" name="datadoevento" value="<?php echo $linha_usuario['datadoevento']; ?>">
                </div>  
                </div>  

            <div class="row">
                <div class="col-lg-12 text-right">
                    <input type="submit" class="btn btn-primary" value="Cadastrar">
                </div>
            </div>  
        </div>  
      </form>
   </div>
</section>