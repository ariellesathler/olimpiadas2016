<section class="container container-interno">
   <div class="box first">  
      <div class="center">
         <h2 style="margin-bottom:0px;">Ingressos</h2>
         <p class="lead">Garanta os seus ingressos para os jogos</p>
      </div>
      
      <section class="center col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-md-12 col-sm-8">
         <div class="col-lg-3 col-md-3 col-sm-2">
            <a href="?pagina=ingressos&idModalidade=1" class="btn btn-primary">Ginástica Artítica </a>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-2">
            <a href="?pagina=ingressos&idModalidade=2" class="btn btn-primary">Futebol </a>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-2">
            <a href="?pagina=ingressos&idModalidade=3" class="btn btn-primary">Voleibol </a>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-2">
            <a href="?pagina=ingressos&idModalidade=4" class="btn btn-primary">Vôlei de Praia </a>
         </div>
      </section>

     
         <?php

         if(isset($_GET['idModalidade']))
         {
            $sql = "select * from eventos order by datahora where idModalidade = ?";
         }

         else{

         }

          $result = $conn->query($sql);
          if ($result->num_rows >0){

             while($row = $result->fetch_assoc()){

                     echo "<div>". $row['nome'];
                     echo "<br>". $row['local'];
                     echo "<br>". date('d/m/Y H:i', strtotime($row['datahora']));

                     if(isset($_SESSION['id'])){
                        echo"<a href='?pagina=compraingresso&id=".$row['idEvento']."'>Comprar</a></div>";    
                     }
                     else{
                        echo"<a href='?pagina=login'>Comprar</a></div>"; 
                     }                        
                 }
          }


         ?>
   </div>
</section>
