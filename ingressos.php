
   <form name="IngressosForm" method="post"> 
       
        <h2>Compre aqui os seus ingressos para os jogos</h2>
        <br>
        <div name="game_style">
             <h3>Escolha o estilo dos jogos:</h3>
             <input type="checkbox" value="olimpicos">
            <img src="images/jogos_olimpicos.png" height="120" width="290">
           <br>
            <input type="checkbox" value= "paralimpicos">
            <img src = "images/paralimpicos.png" height="120" width="290">
 
        </div>
        <br>
        
        <div name="game_place">
            <h3>Local dos jogos:</h3>
            <select name="games_place">
            <option value="1">Barra da Tijuca</option>
            <option value="2">Copacabana</option>
            <option value="3">Deodoro</option>
            <option value="4">Maracanã</option>
            <option value="5">Cidades do Futebol</option>
            </select>
            <br>
        </div>
          <br>

       <hr size ="50">
        <div name="sport">
            <h3>Esportes: </h3>
            <form action="">
            <?php
             $sql = "select * from eventos order by datahora";

             $result = $conn->query($sql);
             if ($result->num_rows >0){

                while($row = $result->fetch_assoc()){

                        echo "<div>". $row['nome'];
                        echo "<br>". $row['local'];
                        echo "<br>". $row['datahora']. "<a href='?pagina=compraingresso&id=".$row['idEvento']."'>Comprar</a></div>";                            
                    }
             }


            ?>
                
            </form>
        </div>
        <br>
        <div name="payment">
            <h3>Forma de pagamento: </h3>
            <select name="pay">
            <option value="1">Crédito</option>
            <option value="2">Debito</option>
            <option value="3">Boleto bancário</option>
            <option value="4">PayPal</option>
            <option value="5">Voucher</option>
            </select>
            
        </div>
        
    </form> 
    <br>
    <label> 
          <input type="button" value="Comprar" /> 
    </label>  
   
