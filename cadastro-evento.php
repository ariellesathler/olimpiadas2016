<section class="container container-interno">
   <div class="box first">
      <form class="row" action="?pagina=eventos-acoes&acao=novo" method="post">
         <div class="col-lg-6 col-lg-offset-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center">
                     <h2>Cadastro de Evento</h2>
                    </div>
                    <div class="clearfix"></div>
                </div>  
            </div>  

            <div class="row">

                <div class="col-lg-6">
                    <label>Modalidade: </label>
                    <select name="idModalidade" class="form-control">
                    <?php

                        $sql_modalidades = "select idModalidade, nome from modalidades order by nome";
                        $stmt = $conn->prepare($sql_modalidades); 

                        if ($stmt):
                            $stmt->execute();
                            $result = $stmt->get_result(); 

                            while ($linha = $result->fetch_array()):

                    ?>
                    <option value="<?php echo $linha['idModalidade']; ?>"><?php echo $linha['nome']; ?></option>
                    <?php

                            endwhile;

                        endif;

                    ?>
                    </select>
                </div>  

                <div class="col-lg-6">
                    <label>Título do evento: </label>
                    <input type="text" class="form-control" name="titulo" value="">
                </div>  

                <div class="col-lg-6">
                    <label>Local</label>
                    <input type="text" class="form-control" name="local" value="">
                </div>  

                <div class="col-lg-6">
                    <label>Descrição</label>
                    <input type="text" class="form-control" name="descricao" value="">
                </div>  
                
                
            </div>  

             <div class="row">
                <div class="col-lg-6">
                    <label>Data do evento: </label>
                    <input type="text" class="form-control" name="datadoevento" value="" maxlength="16" OnKeyPress="formatar('##/##/#### ##:##', this);">
                </div>  
                </div>  

            <div class="row">
                <div class="col-lg-12 text-right">
                    <input type="submit" class="btn btn-primary" value="Cadastrar">
                </div>
            </div>  
        </div>  
      </form>


     <div class='row' style='margin-top:50px;'>
      <?php
         
         $sql = "select * from eventos order by datahora";
      

       $result = $conn->query($sql);
       if ($result->num_rows >0){

          while($row = $result->fetch_assoc()){

                  echo "<div class='col-md-3 col-lg-3 col-sm-12'>";
                     echo "<span>". $row['nome'] . "</span>";
                     echo "<br> ". $row['descricao'];
                     echo "<br> ". $row['local'];
                     echo "<br>". date('d/m/Y H:i', strtotime($row['datahora']));
                    echo"<a style='margin-top:20px;' class='btn btn-warning btn-block' href='?pagina=evento-editar&idEvento=".$row['idEvento']."'>Editar</a>"; 
                    echo"<a style='margin-top:20px;' class='btn btn-danger btn-block' href='?pagina=eventos-acoes&acao=deletar&idEvento=".$row['idEvento']."'>Remover</a></div>"; 
            }                      
              
       }
      ?>
       </div>
   </div>
</section>