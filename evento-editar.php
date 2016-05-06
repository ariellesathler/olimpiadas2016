<section class="container container-interno">
   <div class="box first">
      <form class="row" action="?pagina=eventos-acoes&acao=editar" method="post">
         <div class="col-lg-6 col-lg-offset-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center">
                     <h2>Editar Evento</h2>
                    </div>
                    <div class="clearfix"></div>
                </div>  
            </div>  

            <div class="row">

                <div class="col-lg-6">
                 <?php

                    $idEvento = $_GET['idEvento'];
                         
                        $sql = "select * from eventos where idEvento=$idEvento limit 1";

                       $result = $conn->query($sql);
                       $linha = $result->fetch_assoc();
                    ?>

                    <input type="hidden" name="idEvento" value="<?php echo $linha['idModalidade']; ?>">


                    <label>Modalidade: </label>
                    <select name="idModalidade" class="form-control">
                    <?php

                        $sql_modalidades = "select idModalidade, nome from modalidades order by nome";
                        $stmt = $conn->prepare($sql_modalidades); 

                        if ($stmt):
                            $stmt->execute();
                            $result = $stmt->get_result(); 

                            while ($linha_mod = $result->fetch_array()):

                            ?>
                            <option value="<?php echo $linha_mod['idModalidade']; ?>" <?php if($linha['idModalidade'] == $linha_mod['idModalidade']){ ?> selected <?php } ?>><?php echo $linha_mod['nome']; ?></option>
                            <?php

                            endwhile;

                        endif;

                    ?>
                    </select>
                </div>  

                <div class="col-lg-6">
                    <label>Título do evento: </label>
                    <input type="text" class="form-control" name="titulo" value="<?php echo $linha['nome'] ?>">
                </div>  

                <div class="col-lg-6">
                    <label>Local</label>
                    <input type="text" class="form-control" name="local" value="<?php echo $linha['local'] ?>">
                </div>  

                <div class="col-lg-6">
                    <label>Descrição</label>
                    <input type="text" class="form-control" name="descricao" value="<?php echo $linha['descricao'] ?>">
                </div>  
            </div>  

             <div class="row">
                <div class="col-lg-6">
                    <label>Data do evento: </label>
                    <input type="text" class="form-control datepicker"  name="datadoevento" value="<?php echo $linha['datahora'] ?>">
                </div>  
                </div>  

            <div class="row">
                <div class="col-lg-12 text-right">
                    <input type="submit" class="btn btn-primary" value="Salvar">
                </div>
            </div>  
        </div>  
      </form>

   </div>
</section>