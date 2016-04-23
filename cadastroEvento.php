<h1>Cadastro de evento</h1>

<form action="Cadastro_Evento.php" method="post">

<!-- CADASTRO DE EVENTOS-->
<fieldset>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="nome">Título do evento: </label>
    <input type="text" name="Nome do Evento">
   </td>
  </tr>
  <tr>
   <td>
    <label for="cidade_estado">Cidade: </label>
    <input type="text" name="cidade">
   </td>
   <td>
    <label for="cidade_estado">Estado: </label>
   <input type="text" name="estado">
   </td>
   <td>
    <label for="cidade_estado">Endereço: </label>
     <input type="text" name="endereço">
   </td>
  </tr>
  <tr>
   <td>
    <label>Data do evento: </label>
    <input type="text" name="dia" size="2" maxlength="2" placeholder="dia"> 
   <input type="text" name="mes" size="2" maxlength="2" placeholder="mês"> 
   <input type="text" name="ano" size="4" maxlength="4" placeholder="ano">
   </td>
   </tr>
   <tr>
     <td colspan=4 style="text-align: center">
                <input type="submit" value="Enviar" /> </td>
   </tr>
 </table>
</fieldset>