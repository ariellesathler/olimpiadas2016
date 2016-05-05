<section class="container container-interno">
   <div class="box first">  
      <div class="center">
         <h2 style="margin-bottom:0px;">Ingressos</h2>
         <p class="lead">Garanta os seus ingressos para os jogos</p>
      </div>
      <div class="row"> 
         <section class="col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3 col-md-12 col-sm-8">
            <div class="col-lg-3 col-md-3 col-sm-2">
               <a href="?pagina=ingressos&idModalidade=1" class="btn btn-primary btn-block">Ginástica Artítica </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-2">
               <a href="?pagina=ingressos&idModalidade=2" class="btn btn-primary btn-block">Futebol </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-2">
               <a href="?pagina=ingressos&idModalidade=3" class="btn btn-primary btn-block">Voleibol </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-2">
               <a href="?pagina=ingressos&idModalidade=4" class="btn btn-primary btn-block">Vôlei de Praia </a>
            </div>
         </section>
      </div>
      <div class="clearfix"></div>
     
      <?php

      if(isset($_GET['idModalidade']))
      {
         $idModalidade = $_GET['idModalidade'];
         $sql = "select * from eventos order by datahora where idModalidade = $idModalidade";

         var_dump($sql);
      }
      else
      {
         $sql = "select * from eventos order by datahora";
      }

       $result = $conn->query($sql);
       if ($result->num_rows >0){

          while($row = $result->fetch_assoc()){

                  echo "<div class='row' style='margin-top:50px;'> 
                  <div class='col-md-3 col-lg-3 col-sm-12'>";
                     echo "<span>". $row['nome'] . "</span>";
                     echo "<br> ". $row['descricao'];
                     echo "<br> ". $row['local'];
                     echo "<br>". date('d/m/Y H:i', strtotime($row['datahora']));

                     if(isset($_SESSION['id'])){
                        echo"<a style='margin-top:20px;' class='btn btn-warning btn-block' href='?pagina=compraingresso&id=".$row['idEvento']."'>Comprar</a></div>";    
                     }
                     else{
                        echo"<a style='margin-top:20px;' class='btn btn-warning btn-block' href='?pagina=login'>Comprar</a></div>"; 
                     }   
                     echo "</div>";                     
              }
       }
      ?>
   </div>
</section>
