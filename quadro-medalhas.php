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
      <?php
         foreach($obj as $item) {
		   echo "País: ". $item['pais'] ."<br>"; 
		   echo "Ouro: ". $item['ouro'] ."<br>"; 
		   echo "Prata: ". $item['prata'] ."<br>"; 
		   echo "Bronze: ". $item['bronze'] ."<br>"; 
	    }
	    ?>
      </div>
    </div>
</section>