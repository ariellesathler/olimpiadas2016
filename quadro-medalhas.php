<?php

	$json = file_get_contents('http://olimpiadas2016.azurewebsites.net/api/quadro-de-medalhas.php');
	$obj = json_decode($json, true);

?>

<section class="container container-interno">
   <div class="box first">  
      <div class="center">
         <h3 style="margin-bottom:0px;">Quadro de Medalhas</h3>
      </div>
      <div class="row"> 
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>País</th>
                <th class="text-center">Ouro</th>
                <th class="text-center">Prata</th>
                <th class="text-center">Bronze</th>
              </tr>
            </thead>
            <tbody>
          <?php
             foreach($obj as $item) {
          ?>
              <tr>
    		        <td><?php echo $item['pais']; ?></td> 
    		        <td class="text-center"><?php echo $item['ouro']; ?></td> 
    		        <td class="text-center"><?php echo $item['prata']; ?></td> 
    		        <td class="text-center"><?php echo $item['bronze']; ?></td> 
              </tr>
          <?php
    	     }
    	    ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</section>