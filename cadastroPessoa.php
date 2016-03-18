<h1>Cadastro de usuário</h1>

<form action="Script_do_Formulario.php" method="post">

<!-- DADOS PESSOAIS-->
<fieldset>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="nome">Nome: </label>
    <input type="text" name="email">
   </td>
   <td>
    <label for="sobrenome">Sobrenome: </label>
    <input type="text" name="sobrenome">
   </td>
  </tr>
  <tr>
   <td align="left">
    <label>Data do nascimento: </label>
    <input type="text" name="dia" size="2" maxlength="2" placeholder="dia"> 
   <input type="text" name="mes" size="2" maxlength="2" placeholder="mês"> 
   <input type="text" name="ano" size="4" maxlength="4" placeholder="ano">
   </td>
   <td></td>
  </tr>
  <tr>
   <td>
    <label for="rg">RG: </label>
    <input type="text" name="rg" size="13" maxlength="13"> 
   </td>
   <td>
    <label for="rg">CPF: </label>
    <input type="text" name="cpf" size="13" maxlength="13"> 
   </td>
  </tr>
 

    <!-- DADOS ENDEREÇO S-->
    <tr>
   <td>
    <label for="rua">Rua:</label>
    <input type="text" name="rua">
   </td>
   <td>
    <label for="numero">Numero:</label>
    <input type="text" name="numero" size="4">
   </td>
  </tr>
  <tr>
   <td>
    <label for="bairro">Bairro: </label>
    <input type="text" name="bairro">
   </td>
   <td>
    <label for="estado">Estado: </label>
    <input type="text" name="estado">
   </td>
  </tr>
  
    <tr>
   <td align="left">
    <label for="estado">Cidade: </label>
   <input type="text" name="cidade" > 
      </td>
  </tr>
    
   <tr>
     <td colspan=2 style="text-align: center">
                <input type="submit" value="Enviar" /> </td>
   </tr>
    
    </fieldset>
 </table>