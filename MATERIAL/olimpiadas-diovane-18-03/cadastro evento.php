<form action="Cadastro_Evento.php" method="post">

<!-- CADASTRO DE EVENTOS-->
<fieldset>
 <legend>Cadastro de Eventos </legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="nome">Nome do evento: </label>
   </td>
   <td align="left">
    <input type="text" name="Nome do Evento">
   </td>
   <td>
    <label for="cidade_estado">Cidade e Estado: </label>
   </td>
   <td align="left">
    <input type="text" name="cidade">
   <input type="text" name="estado">
     <input type="text" name="endereço">
      </td>
  </tr>
  <tr>
   <td>
    <label>DataEvento: </label>
   </td>
   <td align="left">
    <input type="text" name="dia" size="2" maxlength="2" value="dd"> 
   <input type="text" name="mes" size="2" maxlength="2" value="mm"> 
   <input type="text" name="ano" size="4" maxlength="4" value="aaaa">
   </td>
 
  
      
      
      <td align="left">
    <input type="text" name="horario" size="4" maxlength="4">
   </td>
  </tr>
 </table>
</fieldset>