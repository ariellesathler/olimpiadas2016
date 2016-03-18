<head>
    <title>Ingressos</title>
</head> 
<body> 
  
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
            <input type="checkbox" name="vehicle" value="sport">Cerimônia de Abertura<br>
            <input type="checkbox" name="vehicle" value="sport">Cerimônia de Encerramento<br>
            <input type="checkbox" name="vehicle" value="sport">Atletismo<br>
            <input type="checkbox" name="vehicle" value="sport">Atletismo (Maratona)<br>
            <input type="checkbox" name="vehicle" value="sport">Atletismo (Marcha atlética)<br>
            <input type="checkbox" name="vehicle" value="sport">Badminton<br>
            <input type="checkbox" name="vehicle" value="sport">Basquetebol<br>
            <input type="checkbox" name="vehicle" value="sport">Boxe<br>
            <input type="checkbox" name="vehicle" value="sport">Canoagem slalom<br>
            <input type="checkbox" name="vehicle" value="sport">Canoagem velocidade<br>
            <input type="checkbox" name="vehicle" value="sport">Ciclismo BMX<br>
            <input type="checkbox" name="vehicle" value="sport">Ciclismo de estrada<br>
            <input type="checkbox" name="vehicle" value="sport">Ciclismo de pista<br>
            <input type="checkbox" name="vehicle" value="sport">Ciclismo mountain bike<br>
            <input type="checkbox" name="vehicle" value="sport">Esgrima<br>
            <input type="checkbox" name="vehicle" value="sport">Futebol<br>
            <input type="checkbox" name="vehicle" value="sport">Ginástica artística<br>
            <input type="checkbox" name="vehicle" value="sport">Ginástica de trampolim<br>
            <input type="checkbox" name="vehicle" value="sport">Ginástica Gala<br>
                
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
   

   
</body> 