<section class="container container-interno">
   <div class="box first">  
      <div class="center">
         <h2 style="margin-bottom:0px;">Ingressos</h2>
         <p class="lead">Garanta os seus ingressos para os jogos</p>
      </div>
      <div class="row"> 
         <section class="col-lg-12 col-md-12 col-sm-12 text-center">
               <a href="?pagina=ingressos" class="btn btn-primary">Todas </a>
               <a href="?pagina=ingressos&idModalidade=1" class="btn btn-primary ">Ginástica Artítica </a>
               <a href="?pagina=ingressos&idModalidade=2" class="btn btn-primary ">Futebol </a>
               <a href="?pagina=ingressos&idModalidade=3" class="btn btn-primary ">Voleibol </a>
               <a href="?pagina=ingressos&idModalidade=4" class="btn btn-primary ">Vôlei de Praia </a>
         </section>
      </div>
      <div class="clearfix"></div>
     <div class='row' style='margin-top:50px;'>
      <?php

      if(isset($_GET['idModalidade']))
      {
         $idModalidade = $_GET['idModalidade'];
         $sql = "select * from eventos where idModalidade = $idModalidade order by datahora";
      }
      else
      {
         $sql = "select * from eventos order by datahora";
      }

       $result = $conn->query($sql);
       if ($result->num_rows >0){

          while($row = $result->fetch_assoc()){

                  echo "<div class='col-md-3 col-lg-3 col-sm-12'>";
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
              }
       }
      ?>
       </div>
   </div>
</section>
